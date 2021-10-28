<?php
//Shell short
$array = array(50, 48, 3, 0, 658, 56); //Pole proměnných.
$arraylenght = count($array); //Počet proměnných.
$y = count($array) / 2;
$m = 0;
while ($y > 0) {
    for ($i = 0; $i < $arraylenght - $y; $i++) {
        $j = $i;
        $tmp = $array[$j];
        while ($j >= $y && $tmp > $array[$j - $y]) {
            $array[$j] = $array[$j - $y];
            $j = $j - $y;
        }
        $array[$j] = $tmp;
        $m++;
    }
    if ($y == 2) {
        $y = 1;
    } else {
        $y = $y / 2.2; //O kolik se pole posune. (2,2 je nejlepší číslo. Můžeme použít i jiné [1, 4, 10, 23, ...])
    }
}
for ($a = 0; $a < $arraylenght; $a++) {
    echo ($array[$a] . "\n"); //Výpis seřazeného pole.
}
echo ("Počet kroků: " . $m); //Kolik kroků se udělá, než se pole seřadí.
