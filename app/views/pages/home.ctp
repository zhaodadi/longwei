<?php
    /*echo $this->Form->inputs(array(
    'legend' => __('Login', true),
    'username',
    'password'
    ));*/
	
	echo "<div id=\"login-inner\">";
	
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('action' => 'login'));
	
	echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">  
		<tr>
			<th>用户名</th>
			<td>";
	echo $this->Form->input('User.username', array('class' => 'login-inp', 'label' => false));
	
	echo "</td>
		  </tr>
		  <tr>
			<th>密码</th>
			<td>";
	echo $this->Form->input('User.password', array('class' => 'login-inp', 'label' => false));
			
	echo "</td>
		</tr>
		<tr>
			<th></th>
			<td><input type=\"submit\" class=\"submit-login\"  value=\"登陆\"/></td>
		</tr>
		</table>";
	
    echo $this->Form->end();
	
	echo "</div>";
?>

