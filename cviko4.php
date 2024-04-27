<?php
/*
uloha 1
*/

$dni = ['Pondelok', 'utorok', 'streda', 'stvrtok', 'piatok', 'sobota', 'nedela'];
$farby = array('blue', 'green', 'red', 'yellow', 'brown', 'purple', 'pink');

for ($i=0; $i < count($dni); $i++) {
    echo "<p style='color:{$farby[$i]}'>{$dni[$i]}</p>";
}

echo "<br>";

foreach ($dni as $key => $value) {
    echo "<p style='color:{$farby[$key]}'>{$value}</p>";
}

echo "<br><hr>";

/*
uloha 2
*/

$pole1 = array(
    array(33,21,45),
    array(17,84,29),
    array(13,31,48)
);
$pole2 = array(
    array(56,36,57),
    array(73,82,26),
    array(15,91,27)
);
echo "<div style='display: flex; gap: 1rem;'>";

echo "<table>";
foreach ($pole1 as $riadok) {
    echo "<tr>";
    foreach ($riadok as $hodnota) {
        echo "<td>".$hodnota."</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<table>";
foreach ($pole2 as $riadok2) {
    echo "<tr>";
    foreach ($riadok2 as $hodnota2) {
        echo "<td>".$hodnota2."</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "</div>";
echo "<br><hr>";

/*
uloha 3
*/

$pole3 = array(
    array(56,36,57),
    array(73,82,26),
    array(15,91,27)
);
echo "<table border='1'>";

for ($j=0; $j < count($pole3); $j++) {
    echo "<tr>";
    $sum = 0;
    for ($k=0; $k < count($pole3); $k++) {
        echo "<td>".$pole3[$j][$k]."</td>";
        $sum += $pole3[$j][$k];
    }
    echo "<td style='color: red;'>".$sum."</td>";
    echo "</tr>";
}

for ($j=0; $j < count($pole2); $j++) {
    $sum = 0;
    for ($k=0; $k < count($pole2); $k++) {
        $sum += $pole2[$k][$j];
    }
    echo "<td style='color: blue;'>".$sum."</td>";
}

echo "</table>";
echo "<br><hr>";

/*
uloha 4
*/

echo "<table>";
foreach ($pole1 as $key=>$riadok) {
    echo "<tr>";
    foreach ($riadok as $key2=>$hodnota) {
        if($key == $key2){
            echo "<td style='padding: 10px; color: red;'>1</td>";
        } else {
            echo "<td style='padding: 10px;'>".$hodnota."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
echo "<br><hr>";

/*DU*/
//Vytvorte funkciu ktorá bude príjmať dve dvojrozmerné polia (dve matice) a vynásobí ich navzájom.
// Navrhnite funkciu univerzálne, aby nebola limitovaná na presný počet stĺpcov a riadkov funkcie.
// Zabezpečte aj aby nevalidná matica, nebola spracovávaná.
// Funkcia bude vracať cez návratovú hodnotu dvojrozmerné pole vynásobenej matice.

$matica1 = array(
    array(1,2),
    array(3,4)
);
$matica2 = array(
    array(5,6),
    array(7,8)
);
function nasob_matice(array $matica1, array $matica2){
    $result = array();
    $rows1 = count($matica1);
    $cols1 = count($matica1[0]);
    $cols2 = count($matica2[0]);

    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $cols1; $k++) {
                $result[$i][$j] += $matica1[$i][$k] * $matica2[$k][$j];
            }
        }
    }
    return $result;
}

if( (count($matica1) !== count($matica2)) || (count($matica1[0]) !== count($matica2[0])) ){
    echo "Velkosti matic sa nerovnaju. Nasobenie nie je mozne spravit.";
} else {
    $result = nasob_matice($matica1, $matica2);

    foreach ($result as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
}