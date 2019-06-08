<?php
    include('../config.php');
    $data = array();
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
        $data['sucesso'] = true;
    } else {
        $data['erro'] = true;
    }

    //$data['retorno'] = 'sucesso';

    die(json_encode($data));
?>