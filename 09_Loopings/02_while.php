<?php

$i = 0;

/*
    O comando break termina a execução de um determinado bloco de codigo
*/

//loop infiinto
while(1){
    //condição de saida do laço
    if($i == 10) break;

    //incremento do contador e ao mesmo tempo sua impressao com a função echo
    echo ++$i."</br>";
}