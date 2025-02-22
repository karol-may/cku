# Lekcja 5: Dziedziczenie i interfejsy w PHP

## 🎯 Cel lekcji:
Poznanie zasad dziedziczenia i interfejsów w PHP.

## 📚 Materiały dydaktyczne:
- Dokumentacja PHP (OOP): [https://www.php.net/manual/en/language.oop5.inheritance.php](https://www.php.net/manual/en/language.oop5.inheritance.php)

---

# 1️⃣ Dziedziczenie klas (`extends`)
Klasa potomna może dziedziczyć metody i właściwości klasy nadrzędnej.

```php
class Animal {
    public function makeSound() {
        return "Dźwięk zwierzęcia";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

$dog = new Dog();
echo $dog->makeSound();
```

---

# 2️⃣ Klasy abstrakcyjne
Nie można tworzyć instancji klasy abstrakcyjnej – służy jako szablon dla innych klas.

```php
abstract class Vehicle {
    abstract public function move();
}

class Car extends Vehicle {
    public function move() {
        return "Samochód jedzie!";
    }
}

$car = new Car();
echo $car->move();
```

---

# 3️⃣ Interfejsy (`interface`)
Interfejsy wymuszają implementację metod w klasach.

```php
interface Walkable {
    public function walk();
}

class Human implements Walkable {
    public function walk() {
        return "Człowiek chodzi!";
    }
}

$human = new Human();
echo $human->walk();
```

---

# 🏆 4️⃣ Zadanie praktyczne

### **Zadanie 1:**  
1. Stwórz klasę `Animal` z metodą `makeSound()`.
2. Utwórz klasy `Dog` i `Cat`, które dziedziczą `Animal` i nadpisują metodę `makeSound()`.

---

# 📌 5️⃣ Praca własna

✅ Utwórz interfejs `Swimmable` i zaimplementuj go w klasie `Fish`.  
✅ Stwórz klasę `Vehicle`, która będzie klasą abstrakcyjną z metodą `drive()`, a następnie utwórz klasę `Bike`, która ją rozszerza.  

---

To koniec lekcji! 🎯🚀
