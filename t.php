<?php

$cargos = ["Gerente", "Técnico", "Atendente"];
$funcionarios = [
    [
        "nome" => "Cleber",
        "id_cargo" => 1
    ],
    [
        "nome" => "Robson",
        "id_cargo" => 2
    ]
];


foreach($funcionarios as $f){
    echo $f['nome']. " | ". ($cargos[ $f['id_cargo']-1 ])."<br>";
}

?>