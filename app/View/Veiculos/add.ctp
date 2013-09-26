<div class="veiculos form">
<?php echo $this->Form->create('Veiculo'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Veículo'); ?></legend>
	<?php
		echo $this->Form->input('modeloVeiculo',  array('label' => 'Modelo Veículo'));
		echo $this->Form->input('placaVeiculo',  array('label' => 'Placa: '));
		echo $this->Form->input('cpcdTanque',  array('label' => 'Capacidade do Tanque:'));
		echo $this->Form->input('corVeiculo',  array('label' => 'Cor'));
		echo $this->Form->input('anoVeiculo',  array('label' => 'Ano do Veículo'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Adicionar Veículo')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Veiculos'), array('action' => 'index')); ?></li>
	</ul>
</div>
