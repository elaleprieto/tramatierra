<?php $descripcion = 'Somos una organización social conformada por personas motivadas en aportar, desde una perspectiva crítica que integre las dimensiones ecológica, social, económica y política, a la construcción de sociedades sustentables.'; ?>
<?php $this -> assign('descripcion-general', h($descripcion)); ?>
<?php $this -> assign('botones', '<a class="btn btn-primary btn-large">Leer más &raquo;</a>'); ?>

<div class="row-fluid">
	<div class="span5 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				<!--FOTOS-->
				<!-- prueba-->
				<?php echo $this->Html->link('FOTOS', array(
												'controller' => 'Multimedia', 
												'action' => 'listarTodos', 1)); ?>
				<!-- fin prueba-->
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/232/173/nature/'); ?></div>
			<div class="row-fluid">
				<div class="span12 articuloTitulo">
					<div class="row-fluid">
						<div class="span6">
							<span>Solar & LibreBus 2012</span>
						</div>
						<div class="span6 categoriaArea">
							<?= $this -> Html -> image('area/etiqueta/culturaLibre.png'); ?>
							<?= $this -> Html -> image('area/etiqueta/energia.png'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="offset1 span5 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				<!--PUBLICACIONES-->
				<!-- prueba -->
						<?php echo $this->Html->link('PUBLICACIONES', array(
												'controller' => 'Multimedia', 
												'action' => 'listarTodos', 4)); ?>
				<!-- prueba -->
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/115/173/cats/'); ?></div>
			<div class="row-fluid">
				<div class="span12 articuloTitulo">
					<div class="row-fluid">
						<div class="span6">
							<span>Reciclado de Agua</span>
						</div>
						<div class="span6 categoriaArea">
							<?= $this -> Html -> image('area/etiqueta/agua.png'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span5 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				<!-- VIDEOS -->
				<!-- prueba -->
				<?php echo $this->Html->link('VIDEOS', array(
										'controller' => 'Multimedia', 
										'action' => 'listarTodos', 2)); ?>
				<!-- prueba -->
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/232/173/food/'); ?></div>
			<div class="row-fluid">
				<div class="span12 articuloTitulo">
					<div class="row-fluid">
						<div class="span6">
							<span>Solar 2012</span>
						</div>
						<div class="span6 categoriaArea">
							<?= $this -> Html -> image('area/etiqueta/energia.png'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="offset1 span5 categoriaTitulo">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				<!--AUDIOS-->
				<!-- prueba -->
				<?php echo $this->Html->link('AUDIOS', array(										
										'controller' => 'Multimedia', 
										'action' => 'listarTodos', 3)); ?>
				<!-- prueba -->
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/173/173/city/'); ?></div>
			<div class="row-fluid">
				<div class="span12 articuloTitulo">
					<div class="row-fluid">
						<div class="span6">
							<span>Reciclado de Agua</span>
						</div>
						<div class="span6 categoriaArea">
							<?= $this -> Html -> image('area/etiqueta/agua.png'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>