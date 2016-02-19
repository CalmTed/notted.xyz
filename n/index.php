<!DOCTYPE html >
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Notting - <?php if (isset($_GET['n'])) {$name = $_GET['n'];}else{$name = '';} echo $name?></title>
	<meta name="description" content="Take notes about everything">
	<meta name="copyright" Content="TeddyFrost">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" href="../img/Notting.png">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<a href="../"><div id="back"><i class="fa  fa-angle-left fa-fw login-i"></i>Back</div></a>
	<div id="save" class="button"><i class="fa  fa-save fa-fw login-i"></i>Save</div>
</header>
<div id="content">
	<div class="block">
<?php
if (isset($_GET['n'])) {//check is n set
	$name = $_GET['n'];
}else{
	$name = '';
}
if(!$name == ''){//new text or not
	$path = '../notes/'.$name.'.txt';
	if (file_exists($path)) {//exists text or not
		$opendfile = fopen($path,'r');
		$content = fread($opendfile,9999);
		echo '<input type="text" id="notename" readonly placeholder="Name fo file" value="'. $name .'">';
	}else{
		$content = 'Note here';
		echo '<input type="text" id="notename" placeholder="Name fo file" value="'.$name .'">';
	}
}else{
	$content = '';
	echo '<input type="text" id="notename" placeholder="Name fo file" value="'. $name .'">';
}
if (isset($_GET['t'])) {//check is t set?
	$content = $_GET['t'];
}else{}
?>
<hr>
<input type="hidden" id="notenamehidden" value="<?php echo $name; ?>">
<input type="hidden" id="notetexthidden" value="<?php echo $content; ?>">
<div id="notetext" contenteditable="true" ><div id="emptytext" style="color: #999;font-size: 19px;padding:0;" onClick="$(notetext).html('').focus().css({'color':'#111','font':'inherit','font-size':'20px'});">Note here</div></div>
</div>
</div>
<footer>
	© TeddyFrost 2016
</footer>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/nscript.js"></script>
</body>
</html>