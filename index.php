<?php
	require 'static/php/system/database.php';
	require 'static/php/system/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="application-name" content="NekoHappy">
	<meta name="theme-color" content="#2C3E50">
	<meta name="keywords" content="social network, nekohappy, rede social">
	<meta name="description" content="Rede Social para todas as pessoas">
	<meta name="author" content="Kaway">
	<title>NekoHappy</title>
	<link rel="shortcut icon" href="static/img/favicon1.png">
	<link rel="stylesheet" href="static/css/style.css"/>
	<link rel="stylesheet" href="static/css/react.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="static/js/functions.js"></script>
	<script type="text/javascript" src="static/js/jquery.js"></script>
	<script type="text/javascript" src="static/js/js-all.js"></script>
	<script type="text/javascript" src="static/js/index.js"></script>
</head>
<body id="momer" class="bg-primary">
	<?php

		if (isset($_GET['signin']) or isset($_GET['signup']) or isset($_GET['checksession'])) {
			require_once 'static/php/account.php';
		} else if (isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
			require_once 'static/php/header.php';
			require_once 'static/php/dashboard.php';
		}
		else{
			require_once 'static/php/home.php';
		}

	?>
</body>
</html>
