<div class="eventosSubareas index">
	<h2><?php echo __('Eventos Subareas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subarea_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($eventosSubareas as $eventosSubarea): ?>
	<tr>
		<td><?php echo h($eventosSubarea['EventosSubarea']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventosSubarea['Evento']['title'], array('controller' => 'eventos', 'action' => 'view', $eventosSubarea['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eventosSubarea['Subarea']['title'], array('controller' => 'subareas', 'action' => 'view', $eventosSubarea['Subarea']['id'])); ?>
		</td>
		<td><?php echo h($eventosSubarea['EventosSubarea']['created']); ?>&nbsp;</td>
		<td><?php echo h($eventosSubarea['EventosSubarea']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventosSubarea['EventosSubarea']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventosSubarea['EventosSubarea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventosSubarea['EventosSubarea']['id']), null, __('Are you sure you want to delete # %s?', $eventosSubarea['EventosSubarea']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Eventos Subarea'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
