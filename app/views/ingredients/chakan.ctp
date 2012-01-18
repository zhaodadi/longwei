<div id="page-heading"><h1>现存订单</h1></div>
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><?php echo $this->Html->image('images/shared/side_shadowleft.jpg'); ?></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><?php echo $this->Html->image('images/shared/side_shadowright.jpg'); ?></th>
</tr>

<tr>
	<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
    
<table id="product-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<thead>
<tr>
	<th class="table-header-check"><a id="toggle-all" ></a> </th>
	<th class="table-header-repeat line-left minwidth-1">编号</th>
	<th class="table-header-repeat line-left minwidth-1">供货单位</th>
	<th class="table-header-repeat line-left minwidth-1">产品名称</th>
	<th class="table-header-repeat line-left minwidth-1">规格</th>
	<th class="table-header-repeat line-left minwidth-1">单位</th>
	<th class="table-header-repeat line-left minwidth-1">库存量</th>
	<th class="table-header-repeat line-left minwidth-1">即将消耗</th>
	<th class="table-header-repeat line-left">差量</th>
	<th class="table-header-repeat line-left minwidth-1">上月价格</th>
	<th class="table-header-repeat line-left minwidth-1">本月价格</th>
	<th class="table-header-repeat line-left">添加日期</th>
	<th class="table-header-repeat line-left">修改日期</th>
	<th class="table-header-repeat line-left minwidth-1">修改人</th>
	<th class="table-header-repeat line-left minwidth-1">操作</th>
</tr>
</thead>
<tbody>
<?php foreach ($ingredients as $ingredient): ?>
<tr>
	<td><input  type="checkbox"/></td>
	<td><?php echo $ingredient['Ingredient']['id']; ?></td>
	<td><?php echo $ingredients_prices[1]['IngredientsPrice']['supplier'];//echo $ingredient['IngredientsPrice']['supplier']; ?></td>
	<td><?php echo $ingredient['Ingredient']['name']; ?></td>
	<td><?php echo $ingredient['Ingredient']['spec']; ?></td>
	<td><?php echo $ingredient['Ingredient']['unit']; ?></td>
	<td><?php echo $ingredient['IngredientsStock']['stock']; ?></td>
	<td><?php echo $ingredient['IngredientsStock']['consume']; ?></td>
	<td><?php echo $ingredient['IngredientsStock']['stock'] - $ingredient['IngredientsStock']['consume']; ?></td>
    <?php
		$count = 0; 
		foreach($ingredients_prices as $ingredients_price):
			  if($ingredients_price['IngredientsPrice']['ingredient_id'] == $ingredient['Ingredient']['id']) {
				  if($ingredients_price['IngredientsPrice']['price']) {
		              echo "<td>".$ingredients_price['IngredientsPrice']['price']."</td>";
					  $count++;
			  	  }
			  }
		endforeach;
		if($count == 0)
			echo "<td>无数据</td><td>无数据</td>";
		else if($count == 1)
			echo "<td>无数据</td>";
	?>
	<td><?php echo date("Y-m-d H:i", strtotime($ingredient['Ingredient']['created'])); ?></td>
	<td><?php echo date("Y-m-d H:i", strtotime($ingredient['Ingredient']['modified'])); ?></td>
	<td><?php echo $ingredient['User']['name']; ?></td>
	<td class="options-width">
		<a href="" title="编辑" class="icon-1 info-tooltip"></a>
		<a href="" title="删除" class="icon-2 info-tooltip"></a>
	</td>
</tr>
<?php endforeach; ?>
</tbody>
 
</table>
		 </div>
         <!-- end content table -->

		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">编辑</a>
					<a href="" class="action-delete">删除</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
         
  
			
			<div class="clear"></div>
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>