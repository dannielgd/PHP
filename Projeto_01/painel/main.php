<?php
    if(isset($_GET['logout'])) {
        Painel::logout();
    }
    
    if(!isset($_SESSION)) {
        header('Location: ' . 'index.php');
        die();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Painel de Controle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH; ?>import/open-sans.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/all.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
</head>

<body>
    
    <div class="menu">
        <div class="menu-wrapper">
            <div class="box-usuario">
                <?php
                    if($_SESSION['img'] == '') {
                ?>
                <div class="avatar-usuario">
                    <i class="fas fa-user"></i>

                </div><!-- avatar-usuario -->
                <?php } else { ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />

                </div><!-- avatar-usuario -->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div><!-- nome-usuario -->
            </div><!-- box-usuario -->

            <div class="itens-menu">
                <h2>Cadastro</h2>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>
                <h2>Administração do painel</h2>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                <a <?php  ?> <?php ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
                <h2>Configuração Geral</h2>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
                <h2>Gestão de Notícias</h2>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categorias">Cadastrar Categorias</a>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias">Gerenciar Categorias</a>
                <a <?php  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-noticia">Cadastrar Notícias</a>
                <a <?php ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-noticias">Gerenciar Notícias</a>
                
            </div>
            <!--itens-menu-->
        </div><!-- menu-wrapper -->
    </div><!-- menu -->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div><!-- menu-btn -->
            <div class="logout">
                <a <?php if(@$_GET['url'] == ''){ ?> style="background: #60727a;padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"> <i class="fas fa-home"></i> <span>Página Inicial</span></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fas fa-sign-out-alt"><span> Sair</span></i></a>
            </div>
        </div>

        <div class="clear"></div>
    </header>

    <div class="content">
        <?php Painel::carregarPagina(); ?>
    </div><!-- content -->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
</body>

</html>
