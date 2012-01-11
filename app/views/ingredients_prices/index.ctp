<div class="ingredientsPrices index">
	<h2><?php __('Ingredients Prices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('supplier');?></th>
			<th><?php echo $this->Paginator->sort('ingredient_id');?></th>
			<th><?php echo $this->Paginator->sort('month');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('modifier');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('extra');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ingredientsPrices as $ingredientsPrice):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['id']; ?>&nbsp;</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['supplier']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ingredientsPrice['Ingredient']['name'], array('controller' => 'ingredients', 'action' => 'view', $ingredientsPrice['Ingredient']['id'])); ?>
		</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['month']; ?>&nbsp;</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['price']; ?>&nbsp;</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['modifier']; ?>&nbsp;</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['created']; ?>&nbsp;</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['modified']; ?>&nbsp;</td>
		<td><?php echo $ingredientsPrice['IngredientsPrice']['extra']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ingredientsPrice['IngredientsPrice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ingredientsPrice['IngredientsPrice']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ingredientsPrice['IngredientsPrice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientsPrice['IngredientsPrice']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ingredients Price', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>