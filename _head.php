<head>
<title>PHP File Grabber 4.0</title>
<meta http-equiv="Content-Type" content="application/xhtml+xml" />
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<script type="text/javascript">
total=0;
function addField(){
	total+=1;
	document.getElementById('files').innerHTML+=('<p><input name="store['+total+']" type="text" class="forms" value="" style="width:100%;" /></p>');
}
</script>


<?php include_once ('config.php') ?>
</head>