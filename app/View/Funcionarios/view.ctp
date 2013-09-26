<div class="funcionarios view">
<h2><?php echo __('Visualizar Funcionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id Funcionário:'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['nomeFunc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Funcionário: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['tipoFunc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Número da CNH: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cnhNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VencimentoCNH: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cnhVenc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria CNH: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cnhTipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuário: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha: '); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['senha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Funcionário'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Funcionário'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Tem certeza de dejesa deletar o funcionário: %s?', $funcionario['Funcionario']['nomeFunc'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funcionários'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Funcionário'), array('action' => 'add')); ?> </li>
	</ul>
</div>
