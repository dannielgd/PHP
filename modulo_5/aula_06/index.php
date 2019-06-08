<?php
	/*Arrays = Variáveis com diversos valores*/

	$nome = array('Danniel', 'João', 'Felipe' );

	echo $nome[0]; //Danniel

	echo '<br />';
	echo '<br />';

	$nome1[] = 'João';
	$nome1[] = 'Felipe';
	echo $nome1[1]; //Felipe

	echo '<br />';
	echo '<br />';

	$nomes[0] = 'João';
	$nomes[100] = 'André';
	echo $nomes[100]; //André
	//echo $nomes[1]; //erro!

	echo '<br />';
	echo '<br />';

	$variaveis = ['Danniel', 'João', 'Felipe'];
	echo $variaveis[0]; //Danniel

	echo '<br />';
	echo '<br />';

	//Arrays podem ser misturados os tipos
	$variaveis2 = array('Danniel', 23, true, 10.09 );
	echo $variaveis2[3];


	//Arrays podem ser chaveados com strings
	$informacao['nome'] = 'Danniel';
	$informacao['idade'] = 26;
	$informacao['cidade'] = 'Goiânia';
	echo $informacao['nome']; //Danniel
	echo '<br />';
	echo $informacao['idade']; //26
	echo '<br />';
	echo $informacao['cidade']; //Goiânia
?>