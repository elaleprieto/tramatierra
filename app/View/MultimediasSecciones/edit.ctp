<div class="multimediasSecciones form">
<?php echo $this->Form->create('MultimediasSeccion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Multimedias Seccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('multimedia_id');
		echo $this->Form->input('seccion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MultimediasSeccion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MultimediasSeccion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Multimedias Secciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
