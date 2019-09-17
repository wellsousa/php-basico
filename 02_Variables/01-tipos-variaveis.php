<?php

/*
 O PHP possui 8 tipos primitivos de variaveis:

 - 4 tipos escalares
 - 3 tipos compostos
*/

//ESCALARES

//string
$nome = "wellington";
//integer
$idade = 31;
//float
$peso = 69.5;
//boolean
$solteiro = true;

echo "<h1>Variaveis escalares</h1></br>";
echo    "Meu nome é ".$nome." e minha idade é ".$idade;

//COMPOSTOS
echo "<hr>";
echo "<h1>Variáveis Compostas</h1>";

//array
$cidades = array("belo horizonte", "sao paulo", "rio de janeiro");

/*object
Para criar um novo objeto utilize a função new para instanciar uma classe
*/
    class foo{
        function do_foo(){
            echo "doing foo.";
        }
    }

    $bar = new foo();

    $bar->do_foo();

/*
callable
*/
echo "<br>";

function my_callback_function(){
    echo "hello world";
}

//callback simples
call_user_func('my_callback_function');


//ESPECIAIS
//serao vistos em a frente

//resource
//null
