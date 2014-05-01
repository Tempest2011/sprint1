<div class="docentes form">
<?php echo $this->Form->create('Docente'); ?>
	<fieldset>
		<legend><?php echo __('Add Docente'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidoP');
		echo $this->Form->input('apellidoM');
		echo $this->Form->input('user_id');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
