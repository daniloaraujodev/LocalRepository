<?php
include('verifica_login.php');
include('conexao.php');
?>
  <title>Leilão de Produtos</title>
<img src="img/fujioka.png" alt="Stack Overflow" height="50" width="180"/><br/>
<h2> Lista de produtos disponíveis para o Leilão</h2> 
<br/>

<legend><b>Seu lance deve ser em valor inteiro, não será aceito valor em centavos.</legend><legend> Digite o valor do seu lance sem vírgula e ponto. Exemplo: <b>100 / 101</b></legend>
<legend><b>Após digitar o valor do seu lance e clique em enviar</b></legend><legend><b>Pense bem antes de dar seu lance, você só pode dar 1 lance por produto.</b></legend><br />
<?php

// Criando tabela e cabeçalho de dados:
 echo "<table border=0>";
 echo "<tr>";
 echo "<th><center>FICHA</th>";
 echo "<th><center>ARTIGO</th>";
 echo "<th><center>PRODUTO</th>";
 echo "<th><center>DEFEITO</th>";
 echo "<th><center>LANCE MÍNIMO</th>";
 echo "<th><center>SEU LANCE</th>";
 echo "</tr>";



 $sql = "SELECT * FROM produtos ORDER BY nome";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while

 # PEGANDO DADOS DO USUARIO LOGADO
$dados = mysqli_query($conexao,"SELECT * FROM usuario WHERE usuario = '".$_SESSION['usuario']."'");
$dadosusuario = mysqli_fetch_array($dados);

 while ($registro = mysqli_fetch_array($resultado)):
   $ficha = $registro['ficha'];
   $artigo = $registro['artigo'];
   $nome = $registro['nome'];
   $estado = $registro['estado'];
   $valor = $registro['valor'];
   //$categoria = $registro['categoria_produto'];
   ?>
   <tr>
  <td><?= $ficha ?></td>
  <td><?= $artigo?></td>
  <td><?= $nome?></td>
  <td><?= $estado?></td>
  <td>R$ <?=$valor?></td>
  <td>
    <form method="POST" action="registerlance.php" id="lance_product" autocomplete="off">
        <input type="hidden" name="id_lance" value="<?= $registro['id_product'] ?>">
        <input type="hidden" name="user_matric" value="<?= $dadosusuario['matricula'] ?>">
        <input type="hidden" name="user_name" value="<?= $dadosusuario['nome_usuario'] ?>">
        <input type="hidden" name="ficha" value="<?= $ficha ?>">
        <input type="hidden" name="artigo" value="<?= $artigo ?>">
        <input type="hidden" name="nome" value="<?= $nome ?>">
        <input type="hidden" name="estado" value="<?= $estado ?>">
        <input type="text" name="lance" class="text" align="center" placeholder="Digite o valor"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="lance" value="<?= isset($_POST['lance']) ? htmlspecialchars($_POST['lance']) : '' ?>">
       <td><input class="text" type="submit" id="enviar_lance" name="enviar_lance"><p></td>
    </form>
  </td>
   <?php

 endwhile;
 mysqli_close($conexao);
 echo "</table>";

 
 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
    
<style type="text/css">
  
textarea, input[type="text"], fieldset.elist ul, select, fieldset.elist > legend {
  border: 1px #cccccc solid;
  border-radius: 5px;
}

input[type="text"], fieldset.elist, select, fieldset.elist > legend {
  height: 19px;
  font-family: monospace;
  font-size: 14px;
  text-align: center;
  font-style: normal;
}

input[type="text"]:hover, textarea:hover, select:hover, fieldset.elist:hover > legend {
  background-color: #ddddff;
}

input[type="text"], fieldset.elist {
  width: 100px;
}

input[type="text"]:focus {
  background: #ffcccc no-repeat 2px center !important;
}

input[type="text"]:focus, textarea:focus, select:focus, fieldset.elist > legend {
  border: 2px #ccaaaa solid;

}

html {
  text-align: center;
  font-family: monospace;
}
body
    {
        width:70%;
        margin-left:auto;
        margin-right:auto;
        background-color: #E0E0E0;
        font-family: monospace;
        font-size: 12px;
        width:800px;
        display: inline-block;
        margin: 20px auto;
        text-align: center;
    }
  
td{
  font-family: calibri;
  font-size: 12px;
  text-align: left;

}
th{
  font-family: monospace;
  font-size: 12px;

}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 0 2px;
  padding-top: 0;
  padding-bottom: 0;
  padding-right: 5;
  padding-left: 5;
  text-align: left;
 }

td:first-child { width: 20px  }
td:first-child + td {  width: 20px }
td:first-child + td + td  {  width: 240px }
td:first-child + td + td + td {  width: 190px }
td:first-child + td + td + td + td{  width: 100px }
td:first-child + td + td + td + td + td{  width: 105px }

form {
    width: 5px;
    height: 7px;
    padding: 0px;
    padding-top: 0px;
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;


}
input[type="submit"]
{
  
  border-radius: 2px;
  color: white;
  padding: 1px 5px;
 font-weight: bold;
  
  text-align: center;
  align-content: center;
  font-size: 10px;
  background-color: #FF0000; /* Green */
  
}

input[type="text"]
{

  border-radius: 2px;
  color: black;
  padding: 1px 5px;

  
  text-align: center;

  font-size: 10px;

  
}

.modal-alert {
    position:  fixed;
    top:  -100%;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index:  99999;
    width:  100%;
    height:  100%;
}
.modal-alert > .message {
    width:  230px;
    padding:  10px;
    border-radius: 5px;
    background:  #f68542;
}
</style>


    <div class='modal-alert'>
        <div class='message'>Aqui vai a mensagem ok's</div>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
<script>

     $('form').submit(function (e){
        e.preventDefault();
        $input = $(this).serialize();
        $url = $(this).attr('action');
        $.ajax({
            url: $url,
            method: 'post',
            data: $input
        }).done(function (data){
            $('.modal-alert .message').html(data);
            $('.modal-alert').css({
                'top': 0
            })

            setTimeout(()=>{
                window.location.reload()
            },1000)
        })
    });

</script>
  <p><center>Copyright - Danilo Nunes de Araújo - 2019 ~ 2021</p>
  <p><a href="https://www.linkedin.com/in/danilo-nunes-araujo-amaral-b05548111/">Perfil Linkedin</a></p>