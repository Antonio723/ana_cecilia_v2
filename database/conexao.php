<?php
$HOST  = "localhost";
$USER  = "root";
$PASSWORD  = "123";
$DATABASE  = "AnaCecilia"; 

$conexao = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

var_dump ($conexao->connect_error);

if($conexao){
    echo"conexao ao Banco de Dados execultada com sucesso "."</br>";
}else{
    echo "conexao ao Banco de Dados com problema ";
}