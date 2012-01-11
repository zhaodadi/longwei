<div class="receipts form">
<?php echo $this->Form->create('Receipt');?>
	<fieldset>
		<legend><?php __('Edit Receipt'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('amount');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Receipt.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Receipt.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Receipts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>