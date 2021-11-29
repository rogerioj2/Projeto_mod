<?php

$servidor = "localhost";
$banco = "id4298127_shark";
$user = "root";
$pass = "";

try{
	
	
$conn = new PDO("mysql:dbname=$banco; host=$servidor",$user, $pass);
	
	$conn->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$conn->exec("set names utf8");
	
}catch(PDOException $e){

	echo $e->getMessage();
	
}



?>