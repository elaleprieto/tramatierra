<?php
echo $this -> Html -> css('eventos/agregar');
?>
<div class="hero-unit">
	<h1>Eventos</h1>
</div>
<?php echo $this->Form->create('Evento', array('inputDefaults' => array('label' => false, 'div' => FALSE))); ?>
<div class="row">
	<div class="span6">
		<?php
		// echo $this -> Form -> input('name', array('class' => 'span6', 'label' => FALSE, 'placeholder' => __('Name')));
		echo $this -> Form -> input('title', array('class' => 'span6', 'placeholder' => __('Title')));
		
		?>
		<div class="row">
			<div class="span2">
				<?php echo $this->Form->input('fecha', array('dateFormat' => 'Y', 'class' => 'span2'));?>
			</div>
			<div class="span2">
				<?php echo $this->Form->input('fecha', array('dateFormat' => 'M', 'class' => 'span2'));?>
			</div>
			<div class="span2">
				<?php echo $this->Form->input('fecha', array('dateFormat' => 'D', 'class' => 'span2'));?>
			</div>
		</div>
		<div class="row">
		<?php echo $this->Form->input('hora', array('class' => 'span2','separator' => '<div class="span2">',));?>
		</div>
		<?php echo $this->Form->input('lugar', array('class' => 'span6', 'placeholder' => __('Lugar')));?>
		<?php echo $this -> Form -> input('descripcion', array('class' => 'span6', 'placeholder' => __('Descripción')));?>
	</div>
	<div class="span6">
		<?php echo $this->Form->input('resumen', array('class' => 'span6', 'placeholder' => __('Resumen'))); ?>
	</div>
</div>
<div class="row">
	<?php
	echo $this -> Form -> input('Seccion', array('div' => 'span4', 'multiple'=>'checkbox', 'label' => array('class' => 'label')));
	echo $this -> Form -> input('Area', array('div' => 'span4', 'multiple'=>'checkbox', 'label' => array('class' => 'label')));
	echo $this -> Form -> input('Subarea', array('div' => 'span4', 'multiple'=>'checkbox', 'label' => array('class' => 'label')));
	?>
</div>
<?php echo $this -> Form -> submit(__('Submit'), array('class' => 'btn btn-success btn-large btn-block')); ?>
<?php echo $this -> Form -> end(); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
