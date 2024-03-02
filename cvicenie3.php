<?php

/*
1.
Je dané číslo 1000. Deľte toto číslo 2, ukončíte cyklus keď výsledok delenia bude menej
ako 50. Spočítajte a vypíšte počet iterácii. Úlohu riešte najprv pomocou cyklu WHILE,
potom pomocou cyklu FOR
*/

$x = 1000;
for($j=0; $x > 50; $j++, $x /= 2){
    echo $x."<br>";
}
echo "Pocet iteracii= ".$j;
echo "<hr>";


/*
2.
Napíšte skript, ktorý bude vypočítavať ľubovoľnú mocninu ľubovoľného čísla (bez
použitia funkcie POW). Použite cyklus FOR
*/

function mocnina($cislo, $base){
    $vysledok = 1;
    for($i = 0; $i < $base; $i++){
        $vysledok *= $cislo;

    }
    return "vysledok je ".$vysledok;
}

echo mocnina(2, 3);

echo "<br> <hr>";

/*
3.
Vypíšte v cykle 10x vetu: 10 červených jabĺk, 9 červených jabĺk,... Prispôsobte
skloňovanie počtu jabĺk.
*/

for($i = 10; $i > 0; $i--){
    if($i >= 5){
        echo $i." cervenych jablk <br>";
    } else{
        echo $i." cervene jablka <br>";
    }
}

echo "<br> <hr>";


/*
4.
Pomocou dvoch vnorených cyklov vypíšte násobilku do 15, pričom čísla musia byť
umiestnené do tabuľky. Prvé čísla v stĺpcoch a prvé čísla v riadkoch musia byť na žltom
pozadí (použite CSS - style), tučným písmom a čísla po hlavnej diagonále musia byť
tučným, červeným písmom. Odporúčam najprv vypísať len samotné násobky čísiel
a následne zakomponovať HTML kód a podmienky
*/

echo "<table border='5'>";
for ($l=1; $l <= 15 ; $l++) {
    echo "<tr>";
    for ($k=1; $k <= 15 ; $k++) {
        if($k == 1 || $l == 1){
            echo "<td style='background-color: yellow; font-weight: bold;'>";
        } elseif($k == $l+1 || $k+1 == $l){
            echo "<td style='background-color: dodgerblue;'>";
        } elseif($k == $l){
            echo "<td style='background-color: black; color: red; font-weight: bold;'>";
        } elseif($k*$l == 60){
            echo "<td style='background-color: green;'>";
        } else{
            echo "<td>";
        }
        echo $l * $k;
        echo "<td>";
    }
    echo "</tr>";
}
echo "</table>";