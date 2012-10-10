<div class="areasMultimedia view">
<h2><?php  echo __('Areas Multimedia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($areasMultimedia['AreasMultimedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($areasMultimedia['Area']['title'], array('controller' => 'areas', 'action' => 'view', $areasMultimedia['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multimedia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($areasMultimedia['Multimedia']['title'], array('controller' => 'multimedia', 'action' => 'view', $areasMultimedia['Multimedia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($areasMultimedia['AreasMultimedia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($areasMultimedia['AreasMultimedia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Areas Multimedia'), array('action' => 'edit', $areasMultimedia['AreasMultimedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Areas Multimedia'), array('action' => 'delete', $areasMultimedia['AreasMultimedia']['id']), null, __('Are you sure you want to delete # %s?', $areasMultimedia['AreasMultimedia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas Multimedia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Areas Multimedia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multimedia'), array('controller' => 'multimedia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multimedia'), array('controller' => 'multimedia', 'action' => 'add')); ?> </li>
	</ul>
</div>
