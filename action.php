<?php

try{
	$db = new PDO ('mysql:host=db;charset=UTF8;dbname=sqli', 'root', 'toto');
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $username = $db->quote($_POST['username']);
  $password = $db->quote($_POST['password']);
  $select = $db->query("SELECT * FROM users WHERE username = $username AND password = $password");
}catch (Exception $e){
	echo "Impossible de se connecter à la base de données";
	echo $e->getMessage();
	die();
}

?>
