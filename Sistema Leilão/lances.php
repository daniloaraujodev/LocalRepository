<?php
include('verifica_login.php');
include('conexao.php');
?>
<img src="img/fujioka.png" alt="Stack Overflow" height="50" width="180"/><br/>
<br/>
  <title>Meus Lances</title>
<h2>Meus Lances</h2>
Abaixo segue lista de todos os produtos que você ofertou lances.<p>
<?php 
$usuario = $_SESSION['usuario'];

// $querys = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM matricula where matricula_user = '{$usuario}'"));
// $query = mysqli_query($conexao, "SELECT * FROM lances where matricula_user = '{$querys['matricula']}'");

$query = mysqli_query($conexao, "SELECT l.ficha_prod,l.artigo_prod,l.nome_prod,l.estado_prod,l.lance_user,l.data,l.nome_user FROM lances l LEFT JOIN usuario u ON (u.matricula = l.matricula_user) WHERE u.usuario = '$usuario'");

// Criando tabela e cabeçalho de dados:
 ?>
 <table border=1>
 <thead>
 <tr>
 <th><center>FICHA</th>
 <th><center>ARTIGO</th>
 <th><center>PRODUTO</th>
 <th><center>DEFEITO</th>
 <th><center>FUNCIONÁRIO</th>
 <th><center>LANCE</th>
 <th><center>DATA</th>
 </tr>
 </thead> 
 <tbody>
 <?php

while($q = mysqli_fetch_array($query)):
?>
<tr>
    <td><?= $q['ficha_prod']?></td>
    <td><?= $q['artigo_prod']?></td>
    <td><?= $q['nome_prod']?></td>
    <td><?= $q['estado_prod']?></td>
    <td><?= $q['nome_user']?></td>
    <td>R$ <?= number_format($q['lance_user'],2,',','.')?></td>
    <td><?= date('d/m/Y à\s H:i:s',strtotime($q['data']))?></td>
</tr>
<?php
endwhile;
    ?>
</tbody>
</table>

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
  height: 22px;
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
td:first-child + td + td  {  width: 250px }
td:first-child + td + td + td {  width: 200px }
td:first-child + td + td + td + td{  width: 150px }
td:first-child + td + td + td + td + td{  width: 140px }
td:first-child + td + td + td + td + td +td{  width: 180px }

form {
    padding: 0;
    padding-top: 0;
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
    align-items: center;
    align-content: center;

}
input[type="submit"]
{
  
  border-radius: 2px;
  color: black;
  padding: 2px 8px;
  text-align: center;
  display: table-cell;
  font-size: 10px;
  background-color: #4CAF50; /* Green */
  
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
  