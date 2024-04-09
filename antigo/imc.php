<?php

$peso = 81;
$altura = 1.80;

$imc = $peso / ($altura*$altura);

echo "Seu IMC é: $imc <br>";

if($imc < 18.5){
    echo "Você está abaixo do peso.";
}else if($imc < 24.9){
    echo "Você está no peso ideal.";
}else{
    echo "Você está com sobrepeso!";
}


?>