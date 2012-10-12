<div class="areasEventos view">
<h2><?php  echo __('Areas Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($areasEvento['AreasEvento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($areasEvento['Area']['title'], array('controller' => 'areas', 'action' => 'view', $areasEvento['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($areasEvento['Evento']['title'], array('controller' => 'eventos', 'action' => 'view', $areasEvento['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($areasEvento['AreasEvento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($areasEvento['AreasEvento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Areas Evento'), array('action' => 'edit', $areasEvento['AreasEvento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Areas Evento'), array('action' => 'delete', $areasEvento['AreasEvento']['id']), null, __('Are you sure you want to delete # %s?', $areasEvento['AreasEvento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Areas Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
