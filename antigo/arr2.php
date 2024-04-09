<?php

$animais = ["Gato", "Cachorro", "Leão", "Javali", "Capivara"];

echo $animais[0];

echo "<br>======================<br>";

for($i=0; $i<count($animais); $i++){
    echo $animais[$i]." <br>";
}

echo "<br>======================<br>";

foreach($animais as $animal){
    echo mb_strtoupper($animal)." <br>";
}

?>