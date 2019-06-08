<?php
    //Facade Pattern
    //Adicionar/Fechar Carrinho - Carrinho
	//Calcular Frete - Frete
	//Fechar Pedido - Pedido

	class Carrinho{
		public function fecharCarrinho(){
			echo 'carrinho fechado';
		}
	}
    
	class Frete{
        public function calcularFrete(){
            echo 'Frete Calculado';
            
		}
	}
    
	class Pedido{
        public function fecharPedido(){
            echo 'Pedido Fechado';

		}
	}

	class Loja{
			public function finalizarCompra(){
                $this->fecharCarrinho();
                echo '<br />';
                $this->calcularFrete();
                echo '<br />';
				$this->fecharPedido();
                echo '<br />';
                echo 'Compra Finalizada';
			}

			public function fecharCarrinho(){
				$carrinho = new Carrinho();
				$carrinho->fecharCarrinho();
            }
            
            public function calcularFrete(){
				$frete = new Frete();
				$frete->calcularFrete();
            }
            
            public function fecharPedido(){
				$pedido = new Pedido();
				$pedido->fecharPedido();
			}

	}

	$loja = new Loja();
	$loja->finalizarCompra();
?>