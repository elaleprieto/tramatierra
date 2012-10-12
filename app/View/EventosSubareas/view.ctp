<div class="eventosSubareas view">
<h2><?php  echo __('Eventos Subarea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventosSubarea['EventosSubarea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventosSubarea['Evento']['title'], array('controller' => 'eventos', 'action' => 'view', $eventosSubarea['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subarea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventosSubarea['Subarea']['title'], array('controller' => 'subareas', 'action' => 'view', $eventosSubarea['Subarea']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($eventosSubarea['EventosSubarea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($eventosSubarea['EventosSubarea']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eventos Subarea'), array('action' => 'edit', $eventosSubarea['EventosSubarea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eventos Subarea'), array('action' => 'delete', $eventosSubarea['EventosSubarea']['id']), null, __('Are you sure you want to delete # %s?', $eventosSubarea['EventosSubarea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos Subareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventos Subarea'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
