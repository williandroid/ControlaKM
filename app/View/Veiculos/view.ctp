<div class="veiculos view">
<h2><?php echo __('Painel - Veiculo - Visualizar'); ?></h2>
	<dl>
		<dt><?php echo __('ID: '); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo Veiculo: '); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['modeloVeiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placa Veiculo: '); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['placaVeiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capac. Tanque: '); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['cpcdTanque']); ?>
			&nbsp; Litros
		</dd>
		<dt><?php echo __('Cor Veiculo: '); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['corVeiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Veiculo: '); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['anoVeiculo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Veiculo'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Veiculo'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, __('Tem certeza de dejesa deletar o Veículo: %s?', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Veiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Veiculo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
