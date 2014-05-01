<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Usuariorols'), array('controller' => 'usuariorols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuariorol'), array('controller' => 'usuariorols', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Detallesesions'); ?></h3>
	<?php if (!empty($user['Detallesesion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fechainicio'); ?></th>
		<th><?php echo __('Fechafin'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Detallesesion'] as $detallesesion): ?>
		<tr>
			<td><?php echo $detallesesion['id']; ?></td>
			<td><?php echo $detallesesion['fechainicio']; ?></td>
			<td><?php echo $detallesesion['fechafin']; ?></td>
			<td><?php echo $detallesesion['pid']; ?></td>
			<td><?php echo $detallesesion['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'detallesesions', 'action' => 'view', $detallesesion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'detallesesions', 'action' => 'edit', $detallesesion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'detallesesions', 'action' => 'delete', $detallesesion['id']), null, __('Are you sure you want to delete # %s?', $detallesesion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detallesesion'), array('controller' => 'detallesesions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Docentes'); ?></h3>
	<?php if (!empty($user['Docente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('ApellidoP'); ?></th>
		<th><?php echo __('ApellidoM'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Docente'] as $docente): ?>
		<tr>
			<td><?php echo $docente['id']; ?></td>
			<td><?php echo $docente['nombre']; ?></td>
			<td><?php echo $docente['apellidoP']; ?></td>
			<td><?php echo $docente['apellidoM']; ?></td>
			<td><?php echo $docente['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docentes', 'action' => 'view', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docentes', 'action' => 'edit', $docente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docentes', 'action' => 'delete', $docente['id']), null, __('Are you sure you want to delete # %s?', $docente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Documentos'); ?></h3>
	<?php if (!empty($user['Documento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('DocumentoN'); ?></th>
		<th><?php echo __('DocumentoPath'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Documento'] as $documento): ?>
		<tr>
			<td><?php echo $documento['id']; ?></td>
			<td><?php echo $documento['documentoN']; ?></td>
			<td><?php echo $documento['documentoPath']; ?></td>
			<td><?php echo $documento['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documentos', 'action' => 'view', $documento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documentos', 'action' => 'edit', $documento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documentos', 'action' => 'delete', $documento['id']), null, __('Are you sure you want to delete # %s?', $documento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas'); ?></h3>
	<?php if (!empty($user['Empresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombrelargo'); ?></th>
		<th><?php echo __('Nombrecorto'); ?></th>
		<th><?php echo __('LogoN'); ?></th>
		<th><?php echo __('LogoP'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Empresa'] as $empresa): ?>
		<tr>
			<td><?php echo $empresa['id']; ?></td>
			<td><?php echo $empresa['nombrelargo']; ?></td>
			<td><?php echo $empresa['nombrecorto']; ?></td>
			<td><?php echo $empresa['logoN']; ?></td>
			<td><?php echo $empresa['logoP']; ?></td>
			<td><?php echo $empresa['correo']; ?></td>
			<td><?php echo $empresa['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empresas', 'action' => 'view', $empresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empresas', 'action' => 'edit', $empresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empresas', 'action' => 'delete', $empresa['id']), null, __('Are you sure you want to delete # %s?', $empresa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Foros'); ?></h3>
	<?php if (!empty($user['Foro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Creador'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Mensaje'); ?></th>
		<th><?php echo __('Foro Id'); ?></th>
		<th><?php echo __('Foro Users Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Foro'] as $foro): ?>
		<tr>
			<td><?php echo $foro['id']; ?></td>
			<td><?php echo $foro['creador']; ?></td>
			<td><?php echo $foro['user_id']; ?></td>
			<td><?php echo $foro['fecha']; ?></td>
			<td><?php echo $foro['mensaje']; ?></td>
			<td><?php echo $foro['foro_id']; ?></td>
			<td><?php echo $foro['foro_users_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foros', 'action' => 'view', $foro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foros', 'action' => 'edit', $foro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foros', 'action' => 'delete', $foro['id']), null, __('Are you sure you want to delete # %s?', $foro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tablalogs'); ?></h3>
	<?php if (!empty($user['Tablalog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tabla'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Datoviejo'); ?></th>
		<th><?php echo __('Datonuevo'); ?></th>
		<th><?php echo __('Operacion'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Tablalog'] as $tablalog): ?>
		<tr>
			<td><?php echo $tablalog['id']; ?></td>
			<td><?php echo $tablalog['tabla']; ?></td>
			<td><?php echo $tablalog['fecha']; ?></td>
			<td><?php echo $tablalog['pid']; ?></td>
			<td><?php echo $tablalog['datoviejo']; ?></td>
			<td><?php echo $tablalog['datonuevo']; ?></td>
			<td><?php echo $tablalog['operacion']; ?></td>
			<td><?php echo $tablalog['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tablalogs', 'action' => 'view', $tablalog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tablalogs', 'action' => 'edit', $tablalog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tablalogs', 'action' => 'delete', $tablalog['id']), null, __('Are you sure you want to delete # %s?', $tablalog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tablalog'), array('controller' => 'tablalogs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuariorols'); ?></h3>
	<?php if (!empty($user['Usuariorol'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Rols Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Usuariorol'] as $usuariorol): ?>
		<tr>
			<td><?php echo $usuariorol['user_id']; ?></td>
			<td><?php echo $usuariorol['rols_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuariorols', 'action' => 'view', $usuariorol['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuariorols', 'action' => 'edit', $usuariorol['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuariorols', 'action' => 'delete', $usuariorol['id']), null, __('Are you sure you want to delete # %s?', $usuariorol['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuariorol'), array('controller' => 'usuariorols', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
