
# Lekcja 6: Obsługa wyjątków, autoloading i przestrzenie nazw (Namespaces)

## 🎯 Cel lekcji:
Poznanie sposobu organizacji kodu w PHP za pomocą przestrzeni nazw (`namespace`), obsługi błędów oraz mechanizmów autoloadingu.

## 📚 Materiały dydaktyczne:
- Dokumentacja PHP (Namespaces): [https://www.php.net/manual/en/language.namespaces.php](https://www.php.net/manual/en/language.namespaces.php)
- Dokumentacja PHP (Wyjątki): [https://www.php.net/manual/en/language.exceptions.php](https://www.php.net/manual/en/language.exceptions.php)

---

# 1️⃣ Przestrzenie nazw (`namespace`) w PHP

**Przestrzenie nazw (Namespaces)** pozwalają na organizację kodu i uniknięcie konfliktów nazw klas lub funkcji.

## **1.1 Definiowanie `namespace`**
Każdy plik może zawierać przestrzeń nazw na początku:

```php
namespace App;

class User {
    public function getName() {
        return "Jan Kowalski";
    }
}
```

## **1.2 Użycie `namespace` w innym pliku**
Aby użyć klasy z przestrzeni nazw, należy ją zaimportować:

```php
use App\User;

$user = new User();
echo $user->getName();
```

Alternatywnie można użyć pełnej ścieżki:

```php
$user = new App\User();
```

## **1.3 Zagnieżdżone przestrzenie nazw**
```php
namespace App\Models;

class Product {
    public function getInfo() {
        return "Produkt A";
    }
}
```

```php
use App\Models\Product;

$product = new Product();
echo $product->getInfo();
```

---

# 2️⃣ `require`, `include`, `require_once`, `include_once`

PHP pozwala na wczytywanie kodu z innych plików, co ułatwia organizację kodu i jego wielokrotne używanie.

## **`require` – obowiązkowe do działania skryptu**
```php
require "config.php";
```

## **`include` – opcjonalne, nie zatrzymuje skryptu**
```php
include "config.php";
```

## **`require_once` – wczytuje plik tylko raz**
```php
require_once "config.php";
```

## **`include_once` – wczytuje plik tylko raz**
```php
include_once "config.php";
```

---

# 3️⃣ Autoloading (`spl_autoload_register`)

PHP pozwala na automatyczne ładowanie klas bez użycia `require`.

```php
spl_autoload_register(function ($class) {
    include str_replace("\\", "/", $class) . ".php";
});

$obj = new App\User(); // Plik App/User.php zostanie automatycznie załadowany
```

---

# 🏆 4️⃣ Zadanie praktyczne

### **Zadanie 1:**
1. Stwórz przestrzeń nazw `App\Services` i dodaj do niej klasę `Logger` z metodą `log($message)`.
2. Użyj tej klasy w innym pliku, wywołując metodę `log()`.

---

# 📌 5️⃣ Praca własna

✅ Utwórz katalog `Models/` i dodaj tam plik `Car.php`, definiując w nim przestrzeń nazw `App\Models`.  
✅ Stwórz plik `index.php`, który wczyta klasę `Car` przy użyciu autoloadingu.

---

To koniec lekcji! 🎯🚀
