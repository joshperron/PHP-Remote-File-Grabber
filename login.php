<?php
require_once('common.php');

$error = '0';

if (isset($_POST['submitBtn'])){
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	
	$error = loginUser($username,$password);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<?php include ('_head.php') ?>
	
	<body>

		<div id="container">
		<div id="logo"><?php echo $title ?> <?php echo $ver ?></div>

		<div id="content">
        <font size=4><b>Login To Activate:</b></font>
		<?php if ($error != '') {?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
        <table width="100%">
          <tr><td width="26%">Username:</td>
          <td width="74%"> <input class="text" name="username" type="text" style="width:100%;" /></td></tr>
          <tr><td>Password:</td><td> <input class="text" name="password" type="password" style="width:100%;" /></td></tr>
          <tr><td colspan="2" align="center"><input class="text" type="submit" name="submitBtn" value="Login" />
            <label>
            <input type="reset" name="Reset" id="button" value="Reset Data" />
            </label></td></tr>
        </table>  
      </form>
      
<?php 
}   
    if (isset($_POST['submitBtn'])){

?>

<?php
	if ($error == '') {
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=index.php\">Welcome $username - you are being redirected now.";
	}
	else echo $error;

?>

		</div>
		<div id="footer">&copy; 2007 Liquix Design - Coded By: Andrew Pearce &amp; Anup Patel</div>
		</div>

	</body>
	
</html>

<?php            

}

?>