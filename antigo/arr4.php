<?php

$dados = [
    "ID" => 667,
    "Nome" => "Jorge Pimps",
    "Idade" => 41,
    "Salario" => 5400.36,
    "Função" => "Operador de Retroescavadeira"
];

foreach($dados as $chave=>$valor){
    echo "$chave: $valor <br>";
}

?>