<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script async="async">
	window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
</script>
<?php echo $this -> Html -> script(array('vendor/bootstrap.min', 'plugins', 'trama'), array('async'=>'async')); ?>
<?php echo $this -> fetch('script'); ?>
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
<?php

	echo $this -> Html -> css('multimedias/view', '', array('inline' => FALSE));
	echo $this -> Html -> css('secciones/view', '', array('inline' => FALSE));
	echo $this -> Html -> css('styles', '', array('inline' => FALSE));
	echo $this -> Html -> css('blue.monday/jplayer.blue.monday', '', array('inline' => FALSE));

	$this -> set('title_for_layout', $seccion['Seccion']['title']);

	$botones = '';
	if (!empty($seccion['Area'])) :
		$botones = ' | ';
		foreach ($seccion['Area'] as $area) :
			// $botones .= '<span>' . $this -> Html -> link($area['title'] . ' &raquo;', array('controller' => 'areas', 'action' => 'view', $area['id']), array('class' => 'btn btn-primary btn-large', 'escape' => FALSE)) . '</span>';
			// $botones .= $this->Html->link(mb_strtoupper($area['title'], 'UTF-8'), array('controller' => 'areas', 'action' => 'view', $area['id']), array('class' => 'areaButton', 'escape' => FALSE));
			$botones .= $this -> Html -> link(mb_strtoupper($area['title'], 'UTF-8'), '#', array('class' => 'areaButton', 'escape' => FALSE));
			$botones .= ' | ';
		endforeach;
	endif;
	$this -> assign('banner', h($seccion['Seccion']['banner']));
	$this -> assign('titulo', mb_strtoupper(h($seccion['Seccion']['title']), 'UTF-8'));
	$this -> assign('descripcion-general', '<p>' . nl2br(h($seccion['Seccion']['descripcion'])) . '</p>');
	$this -> assign('botones', $botones);
?>

  
<div class="multimedia view">
	<h2><?php echo h($multimedia['Multimedia']['name']); ?></h2>
	<div class="row-fluid">
		<h3><?php echo h($multimedia['Multimedia']['title']); ?></h3>
		<?php echo h($multimedia['Multimedia']['descripcion']); ?>
	</div>
	<div class="row-fluid vistaVideo">

		<?php echo '<a 	class="btn btn-large" 
						href="http://tramatierra.workspace.com/app/webroot/mm/' . $multimedia['Multimedia']['archivo'] . '" target="blank">
						<i class=" icon-file"></i> ver PDF
					</a>';?>
					

 	</div>
 	<!-- Volver al listado anterior -->
	<div class="row-fluid">
		<?php echo $this->Html->link('<<', array(
						'controller' => 'MultimediasSecciones',
						'action' => 'listar', 
						$seccion['Seccion']['id'], 
						$multimedia['Multimedia']['multimedia_categoria_id']),
						array('class' => 'btn btn-success'))?>
	</div>
</div>

