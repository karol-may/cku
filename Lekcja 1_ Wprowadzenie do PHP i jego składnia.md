# Lekcja 1: Wprowadzenie do PHP i jego składnia

## 🎯 Cel lekcji:
Zapoznanie się z podstawami PHP, jego składnią oraz pierwszymi operacjami. Lekcja jest przeznaczona zarówno dla obecnych, jak i nieobecnych uczniów.

## 📚 Materiały dydaktyczne:
- Dokumentacja PHP: [https://www.php.net/manual/en/](https://www.php.net/manual/en/)
- Edytor kodu (PHPStorm, VSCode, Sublime Text)
- Serwer lokalny (XAMPP, Laragon) lub PHP CLI

---

## 1️⃣ Czym jest PHP? (Teoria)
PHP (Hypertext Preprocessor) to język skryptowy stosowany do tworzenia dynamicznych stron internetowych. PHP działa po stronie serwera, co oznacza, że użytkownik nie widzi kodu źródłowego – zamiast tego widzi wygenerowaną stronę HTML.

Przykłady zastosowań PHP:  
✅ Tworzenie dynamicznych stron internetowych  
✅ Obsługa formularzy, logowanie użytkowników  
✅ Praca z bazami danych  
✅ Tworzenie API  

**Historia PHP:**  
PHP został stworzony w 1994 roku przez Rasmusa Lerdorfa jako zbiór skryptów CGI do obsługi jego strony internetowej. Obecnie PHP jest jednym z najpopularniejszych języków backendowych.

---

## 2️⃣ Podstawowa składnia PHP
Kod PHP można umieścić w pliku `.php` i otoczyć znacznikami:

```php
<?php
    echo "Witaj w świecie PHP!";
?>
```

Można także wywołać krótszą wersję:

```php
<?= "Witaj w świecie PHP!" ?>
```

To samo co `echo`, ale krótsze.

---

## 3️⃣ Zmienne w PHP i ich typy

PHP pozwala na przechowywanie danych w zmiennych. W PHP nie trzeba określać typu zmiennej – język sam rozpoznaje typ.

### **Podstawowe typy danych w PHP**  

| Typ        | Przykład                      | Zakres wartości |
|------------|------------------------------|----------------|
| **String** | `"Hello, World!"`             | Dowolny ciąg znaków |
| **Integer** | `123`, `-50`, `0x1A`          | -2^31 do 2^31-1 (dla 32-bit) |
| **Float** | `3.14`, `-0.99`, `2.5e3`       | IEEE 754 (zmiennoprzecinkowe) |
| **Boolean** | `true`, `false`              | Prawda lub fałsz |
| **Array** | `[1, 2, 3]`, `["a", "b", "c"]` | Indeksowana lub asocjacyjna |
| **Object** | `new ClassName()`             | Instancja klasy |
| **Null** | `null`                          | Brak wartości |
| **Resource** | `mysql_connect()`           | Zasób systemowy |
| **Callable** | `function() {}` lub `[$obj, "method"]` | Funkcja anonimowa lub metoda obiektu |

### **Przykład użycia zmiennych**

```php
<?php
    $name = "Anna"; // String
    $age = 25; // Integer
    $height = 1.75; // Float
    $is_student = true; // Boolean
    $colors = ["czerwony", "zielony", "niebieski"]; // Array

    echo "Cześć, mam na imię $name, mam $age lat i mierzę $height m.";
?>
```

---

## 4️⃣ Operatory matematyczne w PHP

PHP obsługuje różne operatory matematyczne:

```php
$x = 10;
$y = 5;

echo $x + $y; // Wynik: 15
echo $x - $y; // Wynik: 5
echo $x * $y; // Wynik: 50
echo $x / $y; // Wynik: 2
echo $x % $y; // Wynik: 0 (reszta z dzielenia)
```

---

## 5️⃣ Zadanie praktyczne

### **Zadanie 1:**  
Napisz skrypt, który:  
✅ Przyjmuje dwie liczby i zwraca ich sumę, różnicę, iloczyn oraz iloraz.  
✅ Tworzy zmienną `name` i wyświetla komunikat „Witaj, [name]!”  

Przykładowe rozwiązanie:

```php
<?php
    $a = 8;
    $b = 4;

    echo "Suma: " . ($a + $b) . "<br>";
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    echo "Iloraz: " . ($a / $b) . "<br>";

    $name = "Anna";
    echo "Witaj, " . $name . "!";
?>
```

---

## 6️⃣ Podsumowanie i pytania
- Omówienie błędów, najczęstsze pułapki w składni PHP.
- Dyskusja i odpowiedzi na pytania uczestników.

---

## ❓ Czy to wszystkie typy danych w PHP?
Nie! PHP obsługuje także `resource` (zasoby, np. połączenie do bazy danych) oraz `callable` (funkcje anonimowe i metody jako argumenty).

**Przykład `callable`:**
```php
function sayHello() {
    return "Cześć!";
}

$callback = "sayHello";
echo $callback(); // Wywołanie funkcji z zmiennej
```

---

To koniec lekcji 1! Jeśli miałeś pytania lub trudności, sprawdź dokumentację PHP i spróbuj ponownie! 🎯🚀
