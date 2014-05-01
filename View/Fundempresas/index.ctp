<div class="fundempresas index">
	<h2><?php echo __('Fundempresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fundempresas as $fundempresa): ?>
	<tr>
		<td><?php echo h($fundempresa['Fundempresa']['id']); ?>&nbsp;</td>
		<td><?php echo h($fundempresa['Fundempresa']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fundempresa['Fundempresa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fundempresa['Fundempresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fundempresa['Fundempresa']['id']), null, __('Are you sure you want to delete # %s?', $fundempresa['Fundempresa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fundempresa'), array('action' => 'add')); ?></li>
	</ul>
</div>
