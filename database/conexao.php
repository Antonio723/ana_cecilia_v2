<?php
$HOST  = "localhost";
$USER  = "u223174876_root";
$PASSWORD  = "#aC&XjK>707";
$DATABASE  = "u223174876_AnaCecilia"; 

$conexao = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

var_dump ($conexao->connect_error);

if($conexao){
    echo"conexao ao Banco de Dados execultada com sucesso "."</br>";
}else{
    echo "conexao ao Banco de Dados com problema ";
}