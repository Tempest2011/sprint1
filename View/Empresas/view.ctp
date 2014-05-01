<div class="empresas view">
<h2><?php echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombrelargo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombrelargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombrecorto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombrecorto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LogoN'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['logoN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LogoP'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['logoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['User']['login'], array('controller' => 'users', 'action' => 'view', $empresa['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
