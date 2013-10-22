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
  <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
  <script type="text/javascript" src="/js/vendor/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="http://tramatierra.workspace.com/js/vendor/jplayer/jquery.jplayer.min.js"></script>
  
<div class="multimedia view">
	<h2><?php echo h($multimedia['Multimedia']['name']); ?></h2>
	<div class="row-fluid">
		<h3><?php echo h($multimedia['Multimedia']['title']); ?></h3>
		<?php echo h($multimedia['Multimedia']['descripcion']); ?>
	</div>
	<div class="row-fluid vistaVideo">

	
	
  <div id="jp_container_1" class="jp-video jp-video-270p">
    <div class="jp-type-single">
      <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px"></div>
      <div class="jp-gui">
        <div class="jp-video-play">
          <a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
        </div>
        <div class="jp-interface">
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-current-time"></div>
          <div class="jp-duration"></div>
          <div class="jp-controls-holder">
            <ul class="jp-controls">
              <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
              <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
              <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
              <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
              <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
              <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
            </ul>
            <div class="jp-volume-bar">
              <div class="jp-volume-bar-value"></div>
            </div>
            <ul class="jp-toggles">
              <li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
              <li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
              <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
              <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
            </ul>
          </div>

        </div>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
  </div>
 </div>
 <!-- Volver al listado anterior -->
	<div class="row-fluid">
		<?php echo $this->Html->link('Volver Listado', array(
						'controller' => 'MultimediasSecciones',
						'action' => 'listar', 
						$seccion['Seccion']['id'], 
						$multimedia['Multimedia']['multimedia_categoria_id']),
						array('class' => 'btn btn-success'))?>
	</div>
</div>
 <?php
 echo '
   <script type="text/javascript">

    $.noConflict();
    jQuery(document).ready(function($){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
          	ogv: "/mm/'.substr($multimedia['Multimedia']['archivo'],0, -3).'ogv",
            m4v: "/mm/'.substr($multimedia['Multimedia']['archivo'],0,-3).'mp4",
          });
        },
        swfPath: "/js/vendor/jplayer/",
        supplied: "m4v, ogv"
      });
    });
  </script>';
?>