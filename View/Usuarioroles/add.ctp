<div class="usuarioroles form">
<?php echo $this->Form->create('Usuariorole'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuariorole'); ?></legend>
	<?php
		echo $this->Form->input('rols_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarioroles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rols'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
