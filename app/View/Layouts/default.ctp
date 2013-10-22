<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Tramatierra<?php echo ': ' . $title_for_layout; ?></title>
		<meta name="description" content="Trama Tierra es una organización social sin fines de lucro de la Ciudad de Santa Fe.">
		<meta name="viewport" content="width=device-width">

		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<?php
		echo $this -> Html -> meta('icon');

		echo $this -> Html -> css(array('bootstrap', 'bootstrap-responsive', 'main'));

		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
		?>

	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<!-- <a class="brand" href="#">Trama Tierra</a> -->
					<?=$this -> Html -> link('Tramatierra', '/', array('class' => 'brand')) ?>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?=($this -> request -> controller == 'pages' && $this -> request -> action == 'display' && $this -> request -> pass[0] == 'inicio') ? 'class="active"' : 'class=""' ?>>
								<?=$this -> Html -> link('Inicio', '/') ?>
							</li>
							<li>
								<a href="#contact">Contacto</a>
							</li>
							<!-- 			Menú Ejes				 -->
							<li <?=($this -> request -> controller == 'secciones') ? 'class="dropdown active"' : 'class="dropdown"' ?>>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ejes <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<?=$this -> Html -> link('Agua', array('controller' => 'secciones', 'action' => 'view', 2)) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Cultura libre', array('controller' => 'secciones', 'action' => 'view', 4)) ?>
									</li>
									<li class="dropdown-submenu">
										<?=$this -> Html -> link('Energia', array('controller' => 'secciones', 'action' => 'view', 3)) ?>
										<ul class="dropdown-menu">
											<li>
												<?=$this -> Html -> link('Renovables', array('controller' => 'areas', 'action' => 'view', 1)) ?>
											</li>
											<li>
												<?=$this -> Html -> link('Modelo energético', array('controller' => 'areas', 'action' => 'view', 2)) ?>
											</li>
										</ul>
									</li>
										
									<li>
										<?=$this -> Html -> link('Género', array('controller' => 'secciones', 'action' => 'view', 5)) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Gestión de residuos', array('controller' => 'secciones', 'action' => 'view', 6)) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Soberanía Alimentarias', array('controller' => 'secciones', 'action' => 'view', 7)) ?>
									</li>
									<!--
									<li class="divider"></li>
									<li class="nav-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
									-->
								</ul>
							</li><!-- 			Fin Menú Ejes				 -->
							<!-- 			Menú Admin				 -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<?=$this -> Html -> link('Agregar Multimedia', array('controller' => 'multimedia', 'action' => 'agregar')) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Agregar Evento', array('controller' => 'eventos', 'action' => 'agregar')) ?>
									</li>
									<!--
									<li class="divider"></li>
									<li class="nav-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
									-->
								</ul>
							</li><!-- 			Fin Menú Admin				 -->
						</ul>
						<!--
						<form class="navbar-form pull-right">
						<input class="span2" type="text" placeholder="Email">
						<input class="span2" type="password" placeholder="Password">
						<button type="submit" class="btn">Sign in</button>
						</form>
						-->
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div id="container" class="container">
			<div id="content">
				<?php echo $this -> Session -> flash(); ?>
				
				<!-- ------------------------------------------------------------------------------------------------------
									Definición del Banner como background-image de la clase hero-unit
				------------------------------------------------------------------------------------------------------- -->
				<?php if($this->fetch('banner')): ?>
					<style>
						.hero-unit {
							background-image: url("<?php echo $this -> Html -> url('/img/', true) . h($this -> fetch('banner')); ?>.jpg");
						}
					</style>
				<?php endif; ?>
				<!-- ------------------------------------------------------------------------------------------------------
													Fin Definición del Banner
				------------------------------------------------------------------------------------------------------- -->
				
				<!-- Main hero unit for a primary marketing message or call to action -->
				<?php if($this->fetch('descripcion-general')): ?>
					<div class="hero-unit">
						<h1><?php echo $this -> fetch('titulo'); ?></h1>
						<p><?php echo $this -> fetch('descripcion-general'); ?></p>
						<p><?php echo $this -> fetch('botones'); ?></p>
					</div>
				<?php endif; ?>
				
				<?php echo $this -> fetch('content'); ?>
			</div>
			<hr />
			<footer>
				<p>
					&copy; 2012 Tramatierra.
				</p>
				<p>
					Usted es libre de: copiar, distribuir, exhibir, y ejecutar la obra y hacer obras derivadas bajo las siguientes condiciones: Atribución / No comercial / Compartir igual / Usted debe atribuir la obra en la forma especificada por el autor o el licenciante.
				</p>
			</footer>
		</div>
		<!-- /container -->

		<?php echo $this -> element('sql_dump'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')
		</script>
		<?php echo $this -> Html -> script(array('vendor/bootstrap.min', 'plugins', 'main')); ?>
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
			( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
		<?php echo $this -> Js -> writeBuffer(); ?>
	</body>
</html>
