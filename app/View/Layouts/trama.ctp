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

		echo $this -> Html -> css(array('bootstrap', 'bootstrap-responsive', 'main', 'trama'));

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

		
		<div id="container-fluid" class="container">
			<!-- <div id="content"> -->
				<div class="row-fluid">
					<div class="span10 offset1">
						<?php echo $this -> Session -> flash(); ?>
						<div id="bannerTop"></div>
						<div id="leyendaTop">
							<div id="leyendaInside">
								<p>Desde la intencionalidad fundante de aportar a la construcción de sociedades sustentables, realizamos múltiples acciones tanto en el ámbito estatal en sus diversos niveles como en las agendas de organizaciones y movimientos sociales, a los fines de cooperar en instalar debates amplios y democráticos.</p>
								<p>Promovemos y generamos, entre otras actividades y en articulación con otros actores, estudios de caso, talleres, charlas públicas, campañas de sensibilización y difusión, investigaciones y materiales comunicativos, en tanto herramientas estratégicas que posibiliten cimentar alternativas válidas al modelo de desarrollo actual.</p>
							</div>
						</div>
						<div id="leyendaButtonDiv">
							<?php echo $this->Html->image('top/mas.png', array('id' => 'leyendaButtonMas')) ?></div>
					</div>
				</div>
				<div class="row-fluid">
					<!--Sidebar content-->
					<div class="span2">
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarQuienesSomos' class="sidebar sidebarButton" data-onButton="#sidebarOnQuienesSomos"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnQuienesSomos' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarGestionResiduos' class="sidebar sidebarButton" data-onButton="#sidebarOnGestionResiduos"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnGestionResiduos' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarAgua' class="sidebar sidebarButton" data-onButton="#sidebarOnAgua"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnAgua' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarSoberaniaAlimentaria' class="sidebar sidebarButton" data-onButton="#sidebarOnSoberaniaAlimentaria"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnSoberaniaAlimentaria' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarCulturaLibre' class="sidebar sidebarButton" data-onButton="#sidebarOnCulturaLibre"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnCulturaLibre' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarGenero' class="sidebar sidebarButton" data-onButton="#sidebarOnGenero"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnGenero' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div id='sidebarContacto' class="sidebar sidebarButton" data-onButton="#sidebarOnContacto"></div>
							</div>
							<div class="span8">
								<div id='sidebarOnContacto' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
					</div>
					<div class="span10">
						<!--Body content-->
						<?php echo $this -> fetch('content'); ?>
					</div>
				</div>
				<div id="plantaLogo"><?php echo $this->Html->image('planta.png') ?></div>
				
				<!-- ------------------------------------------------------------------------------------------------------
									Definición del Banner como background-image de la clase hero-unit
				------------------------------------------------------------------------------------------------------- -->
				<!-- <?php if($this->fetch('banner')): ?>
					<style>
						.hero-unit {
							background-image: url("<?php echo $this -> Html -> url('/img/', true) . h($this -> fetch('banner')); ?>.jpg");
						}
					</style>
				<?php endif; ?> -->
				<!-- ------------------------------------------------------------------------------------------------------
													Fin Definición del Banner
				------------------------------------------------------------------------------------------------------- -->
				
				<!-- Main hero unit for a primary marketing message or call to action -->
				<!-- <?php if($this->fetch('descripcion-general')): ?>
					<div class="hero-unit">
						<h1><?php echo $this -> fetch('titulo'); ?></h1>
						<!-- <p><?php echo $this -> fetch('descripcion-general'); ?></p> -->
						<!-- <p><?php echo $this -> fetch('botones'); ?></p> -->
					<!-- </div>
				<?php endif; ?> -->
				
				
			<footer class="row-fluid">
				<div class="span12">
					<div class="row-fluid">
						<div id="redes" class="span6">
							<div id="redesIcons" class="row-fluid">
								<div class="offset2 span2"><?php echo $this->Html->image('footer/logo1.gif') ?></div>
								<div class="offset1 span2"><?php echo $this->Html->image('footer/logo2.gif') ?></div>
								<div class="offset1 span2"><?php echo $this->Html->image('footer/logo3.gif') ?></div>
							</div>
						</div>
						<div class="span6">
							<div class="row-fluid">
								<div class="offset8 span2 socialIconsBox">
									<?php echo $this->Html->image('footer/facebook.png', array('class'=>'socialIcons')) ?>
									<?php echo $this->Html->image('footer/twitter.png', array('class'=>'socialIcons')) ?>
								</div>
								<!-- <div class="offset9 span1"><i class="icon-thumbs-up icon-white"></i><i class="icon-thumbs-up icon-white"></i></div> -->
							</div>
							<div class="row-fluid">
								<div class="offset1 span10">
									<p><strong>@ 2013 Tramatierra.</strong></p>
									<br />
									<p>
										Usted es libre de: <br />
										copiar, distribuir, exhibir, y ejecutar la obra y hacer obras derivadas Bajo las siguientes condiciones: Atribución / No comercial / Compartir igual / Usted debe atribuir la obra en la forma especificada por el autor o el licenciante.
									</p>
									<br />
									<p>
										TramaTierra, Biocolectivo por la Sustentabilidad <br />
										Pers. Jur. Nº 723/11
									</p>
								</div>
							</div>	
						</div>
					</div>
					<div class="row-fluid">
						<div id="lineaFinal" class="offset1 span10">&nbsp;</div>
					</div>
				</div>
				<!-- <p>
					&copy; 2012 Tramatierra.
				</p>
				<p>
					Usted es libre de: copiar, distribuir, exhibir, y ejecutar la obra y hacer obras derivadas bajo las siguientes condiciones: Atribución / No comercial / Compartir igual / Usted debe atribuir la obra en la forma especificada por el autor o el licenciante.
				</p> -->
			</footer>
			</div>
		</div>
		<!-- /container -->

		<?php echo $this -> element('sql_dump'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')
		</script>
		<?php echo $this -> Html -> script(array('vendor/bootstrap.min', 'plugins', 'main', 'trama')); ?>
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
