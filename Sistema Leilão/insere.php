<?php
include('conexao.php');




$servername = "localhost";
$database = "login";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$ficha = $_GET["cod_ficha"];
$artigo = $_GET["cod_artigo"];
$nome = $_GET["nome_produto"];
$estado = $_GET["estado_produto"];
$valor = $_GET["valor_produto"];
 
$sql = "INSERT INTO produtos (cod_ficha, cod_artigo, nome_produto, estado_produto, valor_produto) VALUES ('".$ficha."','".$artigo."','".$nome."','".$estado."','".$vallor."')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: cadastrar.php?removido=true");
die();
?>