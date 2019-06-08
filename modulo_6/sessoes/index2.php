<?php
	
	session_start();
	if(isset($_SESSION['nome'])) {
		echo $_SESSION['nome'];
	}

	unset $_SESSION['nome']; //destroi uma sessão
	session_destroy(); //destrói todas as sessões.
?>
