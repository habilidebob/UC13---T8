<?php

$dados = [
    [
        "id" => 6,
        "nome" => "Paulo"
    ],
    [
        "id" => 7,
        "nome" => "José"
    ],
    [
        "id" => 8,
        "nome" => "Carlos"
    ],
];

foreach($dados as $arr){
    foreach($arr as $k => $registro){
        echo "$k: $registro <br>";
    }
    echo "===========<br>";
}



?>