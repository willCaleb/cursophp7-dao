<?php 

if(file_exists("config.php")){
	require_once("config.php");
}

//carrega um usuário
//$will = new Usuario();
//$will ->loadById(2);
//echo $will;

//carrega uma lista de usuários

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("wi"); 
//echo json_encode($search);


//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("Maria", "maria");

echo $usuario;


 ?>