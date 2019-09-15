<?php

/*
Arrays são variaveis multidimensionais com n indices
*/

$nomes = array("Joao", "Felipe", "Marcelo");

//uma array começa do indice zero
echo $nomes[0];

foreach($nomes as $nome){
    echo "</br>".$nome;
}

/*
    Voce pode declarar um array com colchetes vazios e adicionar
    uma quantidade indterminada de itens a medida que forem necessarios
*/

//variavel unidimensional
$profissoes;
//se torna um array
$profissoes[]= "programador";
$profissoes[]= "medico";
$profissoes[]= "dentista";

foreach($profissoes as $profissao){
    echo "</br>".$profissao;
}

/*
Existe mais um modo de declaração de arrays
*/

$estados = ['Minas Gerais', 'Bahia', 'São Paulo', 'Rio deJaneiro'];

foreach($estados as $estado){
    echo "</br>".$estado;
}

/*
Um Array pode conter variaveis de varios tipos diferentes
O array abaixo armazena:

- nome
- idade
- peso
- solteiro(true ou false)
*/


$informacoes_indice = array('wellington', 31, 69.5, true);

foreach($informacoes_indice as $informacao){
    echo "</br>".$informacao;
}

/*
Em varias situações pode ser conveniente usar chaves ao 
inves de indices. No exemplo abaixo guardaremos as mesmas informaçoes
em um array com chaves
*/

$informacoes_chave['nome'] = "wellington";
$informacoes_chave['idade'] = 31;
$informacoes_chave['peso'] = 69.5;
$informacoes_chave['solteiro'] = true;

foreach($informacoes_chave as $informacao=>$value){
    echo "</br>".$informacao."=".$value;
}