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

		echo $this -> Html -> css(array('bootstrap.min', 'bootstrap-responsive.min', 'layouts/trama'));

		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		?>
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->
		<div id="container-fluid" class="container">
			<!-- banner -->
			<div class="row-fluid">
				<div class="span10 offset1">
					<?php echo $this->Session->flash() ?>
					<?php echo $this->element('banner') ?>
				</div>
			</div>
			<!-- /banner -->
			
			<div class="row-fluid">
				<!-- sidebar-->
				<div class="span2">
					<?php echo $this->element('sidebar') ?>
				</div>
				<!-- /sidebar -->
				
				<div class="span9">
					<!-- leyenda -->
					<div class="row-fluid">
						<div class="span12">
							<div id="leyendaTop">
								<div id="leyendaInside">
									<p>Desde la intencionalidad fundante de aportar a la construcción de sociedades sustentables, realizamos múltiples acciones tanto en el ámbito estatal en sus diversos niveles como en las agendas de organizaciones y movimientos sociales, a los fines de cooperar en instalar debates amplios y democráticos.</p>
									<p>Promovemos y generamos, entre otras actividades y en articulación con otros actores, estudios de caso, talleres, charlas públicas, campañas de sensibilización y difusión, investigaciones y materiales comunicativos, en tanto herramientas estratégicas que posibiliten cimentar alternativas válidas al modelo de desarrollo actual.</p>
								</div>
							</div>
							<div id="leyendaButtonDiv">
								<?php echo $this->Html->image('top/mas.png', array('id' => 'leyendaButtonMas')) ?>
							</div>
						</div>
					</div>
					<!-- /leyenda -->
					<div class="row-fluid">
						<div class="span12">
							<!--Body content-->
							<?php echo $this -> fetch('content'); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- <div id="plantaLogo"><?php echo $this->Html->image('planta.png') ?></div> -->
				
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
				
			<?php echo $this->element('footer') ?>	
		</div>
		<!-- /container -->

		<?php echo $this -> element('sql_dump'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script async="async">
			window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
		</script>
		<?php echo $this -> Html -> script(array('vendor/bootstrap.min', 'plugins', 'trama'), array('async'=>'async')) ?>
		<?php echo $this -> fetch('script') ?>
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
