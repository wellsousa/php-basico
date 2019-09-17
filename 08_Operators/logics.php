<?php

$num1 = 4;
$num2 = 4;
$num3 = 4;
$num4 = 4;


/*
Operador Logico E
*/
if(($num1 == $num2) && ($num3 == $num4)){
    echo "</br>todos os numeros são iguais";
}else{
    echo "</br>todos os números são diferentes.";
}

/*
    Operador Logico OU
*/
$cidades = array('berlim', 'toquio', 'berlim');

if (($cidades[0] == $cidades[1]) || ($cidades[0] == $cidades[2])){
    echo "</br>existe repetição de cidades";
}