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
					<?php echo $this->Session->flash() ?>
					<?php echo $this->element('banner') ?>
				</div>
			</div>
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
									<?php echo $this -> fetch('descripcion-general'); ?>
								</div>
							</div>
							<div id="leyendaButtonDiv">
								<?php echo $this->Html->image('top/mas.png', array('id' => 'leyendaButtonMas')) ?>
							</div>
						</div>
					</div>
					<!-- /leyenda -->

					<!-- body -->
					<div class="row-fluid">
						<div class="span12">
							<?php echo $this -> fetch('content'); ?>
						</div>
					</div>
					<!-- /body -->
				</div>
			</div>
			<?php echo $this->element('footer') ?>
		</div>
		<!-- /container -->

		<?php echo $this -> element('sql_dump'); ?>
		<?php echo $this -> Js -> writeBuffer(); ?>
	</body>
</html>
