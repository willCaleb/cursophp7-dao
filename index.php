<?php 

if(file_exists("config.php")){
	require_once("config.php");
}else{
	echo "Não está chamando o config";
}


$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

 ?>