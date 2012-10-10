<div class="areasMultimedia index">
	<h2><?php echo __('Areas Multimedia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('multimedia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($areasMultimedia as $areasMultimedia): ?>
	<tr>
		<td><?php echo h($areasMultimedia['AreasMultimedia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($areasMultimedia['Area']['title'], array('controller' => 'areas', 'action' => 'view', $areasMultimedia['Area']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($areasMultimedia['Multimedia']['title'], array('controller' => 'multimedia', 'action' => 'view', $areasMultimedia['Multimedia']['id'])); ?>
		</td>
		<td><?php echo h($areasMultimedia['AreasMultimedia']['created']); ?>&nbsp;</td>
		<td><?php echo h($areasMultimedia['AreasMultimedia']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $areasMultimedia['AreasMultimedia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $areasMultimedia['AreasMultimedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $areasMultimedia['AreasMultimedia']['id']), null, __('Are you sure you want to delete # %s?', $areasMultimedia['AreasMultimedia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Areas Multimedia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
