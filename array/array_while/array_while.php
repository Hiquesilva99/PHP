<?php

$lista_nome = array("joao", "jose", "maria", "joana");

reset($lista_nome);

while(key($lista_nome) !== null){

    echo "olá, " . current($lista_nome) . "<br />";

    next($lista_nome);
}