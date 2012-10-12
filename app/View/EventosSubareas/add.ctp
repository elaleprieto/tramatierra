<div class="eventosSubareas form">
<?php echo $this->Form->create('EventosSubarea'); ?>
	<fieldset>
		<legend><?php echo __('Add Eventos Subarea'); ?></legend>
	<?php
		echo $this->Form->input('evento_id');
		echo $this->Form->input('subarea_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eventos Subareas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
