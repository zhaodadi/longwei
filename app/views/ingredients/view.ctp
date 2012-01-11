<div class="ingredients view">
<h2><?php  __('Ingredient');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Spec'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['spec']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['unit']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modifier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['modifier']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredient['Ingredient']['extra']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingredient', true), array('action' => 'edit', $ingredient['Ingredient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ingredient', true), array('action' => 'delete', $ingredient['Ingredient']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredient['Ingredient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receipts', true), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receipt', true), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Receipts');?></h3>
	<?php if (!empty($ingredient['Receipt'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Ingredient Id'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Unit'); ?></th>
		<th><?php __('Modifier'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Extra'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ingredient['Receipt'] as $receipt):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $receipt['id'];?></td>
			<td><?php echo $receipt['product_id'];?></td>
			<td><?php echo $receipt['ingredient_id'];?></td>
			<td><?php echo $receipt['amount'];?></td>
			<td><?php echo $receipt['unit'];?></td>
			<td><?php echo $receipt['modifier'];?></td>
			<td><?php echo $receipt['created'];?></td>
			<td><?php echo $receipt['modified'];?></td>
			<td><?php echo $receipt['extra'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'receipts', 'action' => 'view', $receipt['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'receipts', 'action' => 'edit', $receipt['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'receipts', 'action' => 'delete', $receipt['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $receipt['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Receipt', true), array('controller' => 'receipts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
