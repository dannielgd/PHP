<?php
	
	//$variavel1 = 'Danniel';
	//$variavel2 = 'João';

	$variavel1 = 'Danniel';
	$variavel2 = 'Danniel';

	if ($variavel1 == $variavel2) {
		echo '<div style="width:300px;height:300px;background:red;"></div>';
	} else {
		echo 'A condição não bate';
	}

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';


	if ($variavel1 == $variavel2) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Aqui é meu site!</h1>
</body>
</html>
<?php
	} else {
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Outro Site</h1>
</body>
</html>
<?php
	}
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
?>

<?php
	$var = 10 + 5;
	$var1 = '10 + 5'; //não é uma conta

	if($var == $var1) { //false
		echo 'verdade';
	} else {
		echo 'falso';
		echo '<br />';
	}

	//Muitas Condições com else if
	if($var == $var1) { //false
		echo 'verdade';
	} else if ($var != $var1) { //true
		echo 'verdade na condição else if';
	} else {
		echo 'falso';
	}
?>