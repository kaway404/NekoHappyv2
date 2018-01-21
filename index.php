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
</head>
<body>

</body>
</html>
<?php
require 'static/php/header.php';
if(isset($_GET['login'])){
	require 'static/php/account.php';
}
else if(isset($_GET['registro'])){
	require 'static/php/account.php';
}
else{
require 'static/php/home.php';
}
?>