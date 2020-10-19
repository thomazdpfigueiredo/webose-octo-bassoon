<?php
//criar a conexão com o banco de dados
$host = 'localhost';//nome do servidor
$user = 'root';//nome do usuário
$senha = '';//senha do banco
$banco = 'projetoweb';//nome do banco

$conn = new mysqli($host, $user, $senha, $banco);

if($conn->connect_error){
	die("Falha na conexão ".$conn->connect_error);
}

?>