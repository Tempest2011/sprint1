<div class="usuarioroles view">
<h2><?php echo __('Usuariorole'); ?></h2>
	<dl>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuariorole['Users']['id'], array('controller' => 'users', 'action' => 'view', $usuariorole['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rols'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuariorole['Rols']['id'], array('controller' => 'rols', 'action' => 'view', $usuariorole['Rols']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuariorole'), array('action' => 'edit', $usuariorole['Usuariorole']['users_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuariorole'), array('action' => 'delete', $usuariorole['Usuariorole']['users_id']), null, __('Are you sure you want to delete # %s?', $usuariorole['Usuariorole']['users_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarioroles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuariorole'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rols'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
