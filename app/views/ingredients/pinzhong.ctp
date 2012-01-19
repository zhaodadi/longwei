<div id="page-heading"><h1>现存原料品种</h1></div>
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
	<th class="table-header-repeat line-left minwidth-1"><a href="">编号</a></th>
	<th class="table-header-repeat line-left minwidth-1"><a href="">原料名称</a></th>
	<th class="table-header-repeat line-left"><a href="">规格</a></th>
	<th class="table-header-repeat line-left"><a href="">单位</a></th>
	<th class="table-header-repeat line-left"><a href="">添加日期</a></th>
	<th class="table-header-repeat line-left"><a href="">修改日期</a></th>
	<th class="table-header-repeat line-left"><a href="">添加用户</a></th>
	<th class="table-header-options line-left"><a href="">操作</a></th>
</tr>
</thead>

<tbody>
<?php foreach ($ingredients as $ingredient): ?>
<tr>
	<td><input  type="checkbox"/></td>
	<td><?php echo $ingredient['Ingredient']['id']; ?></td>
	<td><?php echo $ingredient['Ingredient']['name']; ?></td>
	<td><?php echo $ingredient['Ingredient']['spec']; ?></td>
	<td><?php echo $ingredient['Ingredient']['unit']; ?></td>
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
    
    
    <div id="page-heading"><h1>新增原料品种</h1></div>
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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td><!-- start id-form -->
        
    	<?php echo $this->Form->create('Ingredient', array('action' => 'pinzhong')); ?>
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">原料名称</th>
			<td><?php echo $this->Form->input('name', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">规格</th>
			<td><?php echo $this->Form->input('spec', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">单位</th>
			<td><?php echo $this->Form->input('unit', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?>
		<!--<select  class="styledselect_form_1">
			<option value="">吨</option>
			<option value="">千克</option>
			<option value="">克</option>
		</select>-->
			</td>
			<td></td>
		</tr>
		
		</td>
		<td></td>
	</tr>
	<tr>
		<th valign="top">备注</th>
		<td><?php echo $this->Form->input('extra', array( 'label' => false,'div' => false, 'class' => 'form-textarea')); ?></td>
		<td></td>
	</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<?php echo $this->Form->end(__('提交', true));?>
		</td>
		<td></td>
	</tr>
	</table>
    </form>
	<!-- end id-form  -->

	</td>
	<td>
    
</td>
</tr>
<tr>
<td><?php echo $this->Html->image('images/shared/blank.gif'); ?></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>