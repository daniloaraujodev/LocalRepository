<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$ficha 			 = $_POST['ficha'];
$artigo 		 = $_POST['artigo'];
$nome  	 	 	 = $_POST['nome'];
$estado  		 = $_POST['estado'];
$valor   		 = $_POST['valor'];
$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($ficha) ) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo nome não está em branco
if (empty($artigo) ) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}
//Verifica se o campo nome não está em branco
if (empty($nome) ) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}
//Verifica se o campo nome não está em branco
if (empty($estado) ) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}
//Verifica se o campo nome não está em branco
if (empty($valor) ) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}


//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.inc';

}
header('Location: cadastro.php');
exit;
 ?>
</body>
</html>