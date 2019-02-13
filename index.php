<?php 

if(file_exists("config.php")){
	require_once("config.php");
}

$will = new Usuario();
$will ->loadById(2);
echo $will;


 ?>