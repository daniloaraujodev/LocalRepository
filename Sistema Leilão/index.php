<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leilão FORA DOA FUJIOKA</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
 
<body bgcolor="#E0E0E0">

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">LEILÃO FORA DOA</h3>
                    <h3 class="title has-text-grey"><a href=""><img src="img/fujioka.png" alt="Stack Overflow"/></a></h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <p style="color:black"><b>Para fazer Login, Digite sua Matrícula e Senha</b></p> 
                    <div class="box">
                        <form action="login.php" method="POST" autocomplete="off">
                            <div class="field">
                                <div class="control">
                                    <!--no input abaixo o comando oninput força a digitar só caracteres numericos-->
                                    <input name="usuario" name="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="input is-large" placeholder="SUA MATRÍCULA" onfocus="this.value='';">
                                </div>
                            </div>
 
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" onfocus="this.value='';"placeholder="DIGITE SUA SENHA">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            <br/><a href="cadastrausuario.php">Não tem cadastro? - <b>Criar Cadastro Agora</b></a><br />
                            <br/><a href="admin.php">Painel do Administrador</b></a>
                        </form>
                    </div>
                </div>
                <p style="color:red"><center>© Copyright - Danilo Nunes de Araújo - 2019 ~ 2021</b></p>
                 <p><a href="https://www.linkedin.com/in/danilo-nunes-araujo-amaral-b05548111/">Perfil Linkedin</a></p>
            </div>
        </div>
    </section>
  </body>
 </html>