<div class="ingredients form">
<?php echo $this->Form->create('Ingredient');?>
	<fieldset>
		<legend><?php __('Add Ingredient'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('spec');
		echo $this->Form->input('unit');
		echo $this->Form->input('modifier');
		echo $this->Form->input('extra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ingredients', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Receipts', true), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt', true), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
	</ul>
</div>