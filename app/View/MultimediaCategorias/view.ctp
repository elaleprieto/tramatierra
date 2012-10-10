<div class="multimediaCategorias view">
<h2><?php  echo __('Multimedia Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multimediaCategoria['MultimediaCategoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($multimediaCategoria['MultimediaCategoria']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($multimediaCategoria['MultimediaCategoria']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($multimediaCategoria['MultimediaCategoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($multimediaCategoria['MultimediaCategoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Multimedia Categoria'), array('action' => 'edit', $multimediaCategoria['MultimediaCategoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Multimedia Categoria'), array('action' => 'delete', $multimediaCategoria['MultimediaCategoria']['id']), null, __('Are you sure you want to delete # %s?', $multimediaCategoria['MultimediaCategoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Multimedia'); ?></h3>
	<?php if (!empty($multimediaCategoria['Multimedia'])): ?>
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
		foreach ($multimediaCategoria['Multimedia'] as $multimedia): ?>
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
