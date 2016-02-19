<!DOCTYPE html >
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Notted - Developers</title>
	<meta name="description" content="Take notes about everything">
	<meta name="copyright" Content="TeddyFrost">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" href="../img/Notted.png">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php if (isset($_GET['n'])) {
		$n = $_GET['n'];
		if (isset($_GET['t'])) {
			$t = $_GET['t'];
			echo "<meta http-equiv='refresh' content='0; url=../n/?n=".$n."&t=".$t."'>";
		}else{
			echo "<meta http-equiv='refresh' content='0; url=../n/?n=".$n."'>";
		}
	}
	?>
	
</head>
<body>
<header>
	<a href="../"><div id="back"><i class="fa  fa-angle-left fa-fw login-i"></i>Back</div></a>
</header>
<div id="content">
	<div class="block" style="padding:2%" text="">
		<h2>Coming soon</h2>
		<h5>It will be ready in the near future<h5>
	</div>
</div>
<footer>
	© TeddyFrost 2016 | <a href="../faq">FAQ</a> | <a href="#content">Developers</a>
</footer>
</body>
</html>