<div class="funcionarios view">
<h2><?php echo __('Funcionario'); ?></h2>
	<dl>
		<dt><?php echo __('IdFunc'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['idFunc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NomeFunc'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['nomeFunc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TipoFunc'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['tipoFunc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CnhNum'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cnhNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CnhVenc'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cnhVenc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CnhTipo'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cnhTipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['senha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcionario'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcionario'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
