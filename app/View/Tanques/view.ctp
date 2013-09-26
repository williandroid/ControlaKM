<div class="tanques view">
<h2><?php echo __('Tanque'); ?></h2>
	<dl>
		<dt><?php echo __('IdTanque'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['idTanque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CpcdTanque'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['cpcdTanque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LocalTanque'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['localTanque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotMomento'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['totMomento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DtAtualizacao'); ?></dt>
		<dd>
			<?php echo h($tanque['Tanque']['dtAtualizacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tanque'), array('action' => 'edit', $tanque['Tanque']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tanque'), array('action' => 'delete', $tanque['Tanque']['id']), null, __('Are you sure you want to delete # %s?', $tanque['Tanque']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tanques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tanque'), array('action' => 'add')); ?> </li>
	</ul>
</div>
