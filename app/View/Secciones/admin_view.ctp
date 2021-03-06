<div class="secciones view">
<h2><?php echo h($seccion['Seccion']['nombre']); ?></h2>
	<dl>
		<dd>
			<?php echo h($seccion['Seccion']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccion'), array('action' => 'edit', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seccion'), array('action' => 'delete', $seccion['Seccion']['id']), null, __('Are you sure you want to delete # %s?', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Areas'); ?></h3>
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
			<td><?php echo $area['nombre']; ?></td>
			<td><?php echo $area['titulo']; ?></td>
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
	<h3><?php echo __('Related Multimedia'); ?></h3>
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
			<td><?php echo $multimedia['nombre']; ?></td>
			<td><?php echo $multimedia['titulo']; ?></td>
			<td><?php echo $multimedia['descripcion']; ?></td>
			<td><?php echo $multimedia['url']; ?></td>
			<td><?php echo $multimedia['multimedia_categoria_id']; ?></td>
			<td><?php echo $multimedia['created']; ?></td>
			<td><?php echo $multimedia['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'multimedia', 'action' => 'view', $multimedia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'multimedia', 'action' => 'edit', $multimedia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'multimedia', 'action' => 'delete', $multimedia['id']), null, __('Are you sure you want to delete # %s?', $multimedia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
