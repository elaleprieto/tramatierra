<div class="areasMultimedia form">
<?php echo $this->Form->create('AreasMultimedia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Areas Multimedia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('area_id');
		echo $this->Form->input('multimedia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AreasMultimedia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AreasMultimedia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Areas Multimedia'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
