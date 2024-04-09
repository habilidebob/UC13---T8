<?php

$filmes = ["O Predestinado", "Kick-Ass", "Kick-Ass 2", "Mãe!", "Tenet"];

foreach($filmes as $f){
    echo "$f <br>";
}

echo "===============<br>";

$idades = [10, 5, 4, 12, 3];

for($i=0;$i<5;$i++){
    echo $idades[$i]. "<br>";
}

echo "===============<br>";

$notas = [6, 3.5, 8, 7, 9, 7, 5];

echo array_sum($notas)/count($notas);


?>