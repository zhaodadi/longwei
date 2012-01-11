<div class="ingredientsPrices form">
<?php echo $this->Form->create('IngredientsPrice');?>
	<fieldset>
		<legend><?php __('Edit Ingredients Price'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('supplier');
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('month');
		echo $this->Form->input('price');
		echo $this->Form->input('modifier');
		echo $this->Form->input('extra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('IngredientsPrice.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('IngredientsPrice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients Prices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>