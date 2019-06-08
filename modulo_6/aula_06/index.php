<?php
    
	//Manipulação de String
	
	$conteudo = 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.';
	
	//Recorta uma String
	echo substr($conteudo,0,20); //string, inicio, fim
	echo '<br />';
	
	//Separa uma String em um arrya de strings
	$nome = 'Danniel Rodrigues de Oliveira';
	$nomes = explode(' ',$nome); //delimitador, string
	print_r($nomes);
	
	echo '<br />';
	
	//Juntar uma String
	$nome1 = implode(' ', $nomes); //delimitador, string
	echo $nome1;
	
	echo '<br />';
	
	$conteudo = '<h1>Danniel </h1> Top';
	//Retira as tags html da string
	echo strip_tags($conteudo);
	
	echo '<br />';
	
	//Mostra o código html na página
	echo htmlentities('<div></div>');
?>
