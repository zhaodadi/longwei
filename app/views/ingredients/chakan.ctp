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
<tr>
	<th class="table-header-check"><a id="toggle-all" ></a> </th>
	<th class="table-header-repeat line-left minwidth-1"><a href="">编号</a></th>
	<th class="table-header-repeat line-left minwidth-1"><a href="">产品名称</a></th>
	<th class="table-header-repeat line-left"><a href="">数量</a></th>
	<th class="table-header-repeat line-left"><a href="">单位</a></th>
	<th class="table-header-repeat line-left"><a href="">要货地</a></th>
	<th class="table-header-repeat line-left"><a href="">要货日期</a></th>
	<th class="table-header-repeat line-left"><a href="">添加日期</a></th>
	<th class="table-header-repeat line-left"><a href="">修改日期</a></th>
	<th class="table-header-repeat line-left"><a href="">业务员</a></th>
	<th class="table-header-options line-left"><a href="">操作</a></th>
</tr>

<?php foreach ($orders as $order): ?>
<tr>
	<td><input  type="checkbox"/></td>
	<td><?php echo $order['Sale']['id']; ?></td>
	<td><?php echo $order['Product']['name']; ?></td>
	<td><?php echo $order['Sale']['amount']; ?></td>
	<td><?php echo $order['Sale']['unit']; ?></td>
	<td><?php echo $order['Sale']['demand_location']; ?></td>
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
         
        
<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
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