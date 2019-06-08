<?php
    
	$nome = 'Danniel';

	switch($nome) {
		case 'Danniel':
			echo 'Minha variável é Danniel';
			break;
		
		case 'João':
			echo 'Minha Variável é João';
			break;
	}

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	
	//Break para loops for, while, do while, foreach e switch.
	for($i = 0; $i < 10; $i++) {
		echo $i;
		echo '<hr />';
		if($i == 5)
			break; //para o loop
	}
	
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	$var = false;
	
	if($var) //sem as chaves só lê uma linha
		$nome == 'Rafael';
	$idade = 26;
	echo $nome . ' | ' . $idade;
	
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	//Continue para loops for, while, do while, foreach. O switch não.
	for($i = 0; $i < 10; $i++) {
		if($i == 5 || $i == 9)
			continue; //continua o loop /no caso pula o 5
		echo $i;
		echo '<hr />';
	}
	
?>
