<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>NekoHappy</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="static/js/functions.js"></script>
</head>
<body>

</body>
</html>
<?php


if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
	require 'static/php/header.php';
	require 'static/php/dashboard.php';
}
else{
require 'static/php/header.php';
if(isset($_GET['login'])){
	require 'static/php/account.php';
}
else if(isset($_GET['registro'])){
	require 'static/php/account.php';
}
else if(isset($_GET['verificarsessao'])){
	require 'static/php/account.php';
}
else{
require 'static/php/home.php';
}
}


?>