<div class="usuariorols view">
<h2><?php echo __('Usuariorol'); ?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuariorol['User']['login'], array('controller' => 'users', 'action' => 'view', $usuariorol['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rols'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuariorol['Rols']['id'], array('controller' => 'rols', 'action' => 'view', $usuariorol['Rols']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuariorol'), array('action' => 'edit', $usuariorol['Usuariorol']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuariorol'), array('action' => 'delete', $usuariorol['Usuariorol']['user_id']), null, __('Are you sure you want to delete # %s?', $usuariorol['Usuariorol']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuariorols'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuariorol'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rols'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
