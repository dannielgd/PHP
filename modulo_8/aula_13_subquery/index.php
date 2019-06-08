<?php
	echo '<h1>Aula 13 - Subquerys<h1>';
	$pdo = new PDO('mysql:host=localhost;dbname=having_subquerys','root','');
	$select = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome = 'Terror')");
	$select->execute();

	echo '<pre>';
	var_dump($select->fetchAll());
	echo '</pre>';
?>