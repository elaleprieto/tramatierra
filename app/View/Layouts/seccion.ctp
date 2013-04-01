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

		echo $this -> Html -> css(array('bootstrap', 'bootstrap-responsive', 'trama'));

		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
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
					<div class="span6 offset1">
						<h1 id="seccionTitle"><?php echo $this->fetch('titulo') ?></h1>
					</div>
					<div class="span4">
						<h2 class="areaButton pull-right"><?php echo $this->fetch('botones') ?></h2>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span10 offset1">
						<?php echo $this -> Session -> flash(); ?>
						<!-- ------------------------------------------------------------------------------------------------------
									Definición del Banner como background-image del id bannerTop
						------------------------------------------------------------------------------------------------------- -->
						<?php if($this->fetch('banner')): ?>
							<style>
								#bannerTop {
									background-image: url("<?php echo $this -> Html -> url('/img/', true) . h($this -> fetch('banner')); ?>.jpg");
								}
							</style>
						<?php endif; ?>
						<div id="bannerTop"></div>
						
						<div id="leyendaTop">
							<div id="leyendaInside">
								<?php echo $this -> fetch('descripcion-general'); ?>
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
								<?php echo $this->Html->link('<div id="sidebarGestionResiduos" class="sidebar sidebarButton" data-onButton="#sidebarOnGestionResiduos"></div>', 
									array('controller'=>'secciones', 'action'=>'view', 6), array('escape'=>FALSE)) ?>
							</div>
							<div class="span8">
								<div id='sidebarOnGestionResiduos' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<?php echo $this->Html->link('<div id="sidebarAgua" class="sidebar sidebarButton" data-onButton="#sidebarOnAgua"></div>', 
									array('controller'=>'secciones', 'action'=>'view', 2), array('escape'=>FALSE)) ?>
							</div>
							<div class="span8">
								<div id='sidebarOnAgua' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<?php echo $this->Html->link('<div id="sidebarSoberaniaAlimentaria" class="sidebar sidebarButton" data-onButton="#sidebarOnSoberaniaAlimentaria"></div>', 
									array('controller'=>'secciones', 'action'=>'view', 7), array('escape'=>FALSE)) ?>
							</div>
							<div class="span8">
								<div id='sidebarOnSoberaniaAlimentaria' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<?php echo $this->Html->link('<div id="sidebarCulturaLibre" class="sidebar sidebarButton" data-onButton="#sidebarOnCulturaLibre"></div>', 
									array('controller'=>'secciones', 'action'=>'view', 4), array('escape'=>FALSE)) ?>
							</div>
							<div class="span8">
								<div id='sidebarOnCulturaLibre' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<?php echo $this->Html->link('<div id="sidebarEnergia" class="sidebar sidebarButton" data-onButton="#sidebarOnEnergia"></div>', 
									array('controller'=>'secciones', 'action'=>'view', 3), array('escape'=>FALSE)) ?>
							</div>
							<div class="span8">
								<div id='sidebarOnEnergia' class="sidebar sidebarOnButton"></div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<?php echo $this->Html->link('<div id="sidebarGenero" class="sidebar sidebarButton" data-onButton="#sidebarOnGenero"></div>', 
									array('controller'=>'secciones', 'action'=>'view', 5), array('escape'=>FALSE)) ?>
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

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script async="async">
			window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
		</script>
		<?php echo $this -> Html -> script(array('vendor/bootstrap.min', 'plugins', 'trama'), array('async'=>'async')); ?>
		<?php echo $this -> fetch('script'); ?>
		<!-- <script async="async">
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
			( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script> -->
		<script async="async" type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-27799433-5']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<?php echo $this -> Js -> writeBuffer(); ?>
	</body>
</html>
