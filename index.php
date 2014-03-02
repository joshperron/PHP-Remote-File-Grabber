<?php
	require_once('common.php');
	checkUser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "filewww.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		
<html xmlns="filewww.w3.org/1999/xhtml" xml:lang="en" >
	<?php include ('_head.php') ?>
	
	<body>

		<div id="container">
		<div id="logo"><?php echo $title ?> <?php echo $ver ?></div>
		<div id="nav">
		<?php echo $nav ?>
		</div>

		<div id="content">
<font size=2><b>URL's Of Files to Upload</font></b>
		<form method="POST" name="mail" action="get.php">
		<div id="files"><p><input name="store[0]" type="text" class="forms" value="" style="width:100%;" /></p></div>
            
            <p><input name="Submit" type="submit" class="forms" value="Grab File(s)">
            <input name="Reset" type="reset" class="forms" id="Reset" value="Clear Field(s)">
	<input name="Add" type="button" class="forms" id="add" onClick="addField();" value="Add A Field">
                                        </p>
		</form>
		</div>
		<div id="footer"><?php echo $footer ?></div>
		</div>

	</body>
	
</html>
