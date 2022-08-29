<?php
$conexao = mysqli_connect("localhost", "root", "")
or die ('Não conseguiu conectar ao banco de dados!');
$base = mysqli_select_db($conexao , "login")
or die
("NÃ£o existe a base de dados solicitada");
setlocale(LC_ALL, 'pt_BR');
$query = "INSERT INTO usuario (usuario, senha, nome_usuario, local_usuario, matricula, id) values ('".$_POST['user']."',MD5('".$_POST['pass']."'),'".$_POST['name']."','".$_POST['local']."','".$_POST['matric']."','')";
$resultado = mysqli_query($conexao , $query)
or die ("Inclusão não realizada");
header('Location:cadastrausuario.php');

if(empty($_POST['user']) or empty($_POST['pass']) or empty($_POST['name']) or empty($_POST['local']) or empty($_POST['matric'])){
   	echo "Campos não estão completos, verifique novamente";
   }

   header("Location: index.php");
die();
?>