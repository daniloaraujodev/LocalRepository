<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Divisão página HTML</title>
  
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<body>
  <center>
<div id="container">
  <div id="header" title="sitename">      
    <div align="center" id="skipmenu"><a href="index.php"><img src="img/fujioka.png" alt="Stack Overflow" height="50" width="180"/><br/></a></div>      
    <h3>Cadastro Novo Usuário<br />Leilão Fora DOA</h3>   
  </div>
  <br />
  <div id="header"></div>
  <div id="mainnav">
  <!--<button type="submit">Enviar Cadastro</button>
  <button type="submit">Enviar Cadastro</button>-->
  </div>
  <!--<div id="menu"></div> - NÃO VOU USAR MENU LATERAL, MAS FICA AQUI A BASE-->
  <div id="contents">
    Insira suas informações corretamente abaixo.<br />
<br />
  <form action="incluiCadastro.php" method="post" name='form' autocomplete="off">
  <pre>
<center><b>Usuário:            <input type="text" name="user" maxlength="100" size="30" placeholder="Digite o número da sua matrícula"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" /></center>
<b>Senha:              <input type="password" name="pass" maxlength="100" size="30" placeholder="Crie uma senha"><br />
<b>Nome:               <input type="text" name="name" maxlength="100" size="30" placeholder="Digite seu Nome completo"><br />
<b>Local de Trabalho:  <input type="text" name="local" maxlength="100" size="30" placeholder="Digite o local onde trabalha"><br />
<b>Matrícula:          <input type="text" name="matric" maxlength="100" size="30" placeholder="Digite o número da sua matrícula"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" ><br/>
<b><br/><button type="submit">Finalizar Cadastro</button></p>
</pre>
</form>
  </div>
    </div>
</div>
</body>
<div id="footer">
    <p><center>© Copyright - Danilo Nunes de Araújo - 2019 ~ 2021 <br /><a href="https://www.linkedin.com/in/danilo-nunes-araujo-amaral-b05548111/">Perfil Linkedin</a></p>   
  </div>
</html>