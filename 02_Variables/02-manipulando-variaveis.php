<?php

/*
Deve-se ter cuidado ao manipular variáveis PHP pois ao contario de muitas linguangens
o interpretador php permite operações que podem resular em erros dificieis de serem encontrados
em aplicações grandes, por isso, o desenvolvedor deve ter plena consciencia
de cada operação.
 */

 $b = 0;

 $a = $b + "a";

 /*
    O resultado será 0. O intepretador ignora a string mas nao gera nenhum erro.
  */
 echo "</br>".$a;

 $c =$b + "2";

 /*
    Por outro lado, o interpretador assume que a string 2 é um numero
 */
 echo "</br>".$c;

 $d = $b + "2" + '3';

 /*
    O resultado de d é 5.
 */
 echo "</br>".$d;

 /*
 No exemplo abaixo o interpretador ignora as strings e soma os valores numericos.
 O resultado é 13
 */
$e = "3 navios" + "10 submarinos";

echo "</br>".$e;

