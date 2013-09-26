<div class="tanques index">
	<h2><?php echo __('Tanques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idTanque'); ?></th>
			<th><?php echo $this->Paginator->sort('cpcdTanque'); ?></th>
			<th><?php echo $this->Paginator->sort('localTanque'); ?></th>
			<th><?php echo $this->Paginator->sort('totMomento'); ?></th>
			<th><?php echo $this->Paginator->sort('dtAtualizacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tanques as $tanque): ?>
	<tr>
		<td><?php echo h($tanque['Tanque']['idTanque']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['cpcdTanque']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['localTanque']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['totMomento']); ?>&nbsp;</td>
		<td><?php echo h($tanque['Tanque']['dtAtualizacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tanque['Tanque']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tanque['Tanque']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tanque['Tanque']['id']), null, __('Are you sure you want to delete # %s?', $tanque['Tanque']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tanque'), array('action' => 'add')); ?></li>
	</ul>
</div>
