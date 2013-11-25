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
   
<link type="text/css" href="http://tramatierra.workspace.com/css/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://tramatierra.workspace.com/js/vendor/jplayer/jquery.jplayer.min.js"></script>
  
<?php 

	echo '<script type="text/javascript">
	 		$.noConflict();
    		jQuery(document).ready(function($){
      			$("#jquery_jplayer_1").jPlayer({
        			ready: function () {
          				$(this).jPlayer("setMedia", {
            				mp3: "http://tramatierra.workspace.com/mm/'.substr($multimedia['Multimedia']['archivo'],0,-3).'mp3"
          				});
        			},
        			swfPath: "http://tramatierra.workspace.com/js/vendor/jplayer/",
        			supplied: "mp3",
        			wmode: "window",
        			solution:"html, flash"
      			});
    		});
  		</script>';

?>
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
	//$this -> assign('descripcion-general', '<p>' . h($seccion['Seccion']['descripcion']) . '</p>');
	$this -> assign('descripcion-general', '<p>' . nl2br(h($seccion['Seccion']['descripcion'])) . '</p>');
	$this -> assign('botones', $botones);
?>
<div class="multimedia view">
	<h2><?php echo h($multimedia['Multimedia']['name']); ?></h2>
	<!--Titulo y descripción de la multimedia-->
	<div class="row-fluid">
		<h3><?php echo h($multimedia['Multimedia']['title']); ?></h3>
		<?php echo h($multimedia['Multimedia']['descripcion']); ?>
	</div>
	<div class="row-fluid vistaVideo">
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		<div id="jp_container_1" class="jp-audio">
		   	<div class="jp-type-single">
				<div class="jp-gui jp-interface">
		       		<ul class="jp-controls">
		       			<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
		    	    	<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
		          		<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
		          		<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
		          		<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
		        	</ul>
			        <div class="jp-progress">
			        	<div class="jp-seek-bar">
			            	<div class="jp-play-bar"></div>
			          	</div>
			        </div>
			        <div class="jp-volume-bar">
			        	<div class="jp-volume-bar-value"></div>
			        </div>
			        <div class="jp-time-holder">
			        	<div class="jp-current-time"></div>
			          	<div class="jp-duration"></div>
			          	<ul class="jp-toggles">
				            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
				            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
						</ul>
			        </div>
				</div>
		      	<div class="jp-no-solution">
		        	<span>Se requiere actualización</span>
		        	El browser que utilizas no puede reproducir este audio. Actualiza el browser o instala <a href="http://get.adobe.com/flashplayer/" target="_blank">plugin Flash</a>.
		      	</div>
			</div>
		</div>
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