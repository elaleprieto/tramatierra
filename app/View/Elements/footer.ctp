<div id="plantaLogo"><?php echo $this->Html->link($this->Html->image('planta.png'), array('controller'=>'multimedia', 'action'=>'agregar'), array('escape'=>FALSE)) ?></div>
<footer class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			<div id="redes" class="span6">
				<div id="redesIcons" class="row-fluid">
					<div class="offset2 span2"><?php echo $this->Html->image('footer/agenda.png', array(
																		'url'=>'http://agendasantafe.org.ar')) ?></div>
					<div class="offset1 span2"><?php echo $this->Html->image('footer/conoSur.png', array(
																		'url'=>'http://conosursustentable.org'))?></div>
					<div class="offset1 span2"><?php echo $this->Html->image('footer/logoPAS.png', array(
																		'url'=>'http://conosursustentable.org/argentina-sustentable/')) ?></div>
				</div>
			</div>
			<div class="span6">
				<div class="row-fluid">
					<div class="offset8 span2 socialIconsBox">
						<?php echo $this->Html->image('footer/facebook.png', array('class'=>'socialIcons'
																,'url'=>'https://www.facebook.com/tramatierra.biocolectivo?fref=ts')) ?>
						<?php echo $this->Html->image('footer/twitter.png', array('class'=>'socialIcons'
																,'url'=>'https://twitter.com/tramatierra')) ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="offset1 span9">
						<p><strong>@ 2013 Tramatierra.</strong></p>
						<br />
						<p>
							Usted es libre de: <br />
							copiar, distribuir, exhibir, y ejecutar la obra y hacer obras derivadas Bajo las siguientes condiciones: Atribución / No comercial / Compartir igual / Usted debe atribuir la obra en la forma especificada por el autor o el licenciante.
						</p>
						<br />
						<p>
							TramaTierra, Biocolectivo por la Sustentabilidad <br />
							Pers. Jur. Nº 723/11
						</p>
					</div>
				</div>	
			</div>
		</div>
		<div class="row-fluid">
			<div id="lineaFinal" class="offset1 span10">&nbsp;</div>
		</div>
	</div>
</footer>