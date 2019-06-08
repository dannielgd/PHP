<?php
    
	//Datas
	
	date_default_timezone_set('America/Sao_Paulo');
	
	$data = date('d/m/Y H:i:s', time()+(60*10));
	
	echo $data;
	
	$titulo_site = 'Título do meu Site';
	include('header.php'); //incluindo arquivos. Caminho relativo.
?>
<h1>Meu Conteúdo da Home</h1>
<?php
	include('footer.php');
?>
