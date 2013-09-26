<div class="tanques view">
<h2><?php echo __('Painel - Tanques - Visualização'); ?></h2>
	<dl>
		<dt><?php echo __('ID Tanque'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidade: '); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['cpcdTanque']); ?>
			&nbsp; Litros
		</dd>
		<dt><?php echo __('Local Tanque'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['localTanque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Litros Momento: '); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['totMomento']); ?>
			&nbsp; Litro(s)
		</dd>
		<dt><?php echo __('Data Atualização: '); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['dtAtualizacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tanque'), array('action' => 'edit', $tanque['Tanque']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Exluir Tanque'), array('action' => 'delete', $tanque['Tanque']['id']), null, __('Tem certeza de dejesa deletar o Tanque: %s?', $tanque['Tanque']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tanques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tanque'), array('action' => 'add')); ?> </li>
	</ul>
</div>
