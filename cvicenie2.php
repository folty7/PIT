<?php

//1. a=5, b=7 – vypíšte väčšie číslo z dvoch uvedených čísiel. Použite ternárne porovnávacie operátory.
$a = 5;
$b = 7;

if ($a > $b) {
    echo $a;
} else if ($a === $b) {
    echo "su rovnake";
} else {
    echo $b;
}

echo "<hr>";

//2. Obvod kruhu z cvičenia 1 príklad 2 vypíšte iným textom, použite iný font a aj veľkosť.

$obvod_kruhu = 2 * 3.14 * 5;
echo "<span style='font-size: 2em; font-family: Arial'>" . $obvod_kruhu . "</span>";

echo "<hr>";

//3. Každé číslo v dvojkovej sústave z cvičenia 1 príklad 4 vypíšte inou farbou.

$number = 29;
$binary = "";
$zvysok = 0;
$i = 1;
$farby = ['purple', 'green', 'blue', 'red', 'black', 'magenta'];
echo $farby[rand(0, 4)];

while ($number > 0) {
    $zvysok = $number % 2;
    $number = floor($number / 2);
    $binary = $zvysok . $binary;
    echo "<span style='color:" . $farby[rand(0, 4)] . "'><br>${i}. delenie= ${number}, zvysok= ${zvysok} <br>" . $binary . "</span>";

    $i++;
}

echo "<hr>";

/*4. Napíšte kód, ktorý na obrazovku bude vypisovať text:
Už to „skoro“ viem! Dokážem napísať dolár: $ aj lomku \ */

echo "Už to \"skoro\" viem! Dokážem napísať dolár: \$a aj lomku \.";

echo "<hr>";

/* 5. Vypíšte text na obrazovku. Pričom vypísané číselné hodnoty sa budú definovať cez premenné (nie
priamo do textu) $x= 2 a premenná $y=6.
Výstup na obrazovke:
Matematické operácie vykonané s premennými $x a $y:
$x*$x je 2*2 = 4
$y/$x je 6/2=3 */

$x = 2;
$y = 6;

echo "\$x * \$x je 2*2 = " . ($x * $x);
echo "<br>";
echo "\$y / \$x je 6/2 = " . ($y / $x);

echo "<hr>";


//6. Vytvorte skript, ktorý bude vypisovať v cykle FOR čísla od 1 do 20.
for ($i = 0; $i < 20; $i++){
    echo $i+1 . ", ";
}
echo "<hr>";

//7. Skopírujte skript z predchádzajúceho príkladu a vypíšte len párne čísla.
//8. Predchádzajúci skript doplňte o čiarky medzi číslami a na konci za číslom 20 vložte výkričník.
for ($i = 1; $i <= 20; $i++){
    if ($i % 2 == 0){
        if ($i == 20) {
            echo $i . "!";
        } else {
            echo $i . ", ";
        }
    }
}
echo "<hr>";

//9. Vypíšte náhodne vygenerované čísla od 1 do 20, ukončite cyklus ak počet iterácii presiahne 10.
for ($i = 1; $i <= 10; $i++){
    echo $randomNum = rand(1,20) . ", ";
}
echo "<hr>";


//uloha 10
$funkcia = "odmocnenie";
$cislo1 = 20;
$cislo2 = 2;

if ($funkcia == "scitanie"){
    echo $cislo1 + $cislo2;
} else if ($funkcia == "odcitanie"){
    echo $cislo1 - $cislo2;
} else if ($funkcia == "nasobenie"){
    echo $cislo1 * $cislo2;
} else if ($funkcia == "delenie"){
    echo $cislo1 / $cislo2;
} else if ($funkcia == "umocnenie"){
    echo $cislo1 ** $cislo2;
} else if ($funkcia == "odmocnenie"){
    echo $cislo1 ** 1/$cislo2;
}

// doplnit kalkulacu cez switch, doplnit moznost logaritmu
