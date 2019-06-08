<?php
	
	//final class Filha{ //Classes final não podem ser herdadas.
	class Filha{
		
		protected function funcaoTeste() {
			echo 'chamando função teste';
		}

		public function mostrarOla() {
			echo 'Olá Mundo!';
		}
	}

	//class Pai extends Filha{ //dá erro!
	class Pai extends Filha{
		
		public function mostrarOla() {
			parent::mostrarOla();
			echo 'nova função';
		}
		public function mostrarTchau() {
			echo 'Tchau Mundo!';
			echo '<br />';
			$this->funcaoTeste();
		}
	}
	
	$pai = new Pai;
	$pai -> mostrarTchau();
	
	echo '<br />';
	$filha = new Filha;
	$filha -> mostrarOla();

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	$pai = new Pai;
	$pai -> mostrarOla();

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	$pai -> mostrarTchau();

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	$pai -> mostrarOla();

?>
