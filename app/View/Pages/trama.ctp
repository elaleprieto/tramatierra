<?php $descripcion = 'Somos una organización social conformada por personas motivadas en aportar, desde una perspectiva crítica que integre las dimensiones ecológica, social, económica y política, a la construcción de sociedades sustentables.'; ?>
<?php $this -> assign('descripcion-general', h($descripcion)); ?>
<?php $this -> assign('botones', '<a class="btn btn-primary btn-large">Leer más &raquo;</a>'); ?>

<div class="row-fluid">
	<div class="span5 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				fotos
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/232/173/nature?'.time()); ?></div>
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
	<div class="offset1 span4 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				publicaciones
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/115/173/nature?'.time()); ?></div>
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
				videos
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/232/173/nature?'.time()); ?></div>
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
	<div class="offset1 span4 categoriaTitulo">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				audios
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/173/173/nature?'.time()); ?></div>
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