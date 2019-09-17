<?php

$num1 = 7;    //inteiro
$num2 = 23;   //inteiro
$num3 = '7'; //string

if ($num1 == $num2){
    echo "</br>Os números $num1 e $num2 são iguais";
}else{
    echo "</br>Os números $num1 e $num2 são diferentes.";
}

/*
Mesmo $num1 sendo um inteiro e $num3 uma string o retorno dessa 
comparação será verdadeiro.
*/
if($num1 == $num3){
    echo "</br>Os números $num1 e $num3 são iguais";
}else{
    echo "</br>Os números $num1 e $num3 são diferentes.";
}

/*
Para saber se os valores são iguais e de mesmo tipo voce deve usar
o operador ===
*/

if ($num1 === $num3){
    echo "<br/>Os numeros $num1 e $num3 tem mesmo tipo e valor.";
}else{
    echo "<br/>Os numeros $num1 e $num3 tem  tipo e/ou valor diferentes.";
}

var_dump($num1);
var_dump($num2);
var_dump($num3);