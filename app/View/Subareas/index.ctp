<div class="subareas index">
	<h2><?php echo __('Subareas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subareas as $subarea): ?>
	<tr>
		<td><?php echo h($subarea['Subarea']['id']); ?>&nbsp;</td>
		<td><?php echo h($subarea['Subarea']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($subarea['Subarea']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($subarea['Subarea']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subarea['Area']['id'], array('controller' => 'areas', 'action' => 'view', $subarea['Area']['id'])); ?>
		</td>
		<td><?php echo h($subarea['Subarea']['created']); ?>&nbsp;</td>
		<td><?php echo h($subarea['Subarea']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subarea['Subarea']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subarea['Subarea']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subarea['Subarea']['id']), null, __('Are you sure you want to delete # %s?', $subarea['Subarea']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subarea'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
