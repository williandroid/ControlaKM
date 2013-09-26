<div class="veiculos index">
	<h2><?php echo __('Veiculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idVeiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('modeloVeiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('placaVeiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('cpcdTanque'); ?></th>
			<th><?php echo $this->Paginator->sort('corVeiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('anoVeiculo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($veiculos as $veiculo): ?>
	<tr>
		<td><?php echo h($veiculo['Veiculo']['idVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['modeloVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['placaVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['cpcdTanque']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['corVeiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['anoVeiculo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, __('Are you sure you want to delete # %s?', $veiculo['Veiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Veiculo'), array('action' => 'add')); ?></li>
	</ul>
</div>