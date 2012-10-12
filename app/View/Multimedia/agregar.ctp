<?php
echo $this -> Html -> css('multimedias/agregar');
?>
<div class="hero-unit">
	<h1>Multimedia</h1>
</div>
<?php echo $this -> Form -> create('Multimedia', array('enctype' => 'multipart/form-data')); ?>
	<div class="row">
		<div class="span6">
			<?php
			// echo $this -> Form -> input('name', array('class' => 'span6', 'label' => FALSE, 'placeholder' => __('Name')));
			echo $this -> Form -> input('title', array('class' => 'span6', 'label' => FALSE, 'placeholder' => __('Title')));
			echo $this -> Form -> input('archivo', array('class' => 'span6', 'type' => 'file', 'label' => FALSE, 'placeholder' => __('Archivo')));
			// echo $this -> Form -> input('url', array('class' => 'span6', 'label' => FALSE, 'placeholder' => __('URL')));
			
			?>
		</div>
		<div class="span6">
			<?php
			echo $this -> Form -> input('descripcion', array('class' => 'span6', 'label' => FALSE, 'placeholder' => __('Descripción')));
			?>
		</div>
	</div>
	<div class="row">
		<?php
		// echo $this -> Form -> input('name', array('div' => 'span4', 'label' => FALSE, 'placeholder' => __('Name')));
		// echo $this -> Form -> input('title', array('div' => 'span4', 'label' => FALSE, 'placeholder' => __('Title')));
		// echo $this -> Form -> input('descripcion', array('div' => 'span4', 'label' => FALSE, 'placeholder' => __('Descripción')));
		// echo $this -> Form -> input('archivo', array('div' => 'span4', 'type' => 'file', 'label' => FALSE, 'placeholder' => __('Archivo')));
		// echo $this -> Form -> input('url', array('div' => 'span4', 'label' => FALSE, 'placeholder' => __('URL')));
		// echo $this -> Form -> input('multimedia_categoria_id', array('div' => 'span4'));
		echo $this -> Form -> input('multimedia_categoria_id', array('div' => 'span3', 'class' => 'span3', 'label' => array('class' => 'label', 'text' => 'Categoría')));
		echo $this -> Form -> input('Seccion', array('div' => 'span3', 'multiple'=>'checkbox', 'label' => array('class' => 'label')));
		echo $this -> Form -> input('Area', array('div' => 'span3', 'multiple'=>'checkbox', 'label' => array('class' => 'label')));
		echo $this -> Form -> input('Subarea', array('div' => 'span3', 'multiple'=>'checkbox', 'label' => array('class' => 'label')));
		?>
	</div>
<?php echo $this -> Form -> submit(__('Submit'), array('class' => 'btn btn-success btn-large btn-block')); ?>
<?php echo $this -> Form -> end(); ?>
<?php /*
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this -> Html -> link(__('List Multimedia'), array('action' => 'index')); ?></li>
		<li><?php echo $this -> Html -> link(__('List Multimedia Categorias'), array('controller' => 'multimedia_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this -> Html -> link(__('New Multimedia Categoria'), array('controller' => 'multimedia_categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this -> Html -> link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this -> Html -> link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
*/ ?>