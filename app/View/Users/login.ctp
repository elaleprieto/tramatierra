<?php 
echo $this->Html->css('login', '', array('inline'=>FALSE));
$this->assign('sectionTitle', 'INGRESO');
?>

<div class="users form">
	<?php echo $this->Form->create('User') ?>
		<div class="row-fluid">
			<div class="span6">
			    <?php echo $this->Form->input('username', array('class'=>'span12', 'label'=>array('class'=>'title', 'text'=>'Usuario'))) ?>
		    </div>
			<div class="span6">
			    <?php echo $this->Form->input('password', array('class'=>'span12', 'label'=>array('class'=>'title', 'text'=>'Contraseña'))) ?>
		    </div>
	    </div>
	    <div class="row-fluid">
			<div class="span12" id="submitDiv">
				<button id="submitButton" type="submit">ENVIAR</button>
			</div>
		</div>
	<?php echo $this->Form->end() ?>
</div>