<?php
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>

<?php
// Conectando ao banco de dados:
$Servidor = 'localhost';
$nomeBanco = 'login';
$Usuario = 'root';
$Senha = '';
$strcon = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco); 

//Zerar tabela produtos após clicar em zerar
$tabela = 'produtos';
$sql = "TRUNCATE TABLE {$tabela}"; 
mysqli_query($strcon, $sql) or die("Erro ao tentar excluir registro");
echo "Cliente excluído";
error_reporting(E_ALL);
ini_set('display_errors', '1');
mysqli_close($strcon);
?>