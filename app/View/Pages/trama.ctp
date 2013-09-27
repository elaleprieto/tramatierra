<?php $descripcion = 'Somos una organización social conformada por personas motivadas en aportar, desde una perspectiva crítica que integre las dimensiones ecológica, social, económica y política, a la construcción de sociedades sustentables.'; ?>
<?php $this -> assign('descripcion-general', h($descripcion)); ?>
<?php $this -> assign('botones', '<a class="btn btn-primary btn-large">Leer más &raquo;</a>'); ?>

<div class="row-fluid">
	<div class="span5 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				FOTOS
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
				PUBLICACIONES
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
				VIDEOS
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
				AUDIOS
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