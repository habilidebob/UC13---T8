<?php
 
 $n1 = 3.8;
 $n2 = 9;
 $n3 = 8;
 $n4 = 10;

 $media = ($n1 + $n2 + $n3 + $n4) / 4;

 // Mostrar a média:
 echo "Sua média é: $media <br>";

 // Mostrar se foi aprovado ou reprovado:
 if($media >= 6){
    echo "Você foi aprovado!";
 }else{
    echo "Você foi reprovado!";
 }

?>