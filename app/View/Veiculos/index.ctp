<div class="veiculos index">
	<h2><?php echo __('Painel - Veiculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Modelo Veiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('Placa Veiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('Capacidade Tanque'); ?></th>
			<th><?php echo $this->Paginator->sort('Cor Veiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('Ano'); ?></th>
			<th class="actions"><?php echo __('Opções'); ?></th>
	</tr>
	<?php foreach ($veiculos as $veiculo): ?>
	<tr>
		<td><?php echo h($veiculo['Veiculo']['id']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['modeloVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['placaVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['cpcdTanque']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['corVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['anoVeiculo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, __('Tem certeza de dejesa deletar o veículo: %s?', $veiculo['Veiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Veiculo'), array('action' => 'add')); ?></li>
	</ul>
</div>
