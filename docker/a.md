# 🕒 4. Komunikacja między usługami i zarządzanie kontenerami (45 min)

## 🌟 Cel lekcji

Po tej lekcji uczestnicy będą w stanie:

- Połączyć aplikację PHP i Reacta w środowisku Docker.
- Pobierać dane z backendu w React za pomocą API.

---

## 📌 Plan lekcji

### 1. Teoria: Jak komunikują się usługi? (20 min)

- **Jak PHP komunikuje się z MySQL?**
    - Połączenie przez PDO/MySQLi.
    - Zastosowanie `docker-compose.yml` do definiowania sieci między usługami.
- **Jak frontend pobiera dane z backendu?**
    - Tworzenie API REST w PHP.
    - Fetchowanie danych w React.

---

### 2. Ćwiczenie praktyczne (25 min)

#### 2.1. Tworzenie prostej API REST w PHP

Dodajemy plik `api.php` w katalogu `project/`:

```php
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$host = 'mysql-container';
$db   = 'mydatabase';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $statement = $pdo->query("SELECT * FROM users");
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(["error" => "Błąd połączenia: " . $e->getMessage()]);
}
```
```

#### Uncaught PDOException: could not find driver2.2. Fetchowanie danych w React

Edytujemy `frontend/src/App.js`:

```jsx
import { useState, useEffect } from 'react';

function App() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    fetch("http://localhost:8080/api.php")
      .then(res => res.json())
      .then(data => setUsers(data))
      .catch(err => console.error(err));
  }, []);

  return (
    <div>
      <h1>Lista użytkowników</h1>
      <ul>
        {users.map(user => (
          <li key={user.id}>{user.name} - {user.email}</li>
        ))}
      </ul>
    </div>
  );
}
export default App;
```

\#---

### 2.4. Tworzenie tabeli i wprowadzanie danych z pliku SQL

#### 2.4.1. Tworzenie pliku `init.sql`

W katalogu `docker/mysql/` tworzymy plik `init.sql`:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO users (name, email) VALUES
('Jan Kowalski', 'jan@example.com'),
('Anna Nowak', 'anna@example.com');
```

#### 2.4.2. Importowanie danych z pliku SQL

Po uruchomieniu kontenera, dane można zaimportować ręcznie za pomocą komendy `docker exec`:

```bash
docker exec -i mysql-container mysql -uuser -ppassword mydatabase < docker/mysql/init.sql
```

Dzięki temu skrypt SQL zostanie wykonany w bazie danych po jej uruchomieniu.

Dodajemy ścieżkę do pliku SQL w `docker-compose.yml`, aby dane były ładowane przy starcie kontenera:

```yaml
  db:
    volumes:
      - db_data:/var/lib/mysql
```

#### 2.4.3. Restartowanie bazy i sprawdzanie tabeli

Po dodaniu pliku restartujemy kontener bazy danych:

```bash
docker-compose down
docker-compose up -d db
```

Sprawdzamy zawartość tabeli:

```bash
docker exec -it mysql-container mysql -uuser -ppassword -e "SELECT * FROM users;"
```

Jeśli wszystko działa poprawnie, zobaczymy listę użytkowników w bazie danych.


### 2.5. Tworzenie Dockerfile dla PHP
Aby uruchomić naszą aplikację PHP w kontenerze, tworzymy plik `docker/php/Dockerfile`:
```dockerfile
FROM php:8.2-fpm
WORKDIR /var/www/html

# Instalacja rozszerzenia PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Kopiowanie kodu aplikacji
COPY ../project /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
```

### 2.6. Dodanie PHP do `docker-compose.yml`
Modyfikujemy `docker-compose.yml`, aby dodać usługę PHP:
```yaml
  php:
    build:
      context: ../docker
      dockerfile: php/Dockerfile
    container_name: php-container
    volumes:
      - ../project:/var/www/html
    networks:
      - app_network
```

### 2.7. Uruchomienie kontenera PHP
Po dodaniu pliku `Dockerfile` i aktualizacji `docker-compose.yml`, uruchamiamy kontenery:
```bash
docker-compose up -d php
```

Sprawdzamy, czy kontener PHP działa:
```bash
docker ps
```

Jeśli wszystko działa poprawnie, serwer PHP powinien być uruchomiony w kontenerze.
## 📝 Podsumowanie lekcji (5 min)

**Co uczestnicy osiągnęli?**

- Stworzyli proste API REST w PHP.
- Pobierali dane w React przy pomocy `fetch`.

**Pytania i odpowiedzi** – omówienie napotkanych problemów.

---

**Karol May © 2025**

