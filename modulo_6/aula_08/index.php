<?php
	//Une 1 ou mais arrays
	$array1 = array("chave1" => "valor1", "chave2" => "valor2");
	$array2 = array("chave3" => "valor3", "chave4" => "valor4");
	$array3 = array("chave5" => "valor5");
	$result = array_merge($array1, $array2, $array3);
	
	$array5 = array("chave1" => "valor1", "chave2" => "valor2");
	$array6 = array("chave1" => "valor3", "chave2" => "valor4");
	
	$arr = ['<p>Danniel</p>', 'João', '<h1>Fabrício</h1>']; 
	
?>
<pre>
	<?php print_r($result); ?>
</pre>

<br />
<br />
<br />
<br />
<pre>
	<?php 
		//Retorna valores que tem em ambos os arrays.
		print_r(array_intersect_key($array5, $array6));
	?>
</pre>

<br />
<br />
<br />
<br />
<pre>
	<?php 
		//aplica funções a todos os valores de uma array qualquer.
		print_r(array_map('strip_tags', $arr));
	?>
</pre>
