<?php
	
	class Pessoa {
		//Objeto Pessoa
		
		private $nome = 'Danniel';
		private $idade = '26';
		private $peso = '70kg';
		
		public function crescer() {
			$this->comer();
			echo 'Estou Crescendo';
		}
		
		private function comer() {
			echo 'Estou Comendo';
		}
	}

	//Instanciar
	$pessoa = new Pessoa;
	$pessoa2 = new Pessoa;

	$pessoa -> crescer();
	//$pessoa -> comer(); //dá erro porque é privado o método
	
?>
