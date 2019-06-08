<?php/*
			if(isset($_POST['acao']) && $_POST['identificador'] == 'form_home') {
				//Envia o formulário
				if($_POST['email'] != '') {
					$email = $_POST['email'];
					//Validando o email
					if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$mail = new Email('smtp.gmail.com', 'danniel.pedidovenda@gmail.com', 'PedidoVenda123', 'Danniel');
						$mail->addAdress('danniel.pedidovenda@gmail.com', 'Danniel');
						$corpo = "Email cadastrado na home do site:<hr />$email";
						$info = array('assunto' => 'Um novo email cadastrado no site','corpo'=>$email);
						$mail->formatarEmail($info);
						if($mail->enviarEmail()) {
							echo '<script>alert("Email enviado com sucesso!")</script>';
						} else {
							echo '<script>alert("Email não foi enviado, pois algo deu errado!")</script>';
							
						}
					} else {
						echo '<script>alert("Não é um email válido")</script>';
					}
				} else {
					echo '<script>alert("Campos vazios não são permitidos!")</script>';
				}
			} else if(isset($_POST['acao']) && $_POST['identificador'] == 'form_contato') {
				
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				$mensagem = $_POST['mensagem'];
				
				$assunto = 'Nova Mensagem do Site';
				$corpo = '';
				
				foreach ($_POST as $key => $value) {
					$corpo.= ucfirst($key) . ":" . $value;
					$corpo.="<hr />";
				}
				
				$info = array('assunto' => $assunto, 'corpo' => $corpo);
				
				$mail = new Email('smtp.gmail.com', 'danniel.pedidovenda@gmail.com', 'PedidoVenda123', 'Danniel');
				$mail->addAdress('danniel.pedidovenda@gmail.com', 'Danniel');
				$mail->formatarEmail($info);
				if($mail->enviarEmail()) {
					echo '<script>alert("EMmail enviado com sucesso!")</script>';
				} else {
					echo '<script>alert("Email não foi enviado, pois algo deu errado!")</script>';
					
				}
			}*/
		?>