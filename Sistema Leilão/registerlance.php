<?php
include('verifica_login.php');
include('conexao.php');


if(isset($_POST['id_lance'])){
   $id = filter_input(INPUT_POST,'id_lance', FILTER_VALIDATE_INT);
   $matricula = filter_input(INPUT_POST,'user_matric', FILTER_VALIDATE_INT);
   $lance = filter_input(INPUT_POST,'lance', FILTER_SANITIZE_STRIPPED);
   $ficha = filter_input(INPUT_POST,'ficha', FILTER_SANITIZE_STRIPPED);
   $artigo = filter_input(INPUT_POST,'artigo', FILTER_SANITIZE_STRIPPED);
   $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRIPPED);
   $nomeusuario = filter_input(INPUT_POST,'user_name', FILTER_SANITIZE_STRIPPED);
   $estado = filter_input(INPUT_POST,'estado', FILTER_SANITIZE_STRIPPED);


   if(empty($id) or empty($matricula) or empty($artigo) or empty($nome) or empty($estado) or empty($lance) or empty($ficha)){
   	echo "Campos não estão completos, verifique novamente";
	}elseif(!$id) {
   	echo "Id não encontrado";
   }elseif(!$matricula){
	echo "matricula do usúario inexistente, entre em contato com o administrador";
   }elseif(!$lance or empty($lance)){

   	echo "Digite um valor válido ex: 250,00";
   }else{
    #INSERIR NO BANCO DEDADOS OS LANCES ATUAIS
    mysqli_query($conexao,"INSERT INTO lances (ficha_prod,artigo_prod,nome_prod,estado_prod,nome_user,lance_user,matricula_user) 
    	VALUES ('{$ficha}','{$artigo}','{$nome}','{$estado}','{$nomeusuario}','{$lance}','{$matricula}')");
    echo "Lance efetuado com sucesso!";
   }

 }


 if(isset($_POST['ficha_final'])){
 	$id = filter_input(INPUT_POST,'ficha_final',FILTER_VALIDATE_INT);

 	if($id){
 		mysqli_query($conexao, "DELETE FROM produtos WHERE ficha = '{$id}' ");
 		echo "Lance finalizado com sucesso! <script>setTimeout(()=>{window.location.reload()},2000)</script>";
 	}else{
 		echo "Não foi possível encontrar este lance";
 	}
 }

 if(isset($_POST['ficha_deletar'])){
 	$id = filter_input(INPUT_POST,'ficha_deletar',FILTER_VALIDATE_INT);

 	if($id){
 		mysqli_query($conexao, "DELETE FROM lances WHERE ficha_prod = '{$id}' ");
 		echo "Lance deletado com sucesso! <script>setTimeout(()=>{window.location.reload()},2000)</script>";
 	}else{
 		echo "Não foi possível encontrar este lance";
 	}
 }