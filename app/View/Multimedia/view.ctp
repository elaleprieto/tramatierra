<?php
	echo $this->Html->css('multimedias/view', '', array('inline'=>FALSE));
	echo $this->Html->css('secciones/view', '', array('inline'=>FALSE));
	$this -> set('title_for_layout', $seccion['Seccion']['title']);

	$botones = '';
	if (!empty($seccion['Area'])) :
		$botones = ' | ';
		foreach ($seccion['Area'] as $area) :
			// $botones .= '<span>' . $this -> Html -> link($area['title'] . ' &raquo;', array('controller' => 'areas', 'action' => 'view', $area['id']), array('class' => 'btn btn-primary btn-large', 'escape' => FALSE)) . '</span>';
			// $botones .= $this->Html->link(mb_strtoupper($area['title'], 'UTF-8'), array('controller' => 'areas', 'action' => 'view', $area['id']), array('class' => 'areaButton', 'escape' => FALSE));
			$botones .= $this->Html->link(mb_strtoupper($area['title'], 'UTF-8'), '#', array('class' => 'areaButton', 'escape' => FALSE));
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
		<?php echo h($multimedia['Multimedia']['descripcion']);?>
	</div>
	
	<!-- VIDEO -->
	<div class="row-fluid vistaVideo">
		<script src="http://embed.flowplayer.org/5.4.3/embed.min.js">
			<div class="flowplayer" style="width: 500px; height: 300px;">
    			<video>
         			<source type="video/ogg" src=<?php echo "http://tramatierra.workspace.com/mm/".$multimedia['Multimedia']['archivo'];?>>
         		</video>
			</div>
		</script>
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
