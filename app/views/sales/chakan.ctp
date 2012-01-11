<table>
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
	<td><?php echo $order['Sale']['created']; ?></td>
	<td><?php echo $order['Sale']['modified']; ?></td>
	<td><?php echo $order['User']['name']; ?></td>
	<td class="options-width">
		<a href="" title="Edit" class="icon-1 info-tooltip"></a>
		<a href="" title="Edit" class="icon-2 info-tooltip"></a>
		<a href="" title="Edit" class="icon-3 info-tooltip"></a>
		<a href="" title="Edit" class="icon-4 info-tooltip"></a>
		<a href="" title="Edit" class="icon-5 info-tooltip"></a>
	</td>
</tr>
<?php endforeach; ?>
 
</table>