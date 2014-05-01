<div class="fundempresas view">
<h2><?php echo __('Fundempresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fundempresa['Fundempresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($fundempresa['Fundempresa']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fundempresa'), array('action' => 'edit', $fundempresa['Fundempresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fundempresa'), array('action' => 'delete', $fundempresa['Fundempresa']['id']), null, __('Are you sure you want to delete # %s?', $fundempresa['Fundempresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fundempresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fundempresa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
