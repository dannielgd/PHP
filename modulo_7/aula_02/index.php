<?php
	
	include('Exemplo.class.php');
	//Instância de objeto
	$exemplo = new Exemplo();

	//$exemplo->$var1 ='Olá'; //dá erro porque a variável é privada.
	$exemplo->var2 ='Danniel';
	echo $exemplo->var2;

	echo '<br />';
	$exemplo2 = new Exemplo;
	$exemplo->var2 ='João';
	echo $exemplo->var2;

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	//echo $exemplo->var3; //dá erro porque a variável é estática.
	echo Exemplo::$var3;
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	Exemplo::$var3 = 'Valor Modificado da Variável Estática';
	echo Exemplo::$var3;

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	Exemplo::metodoEstatico();

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	$exemplo->setVar1('Danniel');
	
	echo $exemplo->pegaVar1();
	
	echo '<br />';

	$exemplo2->setVar1('João');

	echo $exemplo2->pegaVar1();
	
?>
