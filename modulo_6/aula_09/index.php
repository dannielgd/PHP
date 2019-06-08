<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>

<body>
	<?php
		/*
		if(isset($_GET['acao'])) {
			$nome = $_GET['nome'];
			//$nome = @$_GET['nome']; //o @ ignora os warnings na página -> errado!
			$email = $_GET['email'];
			//$email = @$_GET['email']; //o @ ignora os warnings na página -> errado!

			echo $nome;
			echo '<br />';
			echo $email;
		}
		*/
		
		/*
		if(isset($_POST['acao'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			echo $nome;
			echo '<br />';
			echo $email;
		}
		*/
		
		/*
		if(isset($_POST['acao'])) {
			echo $_POST['numero1'] + $_POST['numero2'];
		}
		*/
		
		/*
		if(isset($_POST['acao'])) {
			echo $_POST['nome'];
		}
		*/
		
		if(isset($_POST['acao'])) {
			foreach ($_POST['valor'] as $key => $value) {
				echo $key;
				echo ' => ';
				echo $value;
				echo '<br />';
			}
		}
		
	?>
	<!-- <form> -->
	<!-- método padrão de envio: get -->
	<!--
	<form method="post">
		<input type="text" name="nome" />
		<input type="text" name="email" />
		<input type="submit" name="acao" value="Enviar" />
	</form>

	<br />
	<br />
	<br />
	<br />
	-->
	<!--
	<form method="post">
		<input type="text" name="numero1" />
		<input type="text" name="numero2" />
		<input type="submit" name="acao" value="Enviar" />
	</form>
	-->
	<!--
	<form method="post">
		<select name="nome">
			<option value="Danniel">Danniel</option>
			<option value="João">João</option>
		</select>
		<input type="submit" name="acao" value="Enviar" />
	</form>
	-->
	<form method="post">
		<select name="nome">
			<option value="Danniel">Danniel</option>
			<option value="João">João</option>
		</select>
		<input type="checkbox" name="valor[]" value="10" />10
		<input type="checkbox" name="valor[]" value="20" />20
		<input type="checkbox" name="valor[]" value="30" />30
		<input type="checkbox" name="valor[]" value="40" />40
		<input type="submit" name="acao" value="Enviar" />
	</form>
</body>

</html>
