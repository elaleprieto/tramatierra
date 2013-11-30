<?php
echo $this->Html->css('multimedias/agregar', '', array('inline'=>FALSE));
$this->assign('sectionTitle', 'NUEVA MULTIMEDIA');
?>
<?php echo $this->Form->create('Multimedia', array('enctype'=>'multipart/form-data')) ?>
	<div class="row-fluid">
		<div class="span6">
			<div class="row-fluid">
				<div class="span12">
					<?php
					if ($this->Form->isFieldError('title')) {
						echo $this->Form->error('title', $this->Form->tagIsInvalid(), array('class'=>FALSE, 'wrap'=>'p class="text-error"'));
					}
					echo $this->Form->input('title', array('class'=>'span12', 'label'=>array('class'=>'title', 'text'=>'TÍTULO')));
					?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<?php
					if ($this->Form->isFieldError('imagen')) {
						echo $this->Form->error('imagen', $this->Form->tagIsInvalid(), array('class'=>FALSE, 'wrap'=>'p class="text-error"'));
					}
					echo $this->Form->input('imagen', array('class'=>'span12', 'type'=>'file', 'label'=>array('class'=>'title', 'text'=>'IMAGEN')));
					?>
				</div>
				
			</div>
			<div class="row-fluid">
				<div class="span12">
					<?php
					if ($this->Form->isFieldError('archivo')) {
						echo $this->Form->error('archivo', $this->Form->tagIsInvalid(), array('class'=>FALSE, 'wrap'=>'p class="text-error"'));
					}
					echo $this->Form->input('archivo', array('class'=>'span12', 'type'=>'file', 'label'=>array('class'=>'title', 'text'=>'ARCHIVO')));
					?>
				</div>
			</div>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('resumen', array('class'=>'span12', 'label'=>array('class'=>'title', 'text'=>'RESUMEN (300 caracteres)'))) ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('descripcion', array('class'=>'span12', 'label'=>array('class'=>'title', 'text'=>'DESCRIPCIÓN'))) ?>
		</div>
	</div>
	<div class="row-fluid">&nbsp;</div>
	<div class="row-fluid">
		<?php
		echo $this->Form->input('multimedia_categoria_id', array('class'=>'span12', 'div'=>'span4', 'label'=>array('class'=>'title', 'text'=>'CATEGORÍA')));
		echo $this->Form->input('Seccion', array('div'=>'span4', 'multiple'=>'checkbox', 'label'=>array('class'=>'title', 'text'=>'SECCIÓN')));
		?>
		<div class="span4">
			<div class="row-fluid">
				<?php echo $this->Form->input('Area', array('div'=>'span12', 'multiple'=>'checkbox', 'label'=>array('class'=>'title', 'text'=>'ÁREA'))) ?>
			</div>
			<div class="row-fluid">&nbsp;</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('Subarea', array('div'=>'span12', 'multiple'=>'checkbox', 'label'=>array('class'=>'title', 'text'=>'SUBÁREA'))) ?>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12" id="submitDiv">
			<button id="formButton" type="submit">ENVIAR</button>
		</div>
	</div>
<?php echo $this->Form->end() ?>
