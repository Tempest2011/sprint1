<div class="docentes view">
<h2><?php echo __('Docente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoP'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['apellidoP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoM'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['apellidoM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['user_id']); ?>
			&nbsp;
		</dd>
		<?php echo $this->Upload->view('Docente',$docente['Docente']['id']); ?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente'), array('action' => 'edit', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente'), array('action' => 'delete', $docente['Docente']['id']), null, __('Are you sure you want to delete # %s?', $docente['Docente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
