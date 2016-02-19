<?php
if (isset($_POST['name'])||isset($_POST['text'])) {//check is n set
	$name = $_POST['name'];
	$text = $_POST['text'];
	if(strlen($name)>=90){
		exit('<h1 style="font-family:Helvetica;color:#f44;">Name to long!</h1>');
	}
	$name = stripslashes($name);
	$name = htmlspecialchars($name);
	$name = trim($name);
	$text = stripslashes($text);
	$text = htmlspecialchars($text);
	$text = trim($text);
		$path = 'notes/'.$name .'.txt';
		$opendfile = fopen($path,'w');
		fwrite($opendfile, $text);
		fclose($opendfile);
}else{
exit('<h1 style="font-family:Helvetica;color:#f44;">NO you dont!</h1>');
}
?>