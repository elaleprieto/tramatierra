<div class="multimediasSubareas form">
<?php echo $this->Form->create('MultimediasSubarea'); ?>
	<fieldset>
		<legend><?php echo __('Add Multimedias Subarea'); ?></legend>
	<?php
		echo $this->Form->input('multimedia_id');
		echo $this->Form->input('subareas_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Multimedias Subareas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subareas'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
