<div class="veiculos view">
<h2><?php echo __('Veiculo'); ?></h2>
	<dl>
		<dt><?php echo __('id'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ModeloVeiculo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['modeloVeiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PlacaVeiculo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['placaVeiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CpcdTanque'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['cpcdTanque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CorVeiculo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['corVeiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AnoVeiculo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['anoVeiculo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Veiculo'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Veiculo'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, __('Are you sure you want to delete # %s?', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
