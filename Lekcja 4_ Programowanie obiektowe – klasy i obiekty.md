
# Lekcja 4: Programowanie obiektowe – klasy i obiekty

## 🎯 Cel lekcji:
Poznanie podstaw programowania obiektowego w PHP: klasy, obiekty, metody, konstruktory oraz modyfikatory dostępu.

## 📚 Materiały dydaktyczne:
- Dokumentacja PHP (OOP): [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

---

# 1️⃣ Wprowadzenie do obiektowości
Programowanie obiektowe (OOP) pozwala na organizację kodu w **klasy** i **obiekty**.

**Przykładowa klasa w PHP:**

```php
class User {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User();
$user->setName("Jan");
echo "Użytkownik: " . $user->getName();
```

---

# 2️⃣ Właściwości i metody w klasach
**Właściwości (zmienne wewnątrz klasy):**
```php
class Car {
    public $brand;
    public $model;

    public function showInfo() {
        return "Samochód: $this->brand $this->model";
    }
}

$car = new Car();
$car->brand = "Toyota";
$car->model = "Corolla";
echo $car->showInfo();
```

---

# 3️⃣ Konstruktor (`__construct`)
Konstruktor to metoda, która uruchamia się automatycznie przy tworzeniu obiektu.

```php
class Product {
    public $name, $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function showProduct() {
        return "Produkt: $this->name, Cena: $this->price zł";
    }
}

$product = new Product("Laptop", 3000);
echo $product->showProduct();
```

---

# 4️⃣ Modyfikatory dostępu: public, private, protected

### **`public`** – dostępny wszędzie
- Może być używany zarówno wewnątrz, jak i na zewnątrz klasy.

```php
class Person {
    public $name = "Jan";

    public function sayHello() {
        return "Cześć, jestem " . $this->name;
    }
}

$person = new Person();
echo $person->sayHello(); // OK
echo $person->name; // OK
```

### **`private`** – dostępny tylko w obrębie danej klasy
- Nie można go używać poza klasą.

```php
class BankAccount {
    private $balance = 1000; // Prywatne pole

    public function getBalance() {
        return $this->balance; // Możemy uzyskać dostęp wewnątrz klasy
    }
}

$account = new BankAccount();
echo $account->getBalance(); // OK
// echo $account->balance; // BŁĄD: Nie można uzyskać dostępu do prywatnej właściwości
```

### **`protected`** – dostępny w klasie i klasach dziedziczących
- Nie można go używać bezpośrednio na obiekcie, ale można w klasach potomnych.

```php
class Animal {
    protected $species = "Pies";

    public function getSpecies() {
        return $this->species;
    }
}

class Dog extends Animal {
    public function bark() {
        return "Woof! Jestem " . $this->species; // Można używać w klasie potomnej
    }
}

$dog = new Dog();
echo $dog->bark(); // OK
// echo $dog->species; // BŁĄD: `species` jest protected
```

---

# 🏆 5️⃣ Zadanie praktyczne

### **Zadanie 1:**
1. Stwórz klasę `User` z **`private`** polem `password` i metodą `setPassword($password)`.
2. Dodaj metodę `verifyPassword($password)`, która porówna podane hasło z zapisanym.
3. Utwórz instancję klasy i przetestuj zabezpieczenie hasła.

---

# 📌 6️⃣ Praca własna

✅ Utwórz klasę `Employee` z **`protected`** polem `salary`.  
✅ Dodaj metodę w klasie potomnej, która pozwala na odczytanie `salary`, ale nie pozwala na jego zmianę bezpośrednio.

---

To koniec lekcji! 🎯🚀
