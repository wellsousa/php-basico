<?php

/*
    O comando continue permite que se interrompa a execução do codigo a paritr
    do trecho onde foi chamado ignorando qualquer codigo abaixo.
*/

for($i = 0; $i < 10; $i++){
    //o codigo que seria executado na iteração 5 
    if($i == 5){
        continue;
    }

    echo "</br>".$i;
}