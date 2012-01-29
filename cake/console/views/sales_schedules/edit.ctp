<div class="salesSchedules form">
<?php echo $this->Form->create('SalesSchedule');?>
	<fieldset>
		<legend><?php __('Edit Sales Schedule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sale_id');
		echo $this->Form->input('deliveried');
		echo $this->Form->input('user_id');
		echo $this->Form->input('extra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SalesSchedule.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SalesSchedule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sales Schedules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sales', true), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale', true), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>