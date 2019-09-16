<?php

function mostraCidade($cidade){
    echo "Cidade: <b> $cidade </b>";   
}

function soma($num1 = 0, $num2 = 0){
    return $num1 + $num2;
}

$casado = false;

function casado(){
    return $casado;
}


mostraCidade("Belo Horizonte");

echo "</br>";

echo soma(4,3);

echo "</br>";

if  (!casado()){
    echo "Ainda sou solteiro!";
}

echo "</br>";