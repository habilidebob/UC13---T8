<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Contato.class.php');

    $contato = new Contato();
    $contato->nome = $_POST['nome'];
    $contato->email = $_POST['email'];
    $contato->telefone = $_POST['telefone'];
    if($contato->Cadastrar() == 1){
        // Redirecionar de volta ao index.php:
        header('Location: ../index.php?sucesso=0');
    }else{
        header('Location: ../index.php?falha=0');
    }

}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>