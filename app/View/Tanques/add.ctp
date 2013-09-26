<div class="tanques form">
<?php echo $this->Form->create('Tanque'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Tanque'); ?></legend>
	<?php
		echo $this->Form->input('cpcdTanque', array('label' => 'Capacidade do Tanque'));
		echo $this->Form->input('localTanque', array('label' => 'Local do Tanque'));
		echo $this->Form->input('totMomento', array('label' => 'Total no Momento'));
		echo $this->Form->input('dtAtualizacao', array('label' => 'Data Atualização'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Adicionar Tanque')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Tanques'), array('action' => 'index')); ?></li>
	</ul>
</div>
