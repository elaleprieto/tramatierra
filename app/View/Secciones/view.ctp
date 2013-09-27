<?php
// debug($seccion);
echo $this->Html->css('secciones/view', '', array('inline'=>FALSE));
$this -> set('title_for_layout', $seccion['Seccion']['title']);

$botones = '';
if (!empty($seccion['Area'])) :
	$botones = ' | ';
	foreach ($seccion['Area'] as $area) :
		// $botones .= '<span>' . $this -> Html -> link($area['title'] . ' &raquo;', array('controller' => 'areas', 'action' => 'view', $area['id']), array('class' => 'btn btn-primary btn-large', 'escape' => FALSE)) . '</span>';
		// $botones .= $this->Html->link(mb_strtoupper($area['title'], 'UTF-8'), array('controller' => 'areas', 'action' => 'view', $area['id']), array('class' => 'areaButton', 'escape' => FALSE));
		$botones .= $this->Html->link(mb_strtoupper($area['title'], 'UTF-8'), '#', array('class' => 'areaButton', 'escape' => FALSE));
		$botones .= ' | ';
	endforeach;
endif;
$this -> assign('banner', h($seccion['Seccion']['banner']));
$this -> assign('titulo', mb_strtoupper(h($seccion['Seccion']['title']), 'UTF-8'));
//$this -> assign('descripcion-general', '<p>' . h($seccion['Seccion']['descripcion']) . '</p>');
$this -> assign('descripcion-general', '<p>' . nl2br(h($seccion['Seccion']['descripcion'])) . '</p>');
$this -> assign('botones', $botones);
?>
<div class="row-fluid">
	<div class="span11 categoria">
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
</div>
<div class="row-fluid">
	<div class="span11 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				VIDEOS
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/232/173/cats/'); ?></div>
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
</div>
<div class="row-fluid">
	<div class="span6 categoria">
		<div class="row-fluid categoriaTitulo">
			<div class="span5 categoriaNombre">
				PUBLICACIONES
			</div>
			<div class="span7 categoriaLinea"></div>
		</div>
		<div class="row-fluid">
			<div class="span8"><?= $this -> Html -> image('http://lorempixel.com/115/173/food/'); ?></div>
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
	<div class="offset1 span4 categoriaTitulo">
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



<!-- Diseño viejo -->
<!-- <div class="secciones view"> -->
	<!-- Example row of columns -->
	<!-- <div class="row">
		<div class="span6">
			<h2>Fotos</h2>
			<p class="fotos">
				<?php
				if (isset($seccion['Multimedia']) && sizeof($seccion['Multimedia']) > 0) {
					$multimedia = $seccion['Multimedia'][0];
					$imagen = $multimedia['archivo'] ? $this -> Html -> url('/mm/', true) . $multimedia['archivo'] : ($multimedia['url'] ? $multimedia['url'] : FALSE);
				}
				// echo $this -> Html -> image(isset($imagen) && $imagen ? $imagen : 'http://lorempixel.com/450/200/nature?' . time());
				?>
				<img src="<?php //echo isset($imagen) && $imagen ? $imagen : 'http://lorempixel.com/450/200/nature?' . time() ?>" />
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
		<div class="span6">
			<h2>Videos</h2>
			<p>
				<?php //echo  $this -> Html -> image('http://lorempixel.com/450/200/technics?' . time()); ?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
		<div class="span6">
			<h2>Audios</h2>
			<p>
				<?php //echo  $this -> Html -> image('http://lorempixel.com/450/200/nightlife?' . time()); ?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
		<div class="span6">
			<h2>Publicaciones</h2>
			<p>
				<?php //echo  $this -> Html -> image('http://lorempixel.com/450/200/people?' . time()); ?>
			</p>
			<p>
				<a class="btn" href="#">Ver &raquo;</a>
			</p>
		</div>
	</div>
</div> -->
<?php /*
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this -> Html -> link(__('Edit Seccion'), array('action' => 'edit', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this -> Form -> postLink(__('Delete Seccion'), array('action' => 'delete', $seccion['Seccion']['id']), null, __('Are you sure you want to delete # %s?', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this -> Html -> link(__('List Secciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this -> Html -> link(__('New Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this -> Html -> link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this -> Html -> link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this -> Html -> link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this -> Html -> link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'cargar')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Areas'); ?></h3>
<!--
	<?php if (!empty($seccion['Area'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($seccion['Area'] as $area): ?>
		<tr>
			<td><?php echo $area['id']; ?></td>
			<td><?php echo $area['name']; ?></td>
			<td><?php echo $area['title']; ?></td>
			<td><?php echo $area['descripcion']; ?></td>
			<td><?php echo $area['seccion_id']; ?></td>
			<td><?php echo $area['created']; ?></td>
			<td><?php echo $area['modified']; ?></td>
			<td class="actions">
				<?php echo $this -> Html -> link(__('View'), array('controller' => 'areas', 'action' => 'view', $area['id'])); ?>
				<?php echo $this -> Html -> link(__('Edit'), array('controller' => 'areas', 'action' => 'edit', $area['id'])); ?>
				<?php echo $this -> Form -> postLink(__('Delete'), array('controller' => 'areas', 'action' => 'delete', $area['id']), null, __('Are you sure you want to delete # %s?', $area['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
-->
	<div class="actions">
		<ul>
			<li><?php echo $this -> Html -> link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Multimedia'); ?></h3>
<!--
	<?php if (!empty($seccion['Multimedia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Multimedia Categoria Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($seccion['Multimedia'] as $multimedia): ?>
		<tr>
			<td><?php echo $multimedia['id']; ?></td>
			<td><?php echo $multimedia['name']; ?></td>
			<td><?php echo $multimedia['title']; ?></td>
			<td><?php echo $multimedia['descripcion']; ?></td>
			<td><?php echo $multimedia['url']; ?></td>
			<td><?php echo $multimedia['multimedia_categoria_id']; ?></td>
			<td><?php echo $multimedia['created']; ?></td>
			<td><?php echo $multimedia['modified']; ?></td>
			<td class="actions">
				<?php echo $this -> Html -> link(__('View'), array('controller' => 'multimedia', 'action' => 'view', $multimedia['id'])); ?>
				<?php echo $this -> Html -> link(__('Edit'), array('controller' => 'multimedia', 'action' => 'edit', $multimedia['id'])); ?>
				<?php echo $this -> Form -> postLink(__('Delete'), array('controller' => 'multimedia', 'action' => 'delete', $multimedia['id']), null, __('Are you sure you want to delete # %s?', $multimedia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
-->
	<div class="actions">
		<ul>
			<li><?php echo $this -> Html -> link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'cargar')); ?> </li>
		</ul>
	</div>
</div>
*/ ?>