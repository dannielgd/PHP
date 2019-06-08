<?php
	
	$nome = 'gui';
	$nome2 = 'joao';

	//Se for um sinal de igual sempre será verdadeiro
	if($nome = $nome2) {
		echo 'sempre verdade';
		echo '<br />';
	}

	$nome = 'gui';
	$nome2 = 'joao';

	//Dois iguais é comparação de igualdade
	if($nome == $nome2) {
		echo 'verdade';
		echo '<br />';
	}

	//Compara para ver se é diferente
	if ($nome != $nome2) {
		echo 'é diferente';
		echo '<br />';
	}

	$valor = 10;
	$valor2 = '10';


	if($valor == $valor2) { //true
		echo 'verdade';
		echo '<br />';
	}

	//Confere se são idênticos, ou seja, mesmo valor e mesmo tipo
	if($valor === $valor2) { //false
		echo 'verdade';
		echo '<br />';
	} else {
		echo 'Não são idênticos';
		echo '<br />';
	}

	//Diferente e de diferentes tipos
	if($valor !== $valor2) { //false
		echo 'verdade para diferente';
		echo '<br />';
	} else {
		echo 'Não são diferentes';
		echo '<br />';
	}

?>