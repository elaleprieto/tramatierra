<?php
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
<div class="row-fluid">
	<div class="multimedia index">
		<div class="row-fluid">
			<h2 class="nombreCategoria span3">
				<?php echo strtoupper($categoriaNombre)?>
			</h2>
		</div>
		<table cellpadding="0" cellspacing="0">
		<!--
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('archivo'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('multimedia_categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	-->
	<?php
	foreach ($multimediaseccion as $multimedia): ?>
	<div class="row-fluid">
		<div class="span11 categoria">
			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid">
						<div class="span6">
							<?= $this->Html->image('multimedia/'.$multimedia['Multimedia']['archivo']); ?>
						</div>
						<div class="span5">
							<p>
								<b><?php echo $multimedia['Multimedia']['title'];?></b><br>
								<?php echo  nl2br($multimedia['Multimedia']['descripcion']);?>
							</p>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span11 articuloTitulo">
						<div class="row-fluid">
							<div class="span6">
								<!--<?php echo $this->Html->link($multimedia['Multimedia']['name'], array(
														'controller' => 'multimedia',
														'action' => 'view', $multimedia['Multimedia']['id'], $seccion['Seccion']['id']));?>-->
								
								<?php echo $this->Html->link($multimedia['Multimedia']['title'], array(
														'controller' => 'multimedia',
														'action' => 'view', 
														$multimedia['Multimedia']['id'], 
														$seccion['Seccion']['id']));?>
														
								<?php
								if($multimedia['Multimedia']['multimedia_categoria_id']==2){
									echo $this->Html->link($multimedia['Multimedia']['title'], array(
														'controller' => 'multimedia',
														'action' => 'view_video', 
														$multimedia['Multimedia']['id'], 
														$seccion['Seccion']['id']));
								} else if($multimedia['Multimedia']['multimedia_categoria_id']==3){
									echo $this->Html->link($multimedia['Multimedia']['title'], array(
														'controller' => 'multimedia',
														'action' => 'view_audio', 
														$multimedia['Multimedia']['id'], 
														$seccion['Seccion']['id']));
								}
								?>				
							</div>
							<div class="span6 categoriaArea">
								<?= $this -> Html -> image('area/etiqueta/culturaLibre.png'); ?>
								<?= $this -> Html -> image('area/etiqueta/energia.png'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<tr>
		<td><?php echo h($multimedia['Multimedia']['id']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['name']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['title']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['archivo']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($multimedia['MultimediaCategoria']['title'], array('controller' => 'multimedia_categorias', 'action' => 'view', $multimedia['MultimediaCategoria']['id'])); ?>
		</td>
		<td><?php echo h($multimedia['Multimedia']['created']); ?>&nbsp;</td>
		<td><?php echo h($multimedia['Multimedia']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $multimedia['Multimedia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $multimedia['Multimedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $multimedia['Multimedia']['id']), null, __('Are you sure you want to delete # %s?', $multimedia['Multimedia']['id'])); ?>
		</td>
	</tr>-->
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

</div><!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Multimedia Categorias'), array('controller' => 'multimedia_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia Categoria'), array('controller' => 'multimedia_categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->