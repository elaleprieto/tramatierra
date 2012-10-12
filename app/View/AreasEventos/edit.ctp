<div class="areasEventos form">
<?php echo $this->Form->create('AreasEvento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Areas Evento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('area_id');
		echo $this->Form->input('evento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AreasEvento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AreasEvento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Areas Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
