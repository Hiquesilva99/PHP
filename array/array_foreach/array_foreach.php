<?php

$lista_nome = array("joao", "jose", "maria", "joana");

reset($lista_nome);

foreach($lista_nome as $nome){

    echo "olá, " . $nome . "<br />";
}