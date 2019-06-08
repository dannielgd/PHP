<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Painel de Controle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo INCLUDE_PATH; ?>import/open-sans.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>estilo/all.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="box-login">
            <?php
                if(isset($_POST['acao'])) {
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                    $sql->execute(array($user, $password));
                    if($sql->rowCount() == 1) {
                        $info = $sql->fetch();
                        
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        $_SESSION['password'] = $password;
                        $_SESSION['cargo'] = $info['cargo'];
                        $_SESSION['nome'] = $info['nome'];
                        $_SESSION['img'] = $info['img'];
                        header('Location: ' . INCLUDE_PATH_PAINEL);
                        die(); //mata o script.
                    } else {
                        echo '<div class="erro-box"><i class="fas fa-times"></i> Usuário ou Senha incorretos</div>';
                    }
                }
            ?>
            <h2>Efetue o Login</h2>
            <form method="post">
                <input type="text" name="user" placeholder="Login..." required />
                <input type="password" name="password" placeholder="Senha..." required />
                <input type="submit" name="acao" value="Logar" />
            </form>
        </div><!-- fecha box-login -->

        <script src="" async defer></script>
    </body>
</html>