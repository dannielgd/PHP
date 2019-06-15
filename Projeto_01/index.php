<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projeto 01</title>
		<link href="<?php echo INCLUDE_PATH; ?>estilo/all.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>import/open-sans.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="palavras-chave,do,meu,site" />
        <meta name="description" content="Descrição do meu website" />
		<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
    </head>
    <body>
		<base base="<?php echo INCLUDE_PATH; ?>" />
		<?php
        
			$url = isset($_GET['url']) ? $_GET['url'] : 'home';
			switch ($url) {
				case 'depoimentos':
					echo '<target target="depoimentos" />';
					break;
				
				case 'servicos':
					echo '<target target="servicos" />';
					break;
			}
		?>
		<div class="sucesso">Formulário enviado com sucesso!</div><!-- fecha sucesso -->
		<div class="overlay-loading">
			<img src="<?php echo INCLUDE_PATH; ?>images/ajax-loader.gif" />
		</div><!-- fecha overlay-loading -->
		<header>
			<div class="center"><!-- center -->
				<div class="logo left"><a href="/">Logomarca</a></div><!-- logo -->
				<nav class="desktop right">
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
						<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
						<li><a realtime="outro-menu" href="<?php echo INCLUDE_PATH; ?>outro-menu">Outro Menu</a></li>
					</ul>
				</nav>
				<nav class="mobile right">
					<div class="botao-menu-mobile">
							<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
						<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
						<li><a realtime="outro-menu" href="<?php echo INCLUDE_PATH; ?>outro-menu">Outro Menu</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div><!-- fecha div center -->
		</header>

		<div class="container-principal">
		<?php
			

			if(file_exists('pages/'.$url.'.php')) {
				include('pages/'.$url.'.php');
			} else {
				if($url != 'depoimentos' && $url != 'servicos') {
				$pagina404 = true;
				include('pages/404.php');
				} else {
					include('pages/home.php');
				}
			}
		?>
		
		</div><!-- container principal -->

		<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed";' ?>>
			<div class="center"><!-- center -->
				<p>Todos os Direitos Reservados</p>
			</div><!-- fecha div center -->
		</footer>

		<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>

		<?php
			//if($url == 'contato') {
		?>

		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
		
		<?php //} ?>
		<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
		
		<?php
			if($url == 'home' || $url == '') {
		?>
		
		<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
		
		<?php } ?>
		<!-- <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script> -->
		<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
    </body>
</html>