<?php 

include 'conecta_mysql.inc';

$email 			 = $_POST['email'];
$nome			 = $_POST['nome'];
$telefone  	 	 = $_POST['telefone'];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$email','$nome', '$telefone')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluí­do com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

