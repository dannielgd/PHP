<?php
    
	function mostrarNome($nome, $idade) {
		echo '<h2>Nome é  ' . $nome . '</h2>';
		echo '<h2>Idade é  ' . $idade . '</h2>';
	}
	
	function calculadora($numero1 = 10,$numero2 = 5) { //define valores default para os parâmetros se não passar nada
		//echo '<h2>Número 1 é  ' . $numero1 . '</h2>';
		//echo '<h2>Número 2 é  ' . $numero2 . '</h2>';
		echo ($numero1+$numero2);
	}
	
	mostrarNome('João', 45);
	echo '<hr />';
	
	calculadora(); //se não passar nada, imprime os valores default.
	calculadora(20); //se passar 1 valor só, somenteo valor 2 fica default.
	calculadora(20,30); //se passar os dois valores, nenhum fica default.
	
	echo '<hr />';
	echo '<hr />';
	echo '<hr />';
	echo '<hr />';
	
	//Retorno de função
	function verdade() {
		return true;
	}
	
	function retornarString() {
		return 'Danniel';
	}
	
	echo retornarString();
	$variavel = verdade();
?>
