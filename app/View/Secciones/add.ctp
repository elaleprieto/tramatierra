<div class="secciones form">
<?php echo $this->Form->create('Seccion'); ?>
	<fieldset>
		<legend><?php echo __('Add Seccion'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('titulo');
		echo $this->Form->input('banner');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('Multimedia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Secciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
