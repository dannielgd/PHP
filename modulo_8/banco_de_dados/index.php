<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 3");
	//$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 0,3"); //retorna a partir do primeiro registro até o terceiro
	//$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome DESC LIMIT 1,3"); //retorna a partir do segundo registro até o terceiro
	$sql->execute();
	$clientes = $sql->fetchAll();
	
	foreach ($clientes as $key => $value) {
		echo $value['nome'];
		echo '<hr />';
	}
?>