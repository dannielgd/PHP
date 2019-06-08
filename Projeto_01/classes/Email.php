<?php
    use PHPMailer\PHPMailer\PHPMailer;
    class Email {
        
        private $mailer;
        public function __construct($host, $username, $senha, $name) {
            $this->mailer = new PHPMailer(true);

            
                //Server settings
                //$this->mailer->SMTPDebug = 2;                                       // Enable verbose debug output
                $this->mailer->isSMTP();                                            // Set mailer to use SMTP
                $this->mailer->Host       = $host; //'smtp.gmail.com';                       // Specify main and backup SMTP servers
                $this->mailer->SMTPAuth   = true;                                   // Enable SMTP authentication
                $this->mailer->Username   = $username; //'danniel.pedidovenda@gmail.com';        // SMTP username
                $this->mailer->Password   = $senha; //'PedidoVenda123';                       // SMTP password
                $this->mailer->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
                $this->mailer->Port       = 465;                                    // TCP port to connect to
            
                //Recipients
                $this->mailer->setFrom($username, $name);
                
                $this->mailer->isHTML(true);                                  // Set email format to HTML
                $this->mailer->Charset = 'UTF-8';
        }

        public function addAdress($email, $nome) {
            $this->mailer->addAddress($email, $nome);     // Add a recipient
        }

        public function formatarEmail($info) {
            $this->mailer->Subject = 'Assunto do Email';
            $this->mailer->Body    = 'Corpo do <b>email</b>';
            $this->mailer->AltBody = 'Corpo do email';

            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }
        
        public function enviarEmail() {
            try {
                if($this->mailer->send()) {
                    return  true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                return "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
            } 
        }
    }
    
?>