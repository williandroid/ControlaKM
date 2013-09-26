<div class="funcionarios index">
	<h2><?php echo __('Painel de Funcionários'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id Funcionario'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('Nº CNH'); ?></th>
			<th><?php echo $this->Paginator->sort('Vencimento CNH'); ?></th>
			<th><?php echo $this->Paginator->sort('Tipo CNH'); ?></th>
			<th><?php echo $this->Paginator->sort('CPF'); ?></th>
			<th><?php echo $this->Paginator->sort('Usuário'); ?></th>
			<th class="actions"><?php echo __('Opções'); ?></th>
	</tr>
	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo h($funcionario['Funcionario']['id']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['nomeFunc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['tipoFunc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cnhNum']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cnhVenc']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cnhTipo']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['user']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('visualizar'), array('action' => 'view', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Tem certeza de dejesa deletar o funcionário: %s?', $funcionario['Funcionario']['nomeFunc'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de um total de {:count}, começando do registro {:start}, terminando em {:end}')
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
	<h3><?php echo __('Opções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Funcionario'), array('action' => 'add')); ?></li>
	</ul>
</div>
