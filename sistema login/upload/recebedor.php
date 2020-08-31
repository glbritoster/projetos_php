<?php 
$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) && ($arquivo['tmp_name'])== false){
	
	$nomedoarquivo = md5(time().rand(0,99)).'.png';
	move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$arquivo['name']);
	
	echo "arquivo enviado com sucesso!!";

}	
?>
