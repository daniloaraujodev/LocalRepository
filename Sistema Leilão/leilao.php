<?php
include('verifica_login.php');
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel do Usuário</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<body>
<div id="container">
  <div id="header" title="sitename">      
    <div align="center"id="skipmenu"><a href="index.php"><img src="img/fujioka.png" alt="Stack Overflow" height="50" width="180"/><br/></a></div>
    <center><h3>Olá, você está logado na matrícula <?php echo $_SESSION['usuario'];?> <a href="logout.php"><br /> Para Sair - CLIQUE AQUI</a></h3></center>     
    <br /><h2><center>Painel do Usuário</center></h2></center>  
  </div><br />
  <center>

    Ao clicar no botão VER O LEILÃO, você verá a lista dos produtos leiloados e pode dar seu lance.<br />
      Ao clicar no botão VER MEUS LANCES, você verá todos os produtos que você deu lances.<br />
    </center><br />
  <div id="header"></div>
  
  <div id="mainnav">
      <form align="center" method="get" action="/fujioka/listaprodutos.php">
        <button type="submit">VER O LEILÃO</button><br />
      </form><br />
      <form align="center" method="get" action="/fujioka/lances.php">
      <button type="submit">VER MEUS LANCES</button>
      </form>
        <br />
  </div>
  <!--<div id="menu"></div> - NÃO VOU USAR MENU LATERAL, MAS FICA AQUI A BASE-->
  <div id="contents">
    <!--Aqui é o corpo da página - nesse momento não há conteúdo aqui-->
  </div>
  </div>
</body>
<div id="footer">
    <p><center>© Copyright - Danilo Nunes de Araújo - 2019 ~ 2021 <br /><a href="https://www.linkedin.com/in/danilo-nunes-araujo-amaral-b05548111/">Perfil Linkedin</a></p>
  </div>
</html>
</html>