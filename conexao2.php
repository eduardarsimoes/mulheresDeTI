<?php
$servidor = "127.0.0.1:8080";
$usuario = "admin";
$senha="jaPs4c50vBfg";
$dbname="techladies";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conn) {
        die('Erro na conexão: '.mysql_error()); #2
    }
    mysql_close(); #3
?>
