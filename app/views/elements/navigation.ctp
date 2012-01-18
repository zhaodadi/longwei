<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><?php echo $this->Html->image('images/shared/nav/nav_myaccount.gif'); ?></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="" id="logout"><?php echo $this->Html->image('images/shared/nav/nav_logout.gif'); ?></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a> 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->

<?php $links = array("home" => array("home" => array( 'text'=>'首页', 'controller' => 'posts', 'action' => 'view')),
	                 "sales" => array("sales" => array( 'text'=>'销售', 'controller' => 'sales', 'action' => 'chakan'), 
				                    "chakan" => array( 'text'=>'查看订单', 'controller' => 'sales', 'action' => 'chakan'),
				                    "add" => array( 'text'=>'提交订单', 'controller' => 'sales', 'action' => 'add')),
	                 "ingredients" => array("ingredients" => array( 'text'=>'供应', 'controller' => 'ingredients', 'action' => 'chakan'), 
				                    		"chakan" => array( 'text'=>'原料库存', 'controller' => 'ingredients', 'action' => 'chakan'),
				                    		"pinzhong" => array( 'text'=>'原料品种', 'controller' => 'ingredients', 'action' => 'pinzhong'),
				                    		"add" => array( 'text'=>'增加库存', 'controller' => 'ingredients', 'action' => 'zengjiakucun')),
	                 "products" => array("products" => array( 'text'=>'技术', 'controller' => 'products', 'action' => 'chakan'), 
				                    		"chakan" => array( 'text'=>'产品配方', 'controller' => 'products', 'action' => 'chakan'),
				                    		"add" => array( 'text'=>'添加新产品', 'controller' => 'products', 'action' => 'add'))
					);
					
	  $thenav = "";
	  $nav_1 = array_shift(explode('_', $this->params['controller']));
	  $nav_2 = $this->params['action'];
	  
	  foreach($links as $section => $arr) {
		  if($section == $nav_1)
		  	$thenav .= "<ul class=\"current\"><li>";
		  else
		  	$thenav .= "<ul class=\"select\"><li>";
	  	  foreach($arr as $page => $url) {
		      if($section == $page)
			      $thenav .= $this->Html->link("<b>".$url["text"]."</b>", array('controller' => $url["controller"], 'action' => $url["action"]), array('escape' => false));
					
			  if(count($arr) > 1) {
			      if($page == $section && $section == $nav_1) {
				      $thenav .= "<div class=\"select_sub show\"><ul class=\"sub\">";
				  } else if($page == $section) {
				      $thenav .= "<div class=\"select_sub\"><ul class=\"sub\">";
				  }
					  
				  if($page != $section) {
				      if($page == $nav_2)
					      $thenav .= "<li class=\"sub_show\">".$this->Html->link($url["text"], array('controller' => $url["controller"], 'action' => $url["action"]), array('escape' => false))."</li>";
					  else
					  	  $thenav .= "<li>".$this->Html->link($url["text"], array('controller' => $url["controller"], 'action' => $url["action"]), array('escape' => false))."</li>";
				  }
			  }
		  }
		  
		  $thenav .= "</ul></li></ul>";
	  }
?>


		<!--  start nav -->
		<div class="nav">
			<div class="table">
		
				<?php echo $thenav; ?>
                <?php /*
				<ul class="select">
                	<li><a href="#nogo"><b>首页</b><!--[if IE 7]><!--></a><!--<![endif]-->
					<!--[if lte IE 6]><table><tr><td><![endif]-->
					</li>
				</ul>
		
				<div class="nav-divider">&nbsp;</div>
		                    
				<ul class="current">
                	<li><a href="#nogo"><b>销售</b><!--[if IE 7]><!--></a><!--<![endif]-->
					<!--[if lte IE 6]><table><tr><td><![endif]-->
						<div class="select_sub show">
							<ul class="sub">
								<li><a href="#nogo">查看订单</a></li>
								<li class="sub_show"><a href="#nogo">提交订单</a></li>
							</ul>
						</div>
						<!--[if lte IE 6]></td></tr></table></a><![endif]-->
					</li>
				</ul>
		
				<div class="nav-divider">&nbsp;</div>
		
				<ul class="select">
                	<li><a href="#nogo"><b>供应</b><!--[if IE 7]><!--></a><!--<![endif]-->
						<!--[if lte IE 6]><table><tr><td><![endif]-->
						<div class="select_sub">
							<ul class="sub">
								<li><a href="#nogo">Categories Details 1</a></li>
							</ul>
						</div>
						<!--[if lte IE 6]></td></tr></table></a><![endif]-->
					</li>
				</ul>
		
				<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>技术</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">Clients Details 1</a></li>
				<li><a href="#nogo">Clients Details 2</a></li>
				<li><a href="#nogo">Clients Details 3</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>生产</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">News details 1</a></li>
				<li><a href="#nogo">News details 2</a></li>
				<li><a href="#nogo">News details 3</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul> */?>
        
        </div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->