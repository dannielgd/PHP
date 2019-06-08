<?php
	$nome = 'Danniel';
	$idade = 26;
	$frase = 'Meu nome é ';
	$nomedaclasse = 'box';

	define('NOME', 'João');
	echo 'Meu nome é '.$nome;
	
	echo '<br />';
	
	echo 'Meu nome é '.NOME;
	
	echo '<br />';
	
	echo $frase.$nome;

	echo '<br />';

	echo "Meu nome é $nome";

	echo '<br />';

	echo "<div class=\"$nomedaclasse\">Meu conteúdo da div</div> "; //<div class="box">Meu conteúdo da div</div>

	
?>