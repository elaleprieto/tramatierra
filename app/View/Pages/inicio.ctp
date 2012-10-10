<?php $descripcion = 'Somos una organización social conformada por personas motivadas en aportar, desde una perspectiva crítica que integre las dimensiones ecológica, social, económica y política, a la construcción de sociedades sustentables.'; ?>
<?php $this -> assign('descripcion-general', h($descripcion)); ?>
<?php $this -> assign('botones', '<a class="btn btn-primary btn-large">Leer más &raquo;</a>'); ?>

<!-- Example row of columns -->
<div class="row">
	<div class="span6">
		<h2>Fotos</h2>
		<p>
			<?= $this -> Html -> image('http://lorempixel.com/450/200/nature?'.time()); ?>
		</p>
		<p>
			<a class="btn" href="#">Ver &raquo;</a>
		</p>
	</div>
	<div class="span6">
		<h2>Videos</h2>
		<p>
			<?= $this -> Html -> image('http://lorempixel.com/450/200/technics?'.time()); ?>
		</p>
		<p>
			<a class="btn" href="#">Ver &raquo;</a>
		</p>
	</div>
	<div class="span6">
		<h2>Audios</h2>
		<p>
			<?= $this -> Html -> image('http://lorempixel.com/450/200/nightlife?'.time()); ?>
		</p>
		<p>
			<a class="btn" href="#">Ver &raquo;</a>
		</p>
	</div>
	<div class="span6">
		<h2>Publicaciones</h2>
		<p>
			<?= $this -> Html -> image('http://lorempixel.com/450/200/people?'.time()); ?>
		</p>
		<p>
			<a class="btn" href="#">Ver &raquo;</a>
		</p>
	</div>
</div>