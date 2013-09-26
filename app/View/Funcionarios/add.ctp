<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Add Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('nomeFunc');
		echo $this->Form->input('tipoFunc');
		echo $this->Form->input('cnhNum');
		echo $this->Form->input('cnhVenc');
		echo $this->Form->input('cnhTipo');
		echo $this->Form->input('cpf');
		echo $this->Form->input('user');
		echo $this->Form->input('senha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Funcionarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
