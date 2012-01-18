<div id="page-heading"><h1>现存产品</h1></div>
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
    
<table id="product-table" class="detail-table" width="100%" cellspacing="0" cellpadding="0" border="0">

<tr>
	<th class="table-header-check"><a id="toggle-all" ></a> </th>
	<th class="table-header-repeat line-left minwidth-1"><a href="">编号</a></th>
	<th class="table-header-repeat line-left minwidth-1"><a href="">产品名称</a></th>
	<th class="table-header-repeat line-left"><a href="">添加日期</a></th>
	<th class="table-header-repeat line-left"><a href="">修改日期</a></th>
	<th class="table-header-repeat line-left"><a href="">修改人</a></th>
	<th class="table-header-options line-left"><a href="">操作</a></th>
</tr>


<?php  foreach ($products as $product): ?>
<tr>
	<td><input  type="checkbox"/></td>
	<td><?php echo $product['Product']['id']; ?></td>
	<td><?php echo $product['Product']['name']; ?></td>
	<td><?php echo date("Y-m-d H:i", strtotime($product['Product']['created'])); ?></td>
	<td><?php echo date("Y-m-d H:i", strtotime($product['Product']['modified'])); ?></td>
	<td><?php echo $product['User']['name']; ?></td>
	<td class="options-width">
		<a href="" title="编辑" class="icon-1 info-tooltip"></a>
		<a href="" title="删除" class="icon-2 info-tooltip"></a>
	</td>
</tr>
<tr> <td colspan="4">产品组成:
	 <?php
	 foreach($receipts as $receipt):
	 	if($receipt['Receipt']['product_id'] == $product['Product']['id']) {
			echo $receipt['Ingredient']['name']."<span>     </span>";
		}
	 endforeach; ?>
     </td></tr>
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