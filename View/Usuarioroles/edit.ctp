<div class="usuarioroles form">
<?php echo $this->Form->create('Usuariorole'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuariorole'); ?></legend>
	<?php
		echo $this->Form->input('users_id');
		echo $this->Form->input('rols_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuariorole.users_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Usuariorole.users_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarioroles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rols'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
