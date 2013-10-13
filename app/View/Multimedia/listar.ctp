<div class="multimedia index">
	<h2><?php echo __('Multimedia'); ?></h2>
	<table class="" cellpadding="0" cellspacing="0">
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
	<?php
	foreach ($multimedia as $multimedia): ?>
	<tr>
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
	</tr>
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
