<div class="eventosSecciones view">
<h2><?php  echo __('Eventos Seccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventosSeccion['EventosSeccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventosSeccion['Evento']['title'], array('controller' => 'eventos', 'action' => 'view', $eventosSeccion['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventosSeccion['Seccion']['title'], array('controller' => 'secciones', 'action' => 'view', $eventosSeccion['Seccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($eventosSeccion['EventosSeccion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($eventosSeccion['EventosSeccion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eventos Seccion'), array('action' => 'edit', $eventosSeccion['EventosSeccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eventos Seccion'), array('action' => 'delete', $eventosSeccion['EventosSeccion']['id']), null, __('Are you sure you want to delete # %s?', $eventosSeccion['EventosSeccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos Secciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventos Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
