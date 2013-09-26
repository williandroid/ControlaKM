<div class="tanques form">
<?php echo $this->Form->create('Tanque'); ?>
	<fieldset>
		<legend><?php echo __('Editar Tanque'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cpcdTanque', array('label' => 'Capacidade do Tanque'));
		echo $this->Form->input('localTanque', array('label' => 'Local do Tanque'));
		echo $this->Form->input('dtAtualizacao', array('label' => 'Local do Tanque'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar Tanque')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir Tanque'), array('action' => 'delete', $this->Form->value('Tanque.id')), null, __('Tem certeza de dejesa deletar o Tanque: %s?', $this->Form->value('Tanque.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tanques'), array('action' => 'index')); ?></li>
	</ul>
</div>
