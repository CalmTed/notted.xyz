<!DOCTYPE html >
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Notted</title>
	<meta name="description" content="Take notes about everything">
	<meta name="copyright" Content="TeddyFrost">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/Notted.png">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<?php if (isset($_GET['n'])) {
		$n = $_GET['n'];
		if (isset($_GET['t'])) {
			$t = $_GET['t'];
			echo "<meta http-equiv='refresh' content='0; url=n/?n=".$n."&t=".$t."'>";
		}else{
			echo "<meta http-equiv='refresh' content='0; url=n/?n=".$n."'>";
		}
	}
	?>
	
</head>
<body>
<header>
	<div id="sitename">Notted.xyz</div>
	<a href="n/"><div id="new" class="button">New</div></a>
</header>
<div id="content">
<?php
	foreach (glob("notes/*.txt") as $path) {
		$name = substr($path, 6, -4);
		echo '<a href="n/?n='.$name.'"><div class="block" text=""><h3>'.$name.'</h3><p text="';
			if(strlen(file_get_contents($path, NULL, NULL, 0, 300))>=200){
				echo file_get_contents($path, NULL, NULL, 0, 300).'...';
			}else{
				echo file_get_contents($path, NULL, NULL, 0, 200);
			}
			
		echo '"><p></div></a>';
	
	}
?>
</div>
<footer>
	© TeddyFrost 2016 | <a href="faq">FAQ</a> | <a href="dev">Developers</a>
</footer>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/start.js"></script>
<script id="script"></script>
</body>
</html>