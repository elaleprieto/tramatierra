<div class="multimediasSecciones index">
	<h2><?php echo __('Multimedias Secciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('multimedia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($multimediasSecciones as $multimediasSeccion): ?>
	<tr>
		<td><?php echo h($multimediasSeccion['MultimediasSeccion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($multimediasSeccion['Multimedia']['title'], array('controller' => 'multimedia', 'action' => 'view', $multimediasSeccion['Multimedia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($multimediasSeccion['Seccion']['title'], array('controller' => 'secciones', 'action' => 'view', $multimediasSeccion['Seccion']['id'])); ?>
		</td>
		<td><?php echo h($multimediasSeccion['MultimediasSeccion']['created']); ?>&nbsp;</td>
		<td><?php echo h($multimediasSeccion['MultimediasSeccion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $multimediasSeccion['MultimediasSeccion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $multimediasSeccion['MultimediasSeccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $multimediasSeccion['MultimediasSeccion']['id']), null, __('Are you sure you want to delete # %s?', $multimediasSeccion['MultimediasSeccion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Multimedias Seccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
