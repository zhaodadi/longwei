<div class="salesSchedules index">
	<h2><?php __('Sales Schedules');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sale_id');?></th>
			<th><?php echo $this->Paginator->sort('deliveried');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('extra');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($salesSchedules as $salesSchedule):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $salesSchedule['SalesSchedule']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesSchedule['Sale']['id'], array('controller' => 'sales', 'action' => 'view', $salesSchedule['Sale']['id'])); ?>
		</td>
		<td><?php echo $salesSchedule['SalesSchedule']['deliveried']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesSchedule['User']['name'], array('controller' => 'users', 'action' => 'view', $salesSchedule['User']['id'])); ?>
		</td>
		<td><?php echo $salesSchedule['SalesSchedule']['created']; ?>&nbsp;</td>
		<td><?php echo $salesSchedule['SalesSchedule']['modified']; ?>&nbsp;</td>
		<td><?php echo $salesSchedule['SalesSchedule']['extra']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $salesSchedule['SalesSchedule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $salesSchedule['SalesSchedule']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $salesSchedule['SalesSchedule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $salesSchedule['SalesSchedule']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sales Schedule', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sales', true), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale', true), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>