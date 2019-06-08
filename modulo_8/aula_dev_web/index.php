<?php
	echo '<h1>Bloquear tabelas para ter o controle de transação<h1>';
	$pdo = new PDO('mysql:host=localhost;dbname=devweb','root','');
	$sql = $pdo->exec("LOCK TABLES `tb_admin.usuarios` WRITE");

	sleep(10); //dorme por 10 segundos.
	//enquanto o script do index 1 não termina, o index 2 não pega os dados.
	
?>