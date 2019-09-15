<?php

/*
Laço for
*/
for($contador=10; $contador >0; $contador--){
    echo "repetição com for: $contador</br>";
    echo "</hr>";
}

/*
Laço while
A verificação da condição é feita no inicio da execução do laço. Se
a condição for falsa o codigo não será executado.
*/

$contador = 0;

while($contador < 10){
    echo "repetição com while: $contador  </br>";
    $contador += 1;
}

/*
Laço do while
Garante que o codigo seja executado pelo menos uma vez mesmo
que a condição seja falsa.
*/

$contador = 11;
do{
    echo "Executando o codigo...</br>";
}while($contador < 10);