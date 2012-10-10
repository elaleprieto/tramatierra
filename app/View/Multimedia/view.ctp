<div class="multimedia view">
<h2><?php  echo __('Multimedia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Archivo'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['archivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multimedia Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($multimedia['MultimediaCategoria']['title'], array('controller' => 'multimedia_categorias', 'action' => 'view', $multimedia['MultimediaCategoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Multimedia'), array('action' => 'edit', $multimedia['Multimedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Multimedia'), array('action' => 'delete', $multimedia['Multimedia']['id']), null, __('Are you sure you want to delete # %s?', $multimedia['Multimedia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia Categorias'), array('controller' => 'multimedia_categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia Categoria'), array('controller' => 'multimedia_categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subareas'), array('controller' => 'subareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subarea'), array('controller' => 'subareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Areas'); ?></h3>
	<?php if (!empty($multimedia['Area'])): ?>
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
		foreach ($multimedia['Area'] as $area): ?>
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
	<?php if (!empty($multimedia['Seccion'])): ?>
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
		foreach ($multimedia['Seccion'] as $seccion): ?>
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
	<?php if (!empty($multimedia['Subarea'])): ?>
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
		foreach ($multimedia['Subarea'] as $subarea): ?>
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
