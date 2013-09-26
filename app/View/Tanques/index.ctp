<div class="tanques index">
	<h2><?php echo __('Painel - Tanques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Capacidade Tanque em L'); ?></th>
			<th><?php echo $this->Paginator->sort('Local Tanque'); ?></th>
			<th><?php echo $this->Paginator->sort('Total de Litros Atual'); ?></th>
			<th><?php echo $this->Paginator->sort('Data Atualização'); ?></th>
			<th class="actions"><?php echo __('Opções'); ?></th>
	</tr>
	<?php foreach ($tanques as $tanque): ?>
	<tr>
		<td><?php echo h($tanque['Tanque']['id']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['cpcdTanque']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['localTanque']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['totMomento']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['dtAtualizacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $tanque['Tanque']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tanque['Tanque']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $tanque['Tanque']['id']), null, __('Tem certeza de dejesa deletar o Tanque: %s?', $tanque['Tanque']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Tanque'), array('action' => 'add')); ?></li>
	</ul>
</div>
