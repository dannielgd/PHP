<?php
	echo '<h1>Aula 10 - Pesquisa Avançada com LIKE<h1>';
	$pdo = new PDO('mysql:host=localhost;dbname=pesquisaavancada','root','');
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE email LIKE '%zeca%' ");
	$sql-> execute();

	$emails = $sql->fetchAll();

	echo '<pre>';
	print_r($emails);
	echo '</pre>';
?>