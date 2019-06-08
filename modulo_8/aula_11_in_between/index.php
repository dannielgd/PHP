<?php
	echo '<h1>Aula 11 - Pesquisa Avançada com IN e BETWEEN<h1>';
	$pdo = new PDO('mysql:host=localhost;dbname=pesquisaavancada','root','');
	//$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,10) ");
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2019-01-01' AND '2019-12-31' ");
	$sql-> execute();

	$emails = $sql->fetchAll();

	echo '<pre>';
	print_r($emails);
	echo '</pre>';
?>