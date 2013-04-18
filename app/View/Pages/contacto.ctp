<?php echo $this->Html->css('contacto', '', array('inline'=>FALSE)) ?>

<div class="row-fluid">
	<div class="separator span10"></div>
</div>
<div class="row-fluid">
	<div class="email span12">
		<span class="socialName">EMAIL:</span> <a class="socialAddress" href="mailto:contacto@tramatierra.org.ar">contacto@tramatierra.org.ar</a>
	</div>
</div>
<div class="row-fluid">
	<div class="facebook span12">
		<span class="socialName">FACEBOOK:</span> <a class="socialAddress" href="https://www.facebook.com/tramatierra.biocolectivo">/tramatierra.biocolectivo</a>
	</div>
</div>
<div class="row-fluid">
	<div class="span12 twitter">
		<span class="socialName">TWITTER:</span> <a class="socialAddress" href="https://twitter.com/tramatierra">@tramatierra</a>
	</div>
</div>
<div class="row-fluid">
	<div class="separator span8"></div>
</div>
<div class="row-fluid">
	<div class="span1">
		<?php echo $this->Html->image('contacto2.png') ?>
	</div>
	<div class="span11">
		<form>
			<div class="row-fluid">
				<div class="span8">
					<label>NOMBRE</label>
					<input class="span12" type="text" />
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<label>ASUNTO</label>
					<input class="span12" type="text" />
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<label>MENSAJE</label>
					<textarea class="span12" rows="6"></textarea>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8" id="submitDiv">
					<button id="submitButton" type="submit">ENVIAR</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="separator span10"></div>
</div>