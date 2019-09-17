<?php

$frase = "Meu nome é ";
$nome = "Wellington";
$idade = 23;

define('NOME', 'Elson');

/*
Para utilizar o valor de uma constante você não precisa usar
o $. Por padrão, constantes são definidas em maiusculo.
*/
echo $frase.NOME.$idade;

echo "</br>";

echo 'Meu nome é '.$nome;

echo "</br>";

/*
Quando utilizamos aspas duplas não precisamos utilizar
o operador de concatenação. O php saberá que $palavra-chave 
se trata de uma variavel.

*/
echo "Meu nome é $nome";

/*
Em algumas situações precisamos das aspas duplas no meio da string.
Nesses casos devemos usar assim:  

              \" texto \".
*/
echo "<div class=\"$myDivClass\">Meu conteúdo da DIV</div>";