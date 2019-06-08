<?php
//Factory Design Pattern.
class Cachorro
	{
		
		public function __construct(){
			echo 'classe cachorro';
		}
	}


	class Gato
	{
		public function __construct(){
			echo 'classe gato';
		}
		
	}

	class Animal{

		public static function build($nomeClasse){
			if(class_exists($nomeClasse)){
				return new $nomeClasse;
			}else{
				die('Ops! A classe não existe!');
			}
		}

	}

    Animal::build('cachorro');
    echo '<br />';
	Animal::build('gato');
    echo '<br />';
    //Animal::build('peixe'); ///erro
?>