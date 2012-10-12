<div class="subareas view">
<h2><?php  echo __('Subarea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subarea['Subarea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($subarea['Subarea']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($subarea['Subarea']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($subarea['Subarea']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subarea['Area']['id'], array('controller' => 'areas', 'action' => 'view', $subarea['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subarea['Subarea']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subarea['Subarea']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subarea'), array('action' => 'edit', $subarea['Subarea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subarea'), array('action' => 'delete', $subarea['Subarea']['id']), null, __('Are you sure you want to delete # %s?', $subarea['Subarea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
