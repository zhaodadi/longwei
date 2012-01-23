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
	<th class="table-header-repeat line-left minwidth-1">日期</th>
	<th class="table-header-repeat line-left">发货状态</th>
	<th class="table-header-repeat line-left">产品名称</th>
	<th class="table-header-repeat line-left minwidth-1">数量</th>
	<th class="table-header-repeat line-left">要货地</th>
	<th class="table-header-repeat line-left">要货日期</th>
	<th class="table-header-repeat line-left">添加日期</th>
	<th class="table-header-repeat line-left">修改日期</th>
	<th class="table-header-repeat line-left">操作员</th>
	<th class="table-header-repeat minwidth-1 line-left">操作</th>
</tr>
</thead>

<tbody>
<?php foreach ($orders as $order): ?>
<tr>
	<td><input  type="checkbox"/></td>
	<td><?php echo $order['Product']['name']; ?></td>
	<td><?php echo $order['Sale']['amount']; ?></td>
	<td><?php echo $order['Sale']['unit']; ?></td>
	<td><?php echo $order['Sale']['demand_location']; ?></td>
	<td><?php if($order['Sale']['deliveried'] == 0) echo "未发货"; else echo "已发货" ?></td>
	<td><?php echo $order['Sale']['demand_date']; ?></td>
	<td><?php echo date("Y-m-d H:i", strtotime($order['Sale']['created'])); ?></td>
	<td><?php echo date("Y-m-d H:i", strtotime($order['Sale']['modified'])); ?></td>
	<td><?php echo $order['User']['name']; ?></td>
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