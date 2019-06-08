<?php
    
	//Arrays Single
	
    $arr = ['Danniel', 'João'];
    $arr1 = array('Danniel', 'chave2' => 'João');
	$arr[0] = 'Danniel';
	$arr[] = 'Mário';
	
	//Arrays Multidimensionais
	
	$arr2 = array(array('Danniel', 'João'),array(26,45));
	
	echo $arr2[0][0] . ' | '; //Danniel
	echo $arr2[0][1] . ' | '; //João
	echo $arr2[1][0] . ' | '; //26
	echo $arr2[1][1] . ' | '; //45
	
	echo '<br />';
	
	$arr3[0] = array('chave1'=>'Danniel','João');
	$arr3[0]['chave2'] = 'Felipe';
	echo $arr3[0]['chave1'] . ' | '; //Danniel
	echo $arr3[0]['chave2']; //Felipe
?>
