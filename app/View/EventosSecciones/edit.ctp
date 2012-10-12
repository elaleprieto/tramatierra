<div class="eventosSecciones form">
<?php echo $this->Form->create('EventosSeccion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eventos Seccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('seccion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventosSeccion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EventosSeccion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos Secciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
