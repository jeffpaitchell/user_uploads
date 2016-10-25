<?php

	include('header.html');

?>
	<form class="form-class" id="admin_login" name="admin_login" role="form" method="post" action="check_login.php"  >

	<label class="control-label" for="admin_username">Admin Login </label>
	<input type="text" class="form-control" id="admin_username" name="admin_username" placeholder="Admin Name" required>

	<label class="control-label" for="admin_password">Password</label>
	<input type="password" class="form-control" id="admin_passsword" name="admin_password" placeholder="****" required> 

	<div class="form-button-group">
        <input id="submit" name="submit" type="submit" value="LOGIN" class="btn btn-primary">
    </div> 

	</form>	

<?php

$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<p>'.$msg.'</p>'; //If message is set echo it
echo "<h1>Please enter your Login Information</h1>";

?>	
	