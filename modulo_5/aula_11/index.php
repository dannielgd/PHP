<?php
	
	$numero1 = 10;
	$numero2 = 11;
	 //Operadores Matemáticos
	if($numero1 < $numero2) {
		echo '1 é menor que 2';
		echo '<br />';
	} else {
		echo '1 não é menor que 2';
		echo '<br />';
	}

	if($numero1 <= $numero2) {
		echo '1 é menor ou igual que 2';
		echo '<br />';
	} else {
		echo '1 não é menor nem igual que 2';
		echo '<br />';
	}

	if($numero1 > $numero2) {
		echo '1 é maior que 2';
		echo '<br />';
	} else {
		echo '1 não é maior que 2';
		echo '<br />';
	}

	if($numero1 >= $numero2) {
		echo '1 é maior ou igual que 2';
		echo '<br />';
	} else {
		echo '1 não é maior nem igual que 2';
		echo '<br />';
	}

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<h1>Operadores Lógicos</h1>';

	//Operadores Lógicos

	//Operador E
	//$var1 = 'valor1';
	//$var2 = 'valor2';
	//$var3 = 'valor3';

	$var1 = 'valor1';
	$var2 = 'valor1';
	$var3 = 'valor1';

	if (($var1 == $var2) && ($var2 == $var3)) { //true E true
		echo "verdadeiro o e";
		echo '<br />';
	} else {
		echo 'falso o e';
		echo '<br />';
	}

	//Operador OU

	$var1 = 'valor1';
	$var2 = 'valor2';
	$var3 = 'valor1';

	if($var1 == $var2 || $var1 == $var3) { //false OU true
		echo "verdadeiro o ou";
		echo '<br />';
	} else {
		echo 'falso o ou';
		echo '<br />';
	}

	if(($var1 == $var2 || $var1 == $var3) && $var1 == $var2) { //(false OU true) E false
		echo "verdadeiro o ou complicado";
		echo '<br />';
	} else {
		echo 'falso o ou complicado';
		echo '<br />';
	}
	
?>