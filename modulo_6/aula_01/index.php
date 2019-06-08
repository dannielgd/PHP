<?php
    
    $arr = array('Danniel', 'João', 'Felipe', 'Mário');
    $arr1 = array('chave1' => 'Danniel', 'João', 'Felipe', 'Mário');
	
	foreach ($arr as $key => $value) {
		echo $key;
		echo '=>';
		echo $value;
		echo '<hr />';
		
	}
	
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	
	$total = count($arr1);
	
	for($i = 0; $i < $total; $i++) {
		//echo $arr1[$i]; //Dá erro porque o for normal não trabalha com chaves.
		echo "<br />";
	}
	
?>
