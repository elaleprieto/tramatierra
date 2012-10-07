<div class="multimediasSecciones view">
<h2><?php  echo __('Multimedias Seccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multimediasSeccion['MultimediasSeccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multimedia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($multimediasSeccion['Multimedia']['id'], array('controller' => 'multimedia', 'action' => 'view', $multimediasSeccion['Multimedia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($multimediasSeccion['Seccion']['id'], array('controller' => 'secciones', 'action' => 'view', $multimediasSeccion['Seccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($multimediasSeccion['MultimediasSeccion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($multimediasSeccion['MultimediasSeccion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Multimedias Seccion'), array('action' => 'edit', $multimediasSeccion['MultimediasSeccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Multimedias Seccion'), array('action' => 'delete', $multimediasSeccion['MultimediasSeccion']['id']), null, __('Are you sure you want to delete # %s?', $multimediasSeccion['MultimediasSeccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedias Secciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedias Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
