<?php
	$pdo = new PDO('mysql:host=localhost;dbname=devweb','root','');
	$sql = $pdo->prepare("SELECT * FROM `tb_admin.usuarios`");
	$sql->execute();

	$usuarios = $sql->fetchAll();
	foreach ($usuarios as $key => $value) {
		echo $value['nome'];
		echo '<hr />';
	}
?>