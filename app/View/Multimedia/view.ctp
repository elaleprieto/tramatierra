<div class="multimedia view">
<h2><?php  echo __('Multimedia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($multimedia['Multimedia']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multimedia Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($multimedia['MultimediaCategoria']['id'], array('controller' => 'multimedia_categorias', 'action' => 'view', $multimedia['MultimediaCategoria']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Secciones'); ?></h3>
	<?php if (!empty($multimedia['Seccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
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
			<td><?php echo $seccion['nombre']; ?></td>
			<td><?php echo $seccion['titulo']; ?></td>
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
