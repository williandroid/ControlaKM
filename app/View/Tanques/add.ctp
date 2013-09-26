<div class="tanques form">
<?php echo $this->Form->create('Tanque'); ?>
	<fieldset>
		<legend><?php echo __('Add Tanque'); ?></legend>
	<?php
		echo $this->Form->input('idTanque');
		echo $this->Form->input('cpcdTanque');
		echo $this->Form->input('localTanque');
		echo $this->Form->input('totMomento');
		echo $this->Form->input('dtAtualizacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tanques'), array('action' => 'index')); ?></li>
	</ul>
</div>
