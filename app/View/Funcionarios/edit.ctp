<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Editar Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nomeFunc', array('label' => 'Nome Funcionário'));
		echo $this->Form->input('tipoFunc', array('label' => 'Tipo Funcionário'));
		echo $this->Form->input('cnhNum', array('label' => 'Nº CNH'));
		echo $this->Form->input('cnhVenc', array('label' => 'Vencimento CNH'));
		echo $this->Form->input('cnhTipo', array('label' => 'Tipo CNH'));
		echo $this->Form->input('cpf', array('label' => 'CPF'));
		echo $this->Form->input('user', array('label' => 'Usuário'));
		echo $this->Form->input('senha', array('label' => 'Senha', 'type'=>'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Confirma')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir Funcionário'), array('action' => 'delete', $this->Form->value('Funcionarios.id')), null, __('Tem certeza de dejesa deletar o funcionário: %s?', $this->Form->value('Funcionario.nomeFunc'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Funcionarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
