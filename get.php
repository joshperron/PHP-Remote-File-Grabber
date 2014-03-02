<?php
        require_once('common.php');
        checkUser();
        ini_set("memory_limit","2000M");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
        <?php include ('_head.php') ?>

        <body>

                <div id="container">
                <div id="logo"><?php echo $title ?> <?php echo $ver ?></div>
                <div id="nav">
                <?php echo $nav ?>
                </div>

                <div id="content">
        <font size=2><b>Grabbing Files:</font></b>
<?php
ini_set("memory_limit","2000M");
ini_set('max_execution_time',"2500");

foreach ($_POST['store'] as $value){
	if ($value!=""){
		echo("Attempting: ".$value."<br />");
		system("cd files && wget ".$value);
		echo("<b>Success: ".$value."</b><br />");
	}
}

echo("Finished all file uploading. <META HTTP-EQUIV='Refresh' CONTENT='2; URL=index.php'>");
?>
                </div>
                <div id="footer"><?php echo $footer ?></div>
                </div>

        </body>

</html>
