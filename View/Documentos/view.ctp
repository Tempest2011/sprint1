<div class="documentos view">
<h2><?php echo __('Documento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DocumentoN'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['documentoN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DocumentoPath'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['documentoPath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documento['User']['login'], array('controller' => 'users', 'action' => 'view', $documento['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Documento'), array('action' => 'edit', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Documento'), array('action' => 'delete', $documento['Documento']['id']), null, __('Are you sure you want to delete # %s?', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
