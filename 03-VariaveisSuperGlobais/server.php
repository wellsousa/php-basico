<?php

/*
    procure server-variable no google para saber a lista completa de 
    todas as informações que podem ser objetidas através da
    variavel $_SERVER.
*/

    //imprimindo o nome do servidor
    echo "</br>Nome do Servidor: ".$_SERVER['SERVER_NAME'];

    //imprimento a pasta onde o servidor está sendo executado
    echo "</br>Local onde o servidor está sendo executado: ".$_SERVER['DOCUMENT_ROOT'];

    //imprimindo todas as variaveis contidas em $_SERVER
    echo "<pre>";
        print_r($_SERVER);
    echo "</pre>";
?>