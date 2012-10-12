<?php
echo $this -> Html -> css('eventos/agregar');
?>
<div class="hero-unit">
	<h1>Eventos</h1>
</div>

<div class="eventos form">
<?php echo $this->Form->create('Evento'); ?>
	<div class="row">
		<div class="span6">
	<?php
		// echo $this->Form->input('nombre');
		echo $this->Form->input('titulo');
		echo $this->Form->input('fecha');
		echo $this->Form->input('hora');
		echo $this->Form->input('lugar');
		echo $this->Form->input('resumen');
	?>
	</div>
	<div class="span6">
		<?php echo $this->Form->input('descripcion'); ?>
	</div>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
