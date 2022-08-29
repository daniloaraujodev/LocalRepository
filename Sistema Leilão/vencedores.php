<center>
<?php
include('verifica_login.php');
include('conexao.php');

$resultado = mysqli_query($conexao,"SELECT 	ficha_prod FROM lances");

echo "<pre>";

# Criando um novo array para agregar os valores 
$arrayunique = [];

# Fazendo um loop pegando os valores do array
while($use = mysqli_fetch_assoc($resultado)){
	$arrayunique[] = $use["ficha_prod"];
}

#Pega apenas um valor (dos repetidos do lance (ficha_prod))
$keys = array_unique($arrayunique);
$sort = sort($keys);

#Debug
// var_dump($keys);
?>


<?php 

// Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th><center>FICHA</th>";
 echo "<th><center>ARTIGO</th>";
 echo "<th><center>PRODUTO</th>";
 echo "<th><center>DEFEITO</th>";
 echo "<th><center>CONTEMPLADO</th>";
 echo "<th><center>MAIOR LANCE</th>";
 echo "<th><center>DATA</th>";
 echo "</tr> <tbody>";
#fazendo loop pegando a quantidade e retornando o valor maior de cada consulta pelo ficha_prod do banco de dados
for ($i=0; $i <count($keys) ; $i++) { 
	$query = mysqli_query($conexao,"SELECT * FROM lances WHERE ficha_prod = '{$keys[$i]}' ORDER BY lance_user DESC LIMIT 1");
	$resultado = mysqli_fetch_assoc($query);
	?>

	<tr>
		<td><?= $resultado['ficha_prod'] ?></td>
		<td><?= $resultado['artigo_prod'] ?></td>
		<td><?= $resultado['nome_prod'] ?></td>
		<td><?= $resultado['estado_prod'] ?></td>
		<td><?= $resultado['nome_user'] ?></td>
		<td>R$ <?= number_format($resultado['lance_user'] ,2,'.','')?></td>
		<td><?= date('d/m/Y H:i:s', strtotime($resultado['data'])) ?></td>
		<!--<td><a href="javascript:void(0)" onclick="ficha_final(<?= $resultado['ficha_prod'] ?>)">Finalizar</a></td> -->
		<!--<td><a href="javascript:void(0)" onclick="ficha_deletar(<?= $resultado['ficha_prod'] ?>)">Deletar</a></td> -->
	</tr>

	<?php
}
 ?>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
<script>

     function ficha_final($ficha_prod){
     	$.post({
     		url: 'registerlance.php',
     		method:'post',
     		data: {ficha_final : $ficha_prod}
     	}).done(function(data){
     		$('.message').html(data);
     	})
     }

     function ficha_deletar($ficha_prod){
     	$.post({
     		url: 'registerlance.php',
     		method:'post',
     		data: {ficha_deletar : $ficha_prod}
     	}).done(function(data){
     		$('.message').html(data);
     	})
     }


</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de contemplados</title>
</head>
<body>

    <img src="img/fujioka.png" alt="Stack Overflow" height="50" width="180"/><br/>
<br/>
<h2>Lista de Contemplados Fora DOA</h2>
<br />
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
td:first-child + td + td + td + td + td{  width: 100px }
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