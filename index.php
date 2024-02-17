<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>1. Vytvorte 4 premenné a vypíšte ich.</p>
<?php
    $string = "Prvy PHP skript";
    $int = 12;
    $float = 3.14;
    $bool = True;

    echo $string .'<br>'. $int .'<br>'. $float .'<br>'. $bool;
?>

<br><br><p>2. Spočítajte premennú celé číslo a desatinné číslo z príkladu č.1. Výsledok musí byť celé číslo.</p>
<?php
    $sum = $int + $float;
    echo (int)$sum;
?>

<br><br><p>3. Vytvorte konštantu s názvom CESTA a s hodnotou C:\Users\Default\Documents\index.php Vypíšte konštantu: CESTA</p>
<?php
    const CESTA = "C:\Users\Default\Documents\index.php";
    echo CESTA;
?>

<br><br><p>4. Vypočítajte obvod kruhu s polomerom 5</p>
<?php
    const pi = 3.14;
    $r = 5;
    $obvod_kruhu = 2 * pi * $r;
    echo "Obvod kruhu s polomerom 5 je: ".$obvod_kruhu;
?>

<br><br><p>5. Vypočítajte obsah kruhu s polomerom 5</p>
<?php
    $obsah_kruhu = pi * pow($r, 2);
    echo "Obsah kruhu s polomerom 5 je: ".$obsah_kruhu;
?>

<br><br><p>6. Vypiste aktualny cas</p>
<?php
    echo "Aktualny cas je " . date("H:i");
?>

<br><br><p>7. Vypiste 29 v dvojkovej sustave</p>
<?php
    $number = 29;
    $binary = "";
    $zvysok = 0;
    $i = 1;

    while ($number > 0) {
        $zvysok = $number % 2;
        $number = floor($number / 2);
        $binary = $zvysok . $binary;
        echo "${i}. delenie= ${number}, zvysok= ${zvysok} <br>";
        $i++;
    }

    echo "Binárna reprezentácia čísla 29 je: " . $binary;
?>

</body>
</html>
