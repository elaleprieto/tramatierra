<?php
echo $this -> Html -> css('eventos/agregar');
?>
<div class="hero-unit">
	<h1>Eventos</h1>
</div>
<?php echo $this -> Form -> create('Evento', array('inputDefaults' => array('label' => false, 'div' => FALSE))); ?>
<div class="row">
	<div class="span6">
		<?php
		// echo $this -> Form -> input('name', array('class' => 'span6', 'label' => FALSE, 'placeholder' => __('Name')));
		if ($this -> Form -> isFieldError('title')) {
			echo $this -> Form -> error('title', $this -> Form -> tagIsInvalid(), array('class' => FALSE, 'wrap' => 'p class="text-error"'));
		}
		echo $this -> Form -> text('title', array('class' => 'span6', 'placeholder' => __('Title')));
		?>
		<div class="row">
			<?php 
			if ($this -> Form -> isFieldError('fecha')) {
				echo $this->Html->div('span6', $this -> Form -> error('fecha', $this -> Form -> tagIsInvalid(), array('class' => FALSE, 'wrap' => 'p class="text-error"')));
			}
			?>
			<div class="span2">
				<?php echo $this -> Form -> day('fecha', array('class' => 'span2', 'empty' => 'Día')); ?>
			</div>
			<div class="span2">
				<?php echo $this -> Form -> month('fecha', array('class' => 'span2', 'empty' => 'Mes')); ?>
			</div>
			<div class="span2">
				<?php echo $this -> Form -> year('fecha', 2012, 2015, array('class' => 'span2', 'empty' => 'Año', 'orderYear' => 'asc')); ?>
			</div>
		</div>
		<div class="row">
			<?php 
			if ($this -> Form -> isFieldError('hora')) {
				echo $this->Html->div('span6', $this -> Form -> error('hora', $this -> Form -> tagIsInvalid(), array('class' => FALSE, 'wrap' => 'p class="text-error"')));
			}
			?>
			<div class="span3">
				<?php echo $this -> Form -> hour('hora', TRUE, array('class' => 'span3', 'empty' => 'Hora')); ?>
			</div>
			<div class="span3">
				<?php echo $this -> Form -> minute('hora', array('class' => 'span3', 'empty' => 'Minutos', 'interval' => 15)); ?>
			</div>
		</div>
		<?php 
		if ($this -> Form -> isFieldError('lugar')) {
			echo $this -> Form -> error('lugar', $this -> Form -> tagIsInvalid(), array('class' => FALSE, 'wrap' => 'p class="text-error"'));
		}
		echo $this -> Form -> text('lugar', array('class' => 'span6', 'placeholder' => __('Lugar')));
		?>
		<?php 
		if ($this -> Form -> isFieldError('descripcion')) {
			echo $this -> Form -> error('descripcion', $this -> Form -> tagIsInvalid(), array('class' => FALSE, 'wrap' => 'p class="text-error"'));
		}
		echo $this -> Form -> textarea('descripcion', array('class' => 'span6', 'rows' => '5', 'placeholder' => __('Descripción')));
		?>
	</div>
	<div class="span6">
		<?php 
		if ($this -> Form -> isFieldError('resumen')) {
			echo $this->Html->div('span6', $this -> Form -> error('resumen', $this -> Form -> tagIsInvalid(), array('class' => FALSE, 'wrap' => 'p class="text-error"')));
		}
		echo $this -> Form -> textarea('resumen', array('class' => 'span6', 'rows' => '13', 'placeholder' => __('Resumen')));
		?>
	</div>
</div>
<div class="row">
	<?php
	echo $this -> Form -> input('Seccion', array('div' => 'span4', 'multiple' => 'checkbox', 'label' => array('class' => 'label')));
	echo $this -> Form -> input('Area', array('div' => 'span4', 'multiple' => 'checkbox', 'label' => array('class' => 'label')));
	echo $this -> Form -> input('Subarea', array('div' => 'span4', 'multiple' => 'checkbox', 'label' => array('class' => 'label')));
?>
</div>
<?php echo $this -> Form -> submit(__('Submit'), array('class' => 'btn btn-success btn-large btn-block')); ?>
<?php echo $this -> Form -> end(); ?>
<?php /*
	 <div class="actions">
	 <h3><?php echo __('Actions'); ?><
	 /h3>
	 <ul>

	 <li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?><
	 /li>
	 <li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?>
	 </li>
	 <li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?>
	 </li>
	 </ul>
	 </div>

	 */
 ?>