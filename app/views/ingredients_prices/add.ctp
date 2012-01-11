<div class="ingredientsPrices form">
<?php echo $this->Form->create('IngredientsPrice');?>
	<fieldset>
		<legend><?php __('Add Ingredients Price'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Ingredients Prices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>