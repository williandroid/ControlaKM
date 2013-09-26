<div class="funcionarios index">
	<h2><?php echo __('Funcionarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idFunc'); ?></th>
			<th><?php echo $this->Paginator->sort('nomeFunc'); ?></th>
			<th><?php echo $this->Paginator->sort('tipoFunc'); ?></th>
			<th><?php echo $this->Paginator->sort('cnhNum'); ?></th>
			<th><?php echo $this->Paginator->sort('cnhVenc'); ?></th>
			<th><?php echo $this->Paginator->sort('cnhTipo'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('user'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo h($funcionario['Funcionario']['idFunc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['nomeFunc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['tipoFunc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cnhNum']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cnhVenc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cnhTipo']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['user']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['senha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $funcionario['Funcionario']['idFunc'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $funcionario['Funcionario']['idFunc'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $funcionario['Funcionario']['idFunc']), null, __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['idFunc'])); ?>
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
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?></li>
	</ul>
</div>
