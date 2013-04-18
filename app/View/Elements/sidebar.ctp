<div class="row-fluid">
	<div class="span4">
		<div id='sidebarQuienesSomos' class="sidebar sidebarButton" data-onButton="#sidebarOnQuienesSomos"></div>
	</div>
	<div class="span8">
		<div id='sidebarOnQuienesSomos' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->Html->link('<div id="sidebarGestionResiduos" class="sidebar sidebarButton" data-onButton="#sidebarOnGestionResiduos"></div>', 
			array('controller'=>'secciones', 'action'=>'view', 6), array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnGestionResiduos' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->Html->link('<div id="sidebarAgua" class="sidebar sidebarButton" data-onButton="#sidebarOnAgua"></div>', 
			array('controller'=>'secciones', 'action'=>'view', 2), array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnAgua' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->Html->link('<div id="sidebarSoberaniaAlimentaria" class="sidebar sidebarButton" data-onButton="#sidebarOnSoberaniaAlimentaria"></div>', 
			array('controller'=>'secciones', 'action'=>'view', 7), array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnSoberaniaAlimentaria' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->Html->link('<div id="sidebarCulturaLibre" class="sidebar sidebarButton" data-onButton="#sidebarOnCulturaLibre"></div>', 
			array('controller'=>'secciones', 'action'=>'view', 4), array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnCulturaLibre' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->Html->link('<div id="sidebarEnergia" class="sidebar sidebarButton" data-onButton="#sidebarOnEnergia"></div>', 
			array('controller'=>'secciones', 'action'=>'view', 3), array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnEnergia' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<?php echo $this->Html->link('<div id="sidebarGenero" class="sidebar sidebarButton" data-onButton="#sidebarOnGenero"></div>', 
			array('controller'=>'secciones', 'action'=>'view', 5), array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnGenero' class="sidebar sidebarOnButton"></div>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<!-- <div id='sidebarContacto' class="sidebar sidebarButton" data-onButton="#sidebarOnContacto"></div> -->
		<?php echo $this->Html->link('<div id="sidebarContacto" class="sidebar sidebarButton" data-onButton="#sidebarOnContacto"></div>', 
			'/contacto', array('escape'=>FALSE)) ?>
	</div>
	<div class="span8">
		<div id='sidebarOnContacto' class="sidebar sidebarOnButton"></div>
	</div>
</div>
