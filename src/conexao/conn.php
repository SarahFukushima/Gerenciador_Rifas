<?php

 //VARIÁVEIS PARA A REALIZAÇÃO DA CONEXÇÃO COM O BANCO DE DADOS
 $hostname = "sql102.epizy.com";
 $database = "epiz_31454050_RIFAS";
 $username = "epiz_31454050";
 $password = "EKuvBGlSr4Db";

 if($conecta = mysqli_connect($hostname, $username, $password, $database)){
    echo 'Conectado ao banco de dados' .$database.'.....';
 }else{
     echo 'Erro: '.mysqli_connected_error();
 }