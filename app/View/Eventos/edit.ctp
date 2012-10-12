<div class="eventos form">
<?php echo $this->Form->create('Evento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('title');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fecha');
		echo $this->Form->input('hora');
		echo $this->Form->input('lugar');
		echo $this->Form->input('resumen');
		echo $this->Form->input('Area');
		echo $this->Form->input('Seccion');
		echo $this->Form->input('Subarea');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Evento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
