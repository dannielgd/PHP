<?php
	
	abstract class teste{//classes abstratas não podem ser instanciadas.

		public $var;
		
		public function func1() {
			echo 'chamando função 1';
		}

		abstract function func2(); //métodos abstratos precisam ser criados dentero da classe herdeira.
	}

	class Principal2{
		public static function outroMetodoEstatico() {
			echo 'Outro Método Estático';
			echo '<br />';
		}
	}
	
	
	class Principal extends teste {
		public function func2() {
			echo 'implementando func 2 abstrata';
		}
		
		public function funcao() {
			//Principal::metodoEstatico();
			self::metodoEstatico();
			Principal2::outroMetodoEstatico();
		}
		
		public static function metodoEstatico() {
			echo 'Método Estático';
			echo '<br />';
		}
	}
	
	$principal = new Principal;

	$principal->func1();
	echo '<br />';
	$principal->func2();

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	Principal::metodoEstatico();

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';

	$principal->funcao();

?>
