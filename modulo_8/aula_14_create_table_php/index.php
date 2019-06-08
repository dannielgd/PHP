<?php
	$pdo = new PDO('mysql:host=localhost;dbname=criar_tabelas_php','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	/*
	$tables = $pdo->query("SHOW TABLES"); //mostra todas as tabelas do bd
	$tables = $tables->fetchAll();

	echo '<pre>';
	var_dump($tables);
	echo '</pre>';
	*/

	$sql = "CREATE TABLE cursos (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_curso VARCHAR(30) NOT NULL
	)";
	$pdo->exec($sql);
	
?>