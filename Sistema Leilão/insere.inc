<?php 

include 'conecta_mysql.inc';

$ficha 			 = $_POST['ficha'];
$artigo 		 = $_POST['artigo'];
$nome  	 	 	 = $_POST['nome'];
$estado  		 = $_POST['estado'];
$valor   		 = $_POST['valor'];

$sql = "INSERT INTO produtos VALUES";
$sql .= "('','$ficha','$artigo', '$nome', '$estado', '$valor')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();


/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: cadastro.php');
exit;
?>