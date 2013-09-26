<div class="veiculos form">
<?php echo $this->Form->create('Veiculo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
                echo $this->Form->input('modeloVeiculo',  array('label' => 'Modelo Veículo'));
		echo $this->Form->input('placaVeiculo',  array('label' => 'Placa: '));
		echo $this->Form->input('cpcdTanque',  array('label' => 'Capacidade do Tanque:'));
		echo $this->Form->input('corVeiculo',  array('label' => 'Cor'));
		echo $this->Form->input('anoVeiculo',  array('label' => 'Ano do Veículo'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar Veículo')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Veiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Veiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?></li>
	</ul>
</div>
