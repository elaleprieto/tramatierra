<div class="multimedia form">
<?php echo $this -> Form -> create('Multimedia', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Multimedia'); ?></legend>
	<?php

	echo $this -> Form -> input('name');
	echo $this -> Form -> input('title');
	echo $this -> Form -> input('descripcion');
	echo $this -> Form -> input('archivo', array('type' => 'file', 'label' => __('Subir archivo')));
	echo $this -> Form -> input('url');
	echo $this -> Form -> input('multimedia_categoria_id');
	echo $this -> Form -> input('Seccion', array('multiple'=>'checkbox'));
	echo $this -> Form -> input('Area', array('multiple'=>'checkbox'));
	echo $this -> Form -> input('Subarea', array('multiple'=>'checkbox'));
	?>
	</fieldset>
<?php echo $this -> Form -> end(__('Submit')); ?>
</div>
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
