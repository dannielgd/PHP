<?php
	echo '<h1>Aula 12 - HAVING<h1>';
	$pdo = new PDO('mysql:host=localhost;dbname=having_subquerys','root','');
	$select = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo HAVING pontos > 5");
	$select->execute();

	echo '<pre>';
	var_dump($select->fetchAll());
	echo '</pre>';
?>