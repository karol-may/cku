# Lekcja 3: Funkcje i ich zastosowanie

## 🎯 Cel lekcji:
Zrozumienie budowy i używania funkcji w PHP oraz ich zastosowań.

## 📚 Materiały dydaktyczne:
- Dokumentacja PHP (funkcje): [https://www.php.net/manual/en/language.functions.php](https://www.php.net/manual/en/language.functions.php)

---

## 1️⃣ Czym są funkcje w PHP?
Funkcje pozwalają na grupowanie kodu w celu jego ponownego użycia.  

**Budowa funkcji w PHP:**

```php
function nazwaFunkcji($parametr) {
    return "Wartość: " . $parametr;
}

echo nazwaFunkcji("Test");
```

---

## 2️⃣ Tworzenie funkcji z argumentami i wartościami domyślnymi

Funkcja może przyjmować argumenty i zwracać wynik:

```php
function powitanie($imie = "Użytkowniku") {
    return "Cześć, $imie!";
}

echo powitanie("Jan");
echo powitanie();
```

**Funkcja może także zwracać więcej niż jedną wartość:**

```php
function getCoordinates() {
    return [50.0614, 19.9383]; // Kraków
}

list($lat, $lon) = getCoordinates();
echo "Szerokość: $lat, Długość: $lon";
```

---

## 3️⃣ Ćwiczenie praktyczne

### **Zadanie 1:**  
1. Napisz funkcję `calculateBMI($weight, $height)`, która oblicza wskaźnik BMI i zwraca kategorię.  
2. Stwórz funkcję, która zwraca największą liczbę w tablicy.

Przykładowe rozwiązanie:

```php
function calculateBMI($weight, $height) {
    $bmi = $weight / ($height * $height);
    return ($bmi < 18.5) ? "Niedowaga" : (($bmi < 25) ? "Norma" : "Nadwaga");
}

echo calculateBMI(70, 1.75);
```

---

## 4️⃣ Praca własna:
Napisz funkcję, która:
✅ Oblicza średnią arytmetyczną z podanej tablicy liczb.  
✅ Sprawdza, czy dana liczba jest liczbą pierwszą.  

Przykładowe rozwiązanie:

```php
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

echo isPrime(7) ? "Liczba pierwsza" : "Nie jest pierwsza";
```

✅ **Kryteria oceny:** Funkcje działają poprawnie i zwracają odpowiednie wartości.

---

To koniec lekcji! Jeśli masz pytania, sprawdź dokumentację PHP! 🚀
