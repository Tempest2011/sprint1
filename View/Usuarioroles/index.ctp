<div class="usuarioroles index">
	<h2><?php echo __('Usuarioroles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rols_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuarioroles as $usuariorole): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($usuariorole['Users']['id'], array('controller' => 'users', 'action' => 'view', $usuariorole['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usuariorole['Rols']['id'], array('controller' => 'rols', 'action' => 'view', $usuariorole['Rols']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuariorole['Usuariorole']['users_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuariorole['Usuariorole']['users_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuariorole['Usuariorole']['users_id']), null, __('Are you sure you want to delete # %s?', $usuariorole['Usuariorole']['users_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuariorole'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rols'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
