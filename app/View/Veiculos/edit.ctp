<div class="veiculos form">
<?php echo $this->Form->create('Veiculo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Veiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Veiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?></li>
	</ul>
</div>
