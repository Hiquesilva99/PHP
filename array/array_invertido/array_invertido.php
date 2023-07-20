<?php

$lista_nome = array("joao", "jose", "maria", "joana");

$lista_nome_copy = array_reverse($lista_nome);

while(key($lista_nome_copy) !== null){

    echo "olá, " . current($lista_nome_copy) . "<br />";

    next($lista_nome_copy);
}
