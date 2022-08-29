<?php
include('verifica_login.php');
?>
<br />
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Administrativo - Leilão</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<body>
<div id="container" align="center">
  <div align="center" id="skipmenu"><a href="index.php"><img src="img/fujioka.png" alt="Stack Overflow" height="50" width="180"/><br/></a></div> 
  <h3>Olá, <?php echo $_SESSION['usuario'];?> <a href="logout.php">Sair</a></h3>
  <br />
  <h3>Painel Administrativo - Leilão Fora DOA</h3>
  <br />
  <form method="get" action="/fujioka/cadastro.php">
    <button type="submit">CADASTRAR PRODUTOS NO LEILÃO</button>
</form>
<form method="get" action="/fujioka/verprodutos.php">
    <button type="submit">VER PRODUTOS CADASTRADOS</button>
</form>
<form method="get" action="/fujioka/vencedores.php">
    <button type="submit">FINALIZAR LEILÃO</button>
</form>
<br />
<p>Só clique no botão ZERAR PRODUTOS se tiver certeza, 
        <br />pois ao clicar 1 vez ele irá zerar a lista toda
</form>
<form method="get" action="/fujioka/zerar.php">
    <button type="submit">ZERAR PRODUTOS</button>
  <!--<div id="menu"></div> - NÃO VOU USAR MENU LATERAL, MAS FICA AQUI A BASE-->
  <div id="contents"></div>
  </div>
</body>
  <footer>
    <div id="footer">
    <p><center>© Copyright - Danilo Nunes de Araújo - 2019 ~ 2021 <br /><a href="https://www.linkedin.com/in/danilo-nunes-araujo-amaral-b05548111/">Perfil Linkedin</a></p>
  </div>
  </footer>
</html>
</html>