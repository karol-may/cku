
# Lekcja 2: Struktury sterujące w PHP

## 🎯 Cel lekcji:
Poznanie wszystkich dostępnych struktur sterujących w PHP oraz ich praktyczne zastosowanie.

## 📚 Materiały dydaktyczne:
- Dokumentacja PHP (warunki i pętle): [https://www.php.net/manual/en/language.control-structures.php](https://www.php.net/manual/en/language.control-structures.php)

---

# 🏁 1️⃣ Instrukcje warunkowe w PHP

### **if, else, elseif**

```php
$wiek = 20;

if ($wiek >= 18) {
    echo "Jesteś pełnoletni.";
} else {
    echo "Nie masz jeszcze 18 lat.";
}
```

---

# 🔄 2️⃣ Pętle w PHP

### **Pętla for**

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Liczba: $i <br>";
}
```

---

# 🚀 3️⃣ Kontrola przepływu pętli

### **break – zatrzymuje pętlę**
```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "Liczba: $i <br>";
}
```

### **continue – pomija aktualną iterację i przechodzi do następnej**
```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Liczba: $i <br>";
}
```

### **continue 2 – pominięcie iteracji w dwóch poziomach pętli**
```php
for ($i = 1; $i <= 3; $i++) {
    echo "Pętla zewnętrzna: $i<br>";

    for ($j = 1; $j <= 3; $j++) {
        if ($j == 2) {
            continue 2; // Pomija iterację w obu pętlach
        }
        echo " → Pętla wewnętrzna: $j<br>";
    }
}
```

**Wynik działania kodu:**
```
Pętla zewnętrzna: 1
 → Pętla wewnętrzna: 1
Pętla zewnętrzna: 2
 → Pętla wewnętrzna: 1
Pętla zewnętrzna: 3
 → Pętla wewnętrzna: 1
```

**Działanie `continue 2`**
- Gdy `$j == 2`, przerywana jest zarówno aktualna iteracja pętli `$j`, jak i kolejna iteracja pętli `$i`.
- W efekcie, po napotkaniu `continue 2`, kod przechodzi od razu do **następnej iteracji pętli `$i`**.

---

# 📌 4️⃣ Praca własna

✅ Napisz skrypt, który generuje tablicę 5x5 liczb i używa `continue 2`, aby pominąć drukowanie liczb podzielnych przez 3 na obu poziomach pętli.

---

To koniec lekcji! 🎯🚀
