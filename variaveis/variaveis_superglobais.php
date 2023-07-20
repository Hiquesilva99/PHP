<?php


try{

    if (!empty($_GET["parametro1"]))
    {
        if(strlen($_GET["parametro1"]) < 3)
        {
            throw new Exception("Valor do parametro 1 precisa ter mais que 3 caracteres");
        }
    }else {
        throw new Exception("Parammetro 1 vazio ou inexistente");
    }

    if (empty($_GET["parametro2"]))
    {
        throw new Exception("nenhum valor para parametro 2");
    }

    $nome = $_GET["parametro1"];

    $idade = (int) $_GET["parametro2"]; //casting

    $frase = "olá meu nome é " . $nome;
    $frase .= " e tenho " . $idade . " anos"; 

    echo $frase;


} catch(Exception $e) {

    echo $e->getMessage();
}