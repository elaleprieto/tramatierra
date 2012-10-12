<?php
echo $this -> Html -> css('secciones/view');
$this -> set('title_for_layout', $area['Area']['title']);

$botones = '<span>'.$this -> Html -> link('&laquo; '.$area['Seccion']['title'], array('controller' => 'secciones', 'action' => 'view', $area['Seccion']['id']), array('class' => 'btn btn-primary btn-large', 'escape' => FALSE)).'</span>';
if (!empty($area['Subarea'])):
	foreach ($area['Subarea'] as $subarea):
		$botones .= '<span>'.$this -> Html -> link($subarea['title'] . ' &raquo;', array('controller' => 'areas', 'action' => 'view', $subarea['id']), array('class' => 'btn btn-primary btn-large', 'escape' => FALSE)).'</span>';
	endforeach;
endif;
$this -> assign('banner', h($area['Seccion']['banner']));
$this -> assign('titulo', h($area['Area']['title']));
$this -> assign('descripcion-general', '<p>'.h($area['Area']['descripcion']).'</p>');
$this -> assign('botones', $botones);
?>

<div class="areas view">
<!-- Example row of columns -->
	<div class="row">
		<div class="span6">
			<h2>Fotos</h2>
			<p class="fotos">
				<?php
				$imagen = isset($seccion['Multimedia']) && sizeof($seccion['Multimedia']) > 0 ? $seccion['Multimedia'][0]['url'] : 'http://lorempixel.com/450/200/nature?' . time();
				echo $this -> Html -> image($imagen);
				?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
		<div class="span6">
			<h2>Videos</h2>
			<p>
				<?= $this -> Html -> image('http://lorempixel.com/450/200/technics?' . time()); ?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
		<div class="span6">
			<h2>Audios</h2>
			<p>
				<?= $this -> Html -> image('http://lorempixel.com/450/200/nightlife?' . time()); ?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
		<div class="span6">
			<h2>Publicaciones</h2>
			<p>
				<?= $this -> Html -> image('http://lorempixel.com/450/200/people?' . time()); ?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
	</div>
</div>
<?php /* ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']), null, __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subareas'); ?></h3>
	<?php if (!empty($area['Subarea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($area['Subarea'] as $subarea): ?>
		<tr>
			<td><?php echo $subarea['id']; ?></td>
			<td><?php echo $subarea['name']; ?></td>
			<td><?php echo $subarea['title']; ?></td>
			<td><?php echo $subarea['descripcion']; ?></td>
			<td><?php echo $subarea['area_id']; ?></td>
			<td><?php echo $subarea['created']; ?></td>
			<td><?php echo $subarea['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subareas', 'action' => 'view', $subarea['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subareas', 'action' => 'edit', $subarea['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subareas', 'action' => 'delete', $subarea['id']), null, __('Are you sure you want to delete # %s?', $subarea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
*/ ?>