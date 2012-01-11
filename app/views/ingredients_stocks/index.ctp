<div class="ingredientsStocks index">
	<h2><?php __('Ingredients Stocks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ingredient_id');?></th>
			<th><?php echo $this->Paginator->sort('stock');?></th>
			<th><?php echo $this->Paginator->sort('consume');?></th>
			<th><?php echo $this->Paginator->sort('difference');?></th>
			<th><?php echo $this->Paginator->sort('modifier');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('extra');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ingredientsStocks as $ingredientsStock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ingredientsStock['IngredientsStock']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ingredientsStock['Ingredient']['name'], array('controller' => 'ingredients', 'action' => 'view', $ingredientsStock['Ingredient']['id'])); ?>
		</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['stock']; ?>&nbsp;</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['consume']; ?>&nbsp;</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['difference']; ?>&nbsp;</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['modifier']; ?>&nbsp;</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['created']; ?>&nbsp;</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['modified']; ?>&nbsp;</td>
		<td><?php echo $ingredientsStock['IngredientsStock']['extra']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ingredientsStock['IngredientsStock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ingredientsStock['IngredientsStock']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ingredientsStock['IngredientsStock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientsStock['IngredientsStock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ingredients Stock', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>