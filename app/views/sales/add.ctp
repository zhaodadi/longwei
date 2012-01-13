<div id="page-heading"><h1>提交订单</h1></div>
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
        
    	<?php echo $this->Form->create('Sale'); ?>
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">产品名称:</th>
			<td><?php echo $this->Form->input('product_id', array( 'label' => false,'div' => false, 'class' => 'styledselect_form_1')); ?></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">数量:</th>
			<td><?php echo $this->Form->input('amount', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">单位:</th>
			<td><?php echo $this->Form->input('unit', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?>
		<!--<select  class="styledselect_form_1">
			<option value="">吨</option>
			<option value="">千克</option>
			<option value="">克</option>
		</select>-->
			</td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">要货地</th>
			<td><?php echo $this->Form->input('demand_location', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">要货日期</th>
			<td><?php echo $this->Form->input('demand_date', array( 'label' => false,'div' => false)); ?></td>
			<td><a href=""  id="date-pick"><img src="images/forms/icon_calendar.jpg"   alt="" /></a></td>
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