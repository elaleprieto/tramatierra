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
//$this -> assign('descripcion-general', '<p>' . h($seccion['Seccion']['descripcion']) . '</p>');
$this -> assign('descripcion-general', '<p>' . nl2br(h($seccion['Seccion']['descripcion'])) . '</p>');
$this -> assign('botones', $botones);
?>
<script type="text/javascript" src="/js/vendor/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="/app/webroot/css/blueimp-gallery.min.css">
  	
<div class="multimedia view">
	<!--<h2><?php echo h($multimedia['Multimedia']['name']); ?></h2>-->
	<div class="row-fluid">
		<h2 class="multimedia-tittle"><?php echo h($multimedia['Multimedia']['title']); ?></h2>
		
		<p class="resumen"><?php echo h($multimedia['Multimedia']['resumen']); ?></p>
		<p align="justify"><?php echo h($multimedia['Multimedia']['descripcion']); ?></p>
	</div>

	<div class="row-fluid vistaVideo">
		<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
		<div id="blueimp-gallery" class="blueimp-gallery">
    		<div class="slides"></div>
    		<h3 class="title"></h3>
    		<a class="prev">‹</a>
    		<a class="next">›</a>
    		<a class="close">×</a>
    		<a class="play-pause"></a>
    		<ol class="indicator"></ol>
		</div>
		<div id="links">
			<?php 
				foreach($archivos as $archivo){
					echo '	<div class="span3 img-fotos">
							<a href="'.'/mm/foto'.$multimedia['Multimedia']['id'].'/'.$archivo.'" title="'.$multimedia['Multimedia']['name'].'" rel="gallery">';
					echo $this->html->image('/mm/foto'.$multimedia['Multimedia']['id'].'/'.$archivo, 
							array('alt' => $multimedia['Multimedia']['name']));
					echo '</a></div>';
				}
			?>
		</div>
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
<script src="/app/webroot/js/vendor/blueimp-gallery.js"></script>
<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>