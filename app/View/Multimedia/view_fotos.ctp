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
  <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
  <script type="text/javascript" src="/js/vendor/jquery-1.9.1.min.js"></script>
  
<div class="multimedia view">
	<h2><?php echo h($multimedia['Multimedia']['name']); ?></h2>
	<div class="row-fluid">
		<h3><?php echo h($multimedia['Multimedia']['title']); ?></h3>
		<?php echo h($multimedia['Multimedia']['descripcion']); ?>
	</div>
	<div class="row-fluid vistaVideo">
		<!--<?php echo $archivos['0'];?>-->
		<?php 
			foreach($archivos as $archivo){
				echo '	<div class="span3">';
				echo $this->html->image('/mm/foto'.$multimedia['Multimedia']['id'].'/'.$archivo, 
						array('alt' => $multimedia['Multimedia']['name']));
				echo '</div>';
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
