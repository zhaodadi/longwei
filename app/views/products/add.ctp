<div id="page-heading"><h1>添加新产品</h1></div>
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
        
    	<?php echo $this->Form->create('Product'); ?>
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
		<tr>
			<th valign="top">产品名称</th>
			<td><?php echo $this->Form->input('Product.name', array( 'label' => false,'div' => false, 'class' => 'inp-form')); ?></td>
			<td></td>
		</tr>
		<tr><th valign="top">原料组成</th>
        	<td>
            <table id="add_ingredient">
            	<tr>
                	<th class="table-header-repeat line-left minwidth-1"><a href="">原料名</a></th>
                	<th class="table-header-repeat line-left minwidth-1"><a href="">数量</a></th>
                	<th class="table-header-repeat line-left minwidth-1"><a href="">单位</a></th>
                </tr>
                <tr>
                	<td><center><?php echo $this->Form->input('Receipt.ingredient_id', array( 'name' => 'data[Receipt][ingredient_id][]','label' => false,'div' => false, 'class' => '')); ?></center></td>
                    <td><?php echo $this->Form->input('Receipt.amount', array( 'name' => 'data[Receipt][amount][]', 'label' => false,'div' => false, 'class' => '')); ?></td>
					<td><?php echo "吨"; ?></td>
                </tr>
                <tr>
                	<td><center><?php echo $this->Form->input('Receipt.ingredient_id', array( 'name' => 'data[Receipt][ingredient_id][]', 'label' => false,'div' => false, 'class' => '')); ?></center></td>
                    <td><?php echo $this->Form->input('Receipt.amount', array('name' => 'data[Receipt][amount][]', 'label' => false,'div' => false, 'class' => '')); ?></td>
					<td><?php echo "吨"; ?></td>
                </tr>
            </table>
            </td>
		</tr>
        <tr>
        	<td></td>
            <td><input id="addNewLine" type="button" value="增加一行" /></td>
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