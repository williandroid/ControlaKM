<div class="veiculos form">
<?php echo $this->Form->create('Veiculo'); ?>
	<fieldset>
		<legend><?php echo __('Add Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('modeloVeiculo');
		echo $this->Form->input('placaVeiculo');
		echo $this->Form->input('cpcdTanque');
		echo $this->Form->input('corVeiculo');
		echo $this->Form->input('anoVeiculo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?></li>
	</ul>
</div>
