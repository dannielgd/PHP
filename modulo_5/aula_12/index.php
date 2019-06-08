<?php
	
	//For
	for ($contador=0; $contador < 10 ; $contador++) { 
		echo 'Olá Mundo!';
		echo '<hr />';
	}

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	//While
	$contador = 0;
	while ($contador <= 10) {
		echo 'Olá Mundo no While!';
		echo '<hr />';
		$contador+=2;
	}

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	//Do while
	$contador1 = 0;
	do {
		echo 'Olá Mundo no Do While!';
		echo '<hr />';
		$contador1+=5;
	} while ($contador1 <= 10);
?>