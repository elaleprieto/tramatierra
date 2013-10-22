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
	<!--
	<div class="row-fluid">
		<?= $this->Html->image('multimedia/'.$multimedia['Multimedia']['archivo']); ?>
	</div>
	-->
	<!--Titulo y descripción de la multimedia-->
	<div class="row-fluid">
		<h3><?php echo h($multimedia['Multimedia']['title']); ?></h3>
		<?php echo h($multimedia['Multimedia']['descripcion']); ?>
	</div>
	<div class="row-fluid vistaVideo">
	<?php
		//Desplegar el visor que corresponda
		if ($multimedia['Multimedia']['multimedia_categoria_id'] == 1) {
			//Fotos
			echo '<div class="row-fluid">' . $this -> Html -> image('multimedia/' . $multimedia['Multimedia']['archivo']) . '
				  </div>';

		} else if ($multimedia['Multimedia']['multimedia_categoria_id'] == 2) {
			//Videos
			//JWPlayer
			/*
			 echo '	<div id="myElement">Loading the player...</div>
			 <script type="text/javascript">
			 jwplayer("myElement").setup({
			 file: "http://192.168.10.121/tramatierra/mm/'.$multimedia['Multimedia']['archivo'].'",
			 image: "/mm/1.jpg"
			 });
			 </script>';
			 */
			/*			echo '	<video controls autobuffer height="300px">
			 <source src="/mm/'.$multimedia['Multimedia']['archivo'].'" type="video/ogg">
			 <source src="/mm/'.$multimedia['Multimedia']['archivo'].'" type="video/mp4">
			 <source src="/mm/'.$multimedia['Multimedia']['archivo'].'" type="video/webm"/>

			 <div id="myElement">Loading the player...</div>
			 <script type="text/javascript">
			 jwplayer("myElement").setup({
			 file: "/mm/'.$multimedia['Multimedia']['archivo'].'",
			 image: "/mm/1.jpg"
			 });
			 </script>
			 </video>';
			 echo '<div class="row"><a href="/mm/'.$multimedia['Multimedia']['archivo'].'" class="btn">Descargar video</a></div>';
			 *//*
			 echo '<video id="example_video_1" class="video-js vjs-default-skin"
			 controls preload="auto" width="640" height="264"
			 poster="http://video-js.zencoder.com/oceans-clip.png"  preload="none"
			 >

			 <source src="http://tramatierra.workspace.com/mm/big_buck_bunny.ogv" type="video/ogg"/>
			 <source src="http://tramatierra.workspace.com/mm/big_buck_bunny.ogv" type="video/mp4" />

			 <object class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash"
			 data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
			 <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
			 <param name="allowfullscreen" value="true" />
			 <param name="flashvars" value="config={"playlist":["http://video-js.zencoder.com/oceans-clip.png", {"url": "http://video-js.zencoder.com/oceans-clip.mp4","autoPlay":false,"autoBuffering":true}]}" />
			 <img src="http://video-js.zencoder.com/oceans-clip.png" width="640" height="264" alt="Poster Image"
			 title="No video playback capabilities." />
			 </object>

			 </video>';
			 /*
			 //Flowplayer embed
			 echo '<script src="//embed.flowplayer.org/5.4.3/embed.min.js"><div
			 class="flowplayer" style="width: 624px; height: 260px;">
			 <video>

			 <source type="video/mp4" src="/mm/'.substr($multimedia['Multimedia']['archivo'],0, -3).'mp4">
			 <source type="video/ogg" src="/mm/'.substr($multimedia['Multimedia']['archivo'],0, -3).'ogv">
			 </video>
			 </div></script>';
			 */
			//jplayer
			echo '<div id="jp_container_1" class="jp-video jp-video-270p">
					    <div class="jp-type-single">
					      <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;></div>
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
					          <div class="jp-title">
					            <ul>
					              <li>Big Buck Bunny Trailer</li>
					            </ul>
					          </div>
					        </div>
					      </div>
					      <div class="jp-no-solution">
					        <span>Update Required</span>
					        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
					      </div>
					    </div>
					  </div>';

		} else if ($multimedia['Multimedia']['multimedia_categoria_id'] == 3) {
			//Audios
			/*
			 echo '	<div id="myElement">Loading the player...</div>
			 <script type="text/javascript">
			 jwplayer("myElement").setup({
			 file: "http://tramatierra.workspace.com/mm/'.$multimedia['Multimedia']['archivo'].'",
			 image: "/mm/1.jpg",
			 });
			 </script>';

			 echo '<embed src="http://tramatierra.workspace.com/js/vendor/jwplayer/jwplayer.flash.swf" width="320" height="24" allowfullscreen="true" flashvars="file=/mm/'.$multimedia['Multimedia']['archivo'].'"></embed>';
			 */
			/*			//html5
			 echo '<audio controls autoplay preload="auto">

			 <source src="/mm/'.$multimedia['Multimedia']['archivo'].'" type="audio/mpeg">
			 <source src="/mm/'.$multimedia['Multimedia']['archivo'].'" type="audio/ogg ">
			 <source src="/mm/'.$multimedia['Multimedia']['archivo'].'" type="audio/webm">
			 </audio>';
			 echo '<div class="row"><a href="/mm/'.$multimedia['Multimedia']['archivo'].'" class="btn">Descargar audio</a></div>';
			 */

			echo '<a id="mb" style="display:block;width:648px;height:30px;"
    							href="/mm/cayate_la_boca.mp3"></a>';

		} else if ($multimedia['Multimedia']['multimedia_categoria_id'] == 4) {
			//Publicaciones
			echo '<a href="http://tramatierra.workspace.com/app/webroot/mm/' . $multimedia['Multimedia']['archivo'] . '">Ver PDF</a>';
		}
	?>
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
<!--
<script>
// install flowplayer into container
$f("mb", "http://releases.flowplayer.org/swf/flowplayer-3.2.16.swf", {
 
    // fullscreen button not needed here
    plugins: {
        controls: {
            fullscreen: false,
            height: 30,
            autoHide: false
        },
         audio: {
            url: '/js/vendor/flowplayer.audio.swf'
        }
    },
    clip: {
        autoPlay: false,
        // optional: when playback starts close the first audio playback
        onBeforeBegin: function() {
            $f("player").close();
        }
 
    }
 
});

</script>
--><!--
<script>
	videojs("example_video_1", {}, function(){
  // Player (this) is initialized and ready.
});
</script>-->
<?php
echo $this -> Html -> script('vendor/jquery-1.9.1.min');
echo $this -> Html -> script('vendor/jplayer/jquery.jplayer.min');
?>
<!--
<script type="text/javascript">
	$.noConflict();
	jQuery(document).ready(function($) {
		$("#jquery_jplayer_1").jPlayer({
			ready : function() {
				$(this).jPlayer("setMedia", {
					m4v : "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer_480x270_h264aac.m4v",
					ogv : "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer_480x270.ogv",
					//poster : "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
				});
			},
			swfPath : "/js/vendor/jplayer",
			// supplied : "m4v, ogv"
			supplied : "ogv",
			
		});
	});
  </script>
 -->

<script type="text/javascript">
	$.noConflict();
	jQuery(document).ready(function($) {
		$("#jquery_jplayer_1").jPlayer({
			ready : function() {
				$(this).jPlayer("setMedia", {
					m4v : "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer_480x270_h264aac.m4v",
					ogv : "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer_480x270.ogv",
					//poster : "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
				});
			},
			swfPath : "/js/vendor/jplayer",
			// supplied : "m4v, ogv"
			supplied : "ogv",
			
		});
	});
  </script>