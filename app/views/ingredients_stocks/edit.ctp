<div class="ingredientsStocks form">
<?php echo $this->Form->create('IngredientsStock');?>
	<fieldset>
		<legend><?php __('Edit Ingredients Stock'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('stock');
		echo $this->Form->input('consume');
		echo $this->Form->input('difference');
		echo $this->Form->input('modifier');
		echo $this->Form->input('extra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('IngredientsStock.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('IngredientsStock.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients Stocks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>