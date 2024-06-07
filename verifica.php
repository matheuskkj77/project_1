<?php 

$email 			 = $_POST['email'];
$nome  	 	     = $_POST['nome'];
$telefone  	 	 = $_POST['telefone'];
$erro 			 = 0;


//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 8 || strstr($email, '@')==false) {
    echo "Favor digitar o seu email corretamente.<br>";
    $erro = 1;
}

//Verifica se o campo nome não está em branco
if (empty($nome) OR strstr($nome, ' ')==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo telefone está preenchido corretamente
if (preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/", $telefone)==FALSE) {
	echo "favor digitar seu telefone corretamente.<br>"; 
	$erro=1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.inc';
}

 ?>
</body>
</html>