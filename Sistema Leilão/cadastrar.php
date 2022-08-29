<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de Visitantes</title>
  <meta charset="UTF-8">
</head>
<body>
<h1><center>Cadastro de Produtos FORA DOA</h1>
<br>
<form method="POST" action="verifica.php">
<pre>
<b><center>Insira as informações dos produtos corretamente</b><p></p>

<b>Ficha:</b>         <input type="text" size="35" maxlength="256" name="ficha">
<b>Artigo:</b>         <input type="text" size="35" maxlength="256" name="artigo">
<b>Produto:</b>        <input type="text" size="100" maxlength="256" name="nome">
<b>Situação:</b>       <input type="text" size="100" maxlength="256" name="estado">
<b>Lance Mínimo:</b>   <input type="text" size="100" maxlength="256" name="valor">



<input type="submit" value="Efetuar Cadastro" name="enviar">
</pre>
</form>

    <style type="text/css">

  fieldset.elist, input[type="text"], textarea, select, option, fieldset.elist ul, fieldset.elist > legend, fieldset.elist input[type="text"], fieldset.elist > legend:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

input[type="text"] {
  padding: 0 20px;
}

textarea {
  width: 500px;
  height: 200px;
  padding: 20px;
}

textarea, input[type="text"], fieldset.elist ul, select, fieldset.elist > legend {
  border: 2px #cccccc solid;
  border-radius: 10px;
}

input[type="text"], fieldset.elist, select, fieldset.elist > legend {
  height: 32px;
  font-family: Tahoma;
  font-size: 14px;
}

input[type="text"]:hover, textarea:hover, select:hover, fieldset.elist:hover > legend {
  background-color: #ddddff;
}

select {
  padding: 4px 20px;
}

option {
  height: 30px;
  padding: 5px 4px;
}

option:not(:checked), textarea:focus {
  background-color: #ffcccc;
}

fieldset.elist > legend:after, fieldset.elist label {
  height: 28px;
}

input[type="text"], fieldset.elist {
  width: 316px;
}

input[type="text"]:focus {
  background: #ffcccc url("data:image/gif;base64,R0lGODlhEAAQANU5APnoxuvr6+uxPdvb2+rq6ri4uO7qxunp6dPT06SHV+/rx8vLy+nezLO0sbe3t9Ksas+qaaCEV8rKyp2dnf39/QAAAK6ursifZHFxcc/Qzu3mxYyMjExCJnV1dc6maO7u7o+Pj2tXNoaGhtfDpKCDVu3lxM+tcaKEV9bW1qOFVWNjY8KrisTExNra2nBbObGxsby8vO/mu7Kyso9ZAuzs7MSgAIiKhf///8zMzP///wAAAAAAAAAAAAAAAAAAAAAAACH5BAEAADkALAAAAAAQABAAAAaXwJxwSCwOYzWkMpkkZmoAqDQaJdpqAqw2m53NRjlboAarFczomcE0C99o8DgNMVM8Tm3bbYDr9x11DwkzDG5yc2oQJIRCenx/MxoeETM2Q3pxATMlF4MYlo17OAsdLispMyAioIY0BzMcITMTKBasjgssFTMqGxItMjYUoTQBBAQHxgE0wZcfMtDRMi/QrA022NnaNg1CQQA7") no-repeat 2px center !important;
}

input[type="text"]:focus, textarea:focus, select:focus, fieldset.elist > legend {
  border: 2px #ccaaaa solid;
}

fieldset {
  border: 2px #0000ff solid;
  border-radius: 10px;

}

/* Editable [pseudo]select (i.e. fieldsets with [class=elist]) */

fieldset.elist {
  display: inline-block;
  position: relative;
  vertical-align: middle;
  overflow: visible;
  padding: 0;
  margin: 0;
  border: none;
}

fieldset.elist ul {
  position: absolute;
  width: 100%;
  max-height: 320px;
  padding: 0;
  margin: 0;
  overflow: hidden;
  background-color: transparent;
}

fieldset.elist:hover ul {
  background-color: #ffffff;
  border: 2px #af3333 solid;
  left: 2px;
  overflow: auto;
}

fieldset.elist ul > li {
  list-style-type: none;
  background-color: transparent;
}

fieldset.elist label {
  display: none;
  width: 150%;
}

fieldset.elist input[type="text"] {
  width: 150%;
  height: 30px;
  line-height: 30px;
  border: none;
  background-color: transparent;
  border-radius: 0;
}

fieldset.elist > legend {
  display: block;
  margin: 0;
  padding: 0 0 0 5px;
  position: absolute;
  width: 100%;
  cursor: default;
  background-color: #ccffcc;
  line-height: 30px;
  font-style: italic;
}

fieldset.elist:hover > legend {
  position: relative;
  overflow: hidden;
}

fieldset.elist > legend:after {
  width: 20px;
  content: "\2335";
  float: right;
  text-align: center;
  border-left: 2px #cccccc solid;
  font-style: normal;
  cursor: default;
}

fieldset.elist:hover > legend:after {
  background-color: #99ff99;
}

fieldset.elist ul input[type="radio"] {
  display: none;
}

fieldset.elist input[type="radio"]:checked ~ label {
  display: block;
  width: 292px;
  background-color: #ffffff;
}

fieldset.elist:hover input[type="radio"]:checked ~ label {
  width: 100%;
}

fieldset.elist:hover label {
  display: block;
  height: 100%;
}

fieldset.elist label:hover {
  background-color: #3333ff !important;
}

fieldset.elist:hover input[type="radio"]:checked ~ label {
  background-color: #aaaaaa;
}
</style>


</body>
</html>

<?php
// Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>FICHA</th>";
 echo "<th>ARTIGO</th>";
 echo "<th>PRODUTO</th>";
 echo "<th>ESTADO</th>";
 echo "<th>LANCE MÍNIMO</th>";
 echo "</tr>";


// Conectando ao banco de dados:
$Servidor = 'localhost';
$nomeBanco = 'login';
$Usuario = 'root';
$Senha = '';
$strcon = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco); 

 $sql = "SELECT * FROM produtos";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $ficha = $registro['ficha'];
   $artigo = $registro['artigo'];
   $nome = $registro['nome'];
   $estado = $registro['estado'];
   $valor = $registro['valor'];
   //$categoria = $registro['categoria_produto'];

   echo "<tr>";
   echo "<td><center>".$ficha."</center></td>";
   echo "<td><center>".$artigo."</center></td>";
   echo "<td><center>".$nome."</center></td>";
   echo "<td><center>".$estado."</center></td>";
   echo "<td><center>".$valor."</center></td>";
   //echo "<td><center>".$categoria."</center></td>";
   echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
 ?>
  </div>
    </body>
</html>