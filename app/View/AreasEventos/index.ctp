<div class="areasEventos index">
	<h2><?php echo __('Areas Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($areasEventos as $areasEvento): ?>
	<tr>
		<td><?php echo h($areasEvento['AreasEvento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($areasEvento['Area']['title'], array('controller' => 'areas', 'action' => 'view', $areasEvento['Area']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($areasEvento['Evento']['title'], array('controller' => 'eventos', 'action' => 'view', $areasEvento['Evento']['id'])); ?>
		</td>
		<td><?php echo h($areasEvento['AreasEvento']['created']); ?>&nbsp;</td>
		<td><?php echo h($areasEvento['AreasEvento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $areasEvento['AreasEvento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $areasEvento['AreasEvento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $areasEvento['AreasEvento']['id']), null, __('Are you sure you want to delete # %s?', $areasEvento['AreasEvento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Areas Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
