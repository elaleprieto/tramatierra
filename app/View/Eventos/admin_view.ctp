<div class="eventos view">
<h2><?php  echo __('Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['hora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumen'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['resumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento'), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), null, __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Noticias'); ?></h3>
	<?php if (!empty($evento['Noticia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Noticia'] as $noticia): ?>
		<tr>
			<td><?php echo $noticia['id']; ?></td>
			<td><?php echo $noticia['name']; ?></td>
			<td><?php echo $noticia['title']; ?></td>
			<td><?php echo $noticia['descripcion']; ?></td>
			<td><?php echo $noticia['evento_id']; ?></td>
			<td><?php echo $noticia['created']; ?></td>
			<td><?php echo $noticia['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'noticias', 'action' => 'view', $noticia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'noticias', 'action' => 'edit', $noticia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'noticias', 'action' => 'delete', $noticia['id']), null, __('Are you sure you want to delete # %s?', $noticia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Areas'); ?></h3>
	<?php if (!empty($evento['Area'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Area'] as $area): ?>
		<tr>
			<td><?php echo $area['id']; ?></td>
			<td><?php echo $area['name']; ?></td>
			<td><?php echo $area['title']; ?></td>
			<td><?php echo $area['descripcion']; ?></td>
			<td><?php echo $area['seccion_id']; ?></td>
			<td><?php echo $area['created']; ?></td>
			<td><?php echo $area['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'areas', 'action' => 'view', $area['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'areas', 'action' => 'edit', $area['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'areas', 'action' => 'delete', $area['id']), null, __('Are you sure you want to delete # %s?', $area['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Secciones'); ?></h3>
	<?php if (!empty($evento['Seccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Banner'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Seccion'] as $seccion): ?>
		<tr>
			<td><?php echo $seccion['id']; ?></td>
			<td><?php echo $seccion['name']; ?></td>
			<td><?php echo $seccion['title']; ?></td>
			<td><?php echo $seccion['banner']; ?></td>
			<td><?php echo $seccion['descripcion']; ?></td>
			<td><?php echo $seccion['created']; ?></td>
			<td><?php echo $seccion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'secciones', 'action' => 'view', $seccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'secciones', 'action' => 'edit', $seccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'secciones', 'action' => 'delete', $seccion['id']), null, __('Are you sure you want to delete # %s?', $seccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subareas'); ?></h3>
	<?php if (!empty($evento['Subarea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Subarea'] as $subarea): ?>
		<tr>
			<td><?php echo $subarea['id']; ?></td>
			<td><?php echo $subarea['name']; ?></td>
			<td><?php echo $subarea['title']; ?></td>
			<td><?php echo $subarea['descripcion']; ?></td>
			<td><?php echo $subarea['area_id']; ?></td>
			<td><?php echo $subarea['created']; ?></td>
			<td><?php echo $subarea['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subareas', 'action' => 'view', $subarea['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subareas', 'action' => 'edit', $subarea['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subareas', 'action' => 'delete', $subarea['id']), null, __('Are you sure you want to delete # %s?', $subarea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
