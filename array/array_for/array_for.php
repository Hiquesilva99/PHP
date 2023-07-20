<?php

$lista_nome = array("joao", "jose", "maria", "joana");

echo count($lista_nome);

$total_lista_nome = count($lista_nome);
reset($lista_nome);

for($i=0; $i< $total_lista_nome; $i++){

    echo "Olá, " . $lista_nome[$i] . "<br />";

}