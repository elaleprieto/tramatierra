<div class="multimediasSubareas view">
<h2><?php  echo __('Multimedias Subarea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multimediasSubarea['MultimediasSubarea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multimedia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($multimediasSubarea['Multimedia']['title'], array('controller' => 'multimedia', 'action' => 'view', $multimediasSubarea['Multimedia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subareas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($multimediasSubarea['Subareas']['title'], array('controller' => 'subareas', 'action' => 'view', $multimediasSubarea['Subareas']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($multimediasSubarea['MultimediasSubarea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($multimediasSubarea['MultimediasSubarea']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Multimedias Subarea'), array('action' => 'edit', $multimediasSubarea['MultimediasSubarea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Multimedias Subarea'), array('action' => 'delete', $multimediasSubarea['MultimediasSubarea']['id']), null, __('Are you sure you want to delete # %s?', $multimediasSubarea['MultimediasSubarea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedias Subareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedias Subarea'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subareas'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
