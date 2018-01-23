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
	 <link rel="stylesheet" href="/static/css/react.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="static/js/functions.js"></script>
	<script src="static/js/jquery.js" type="text/javascript"></script>
	<script src="static/js/js-all.js" type="text/javascript"></script>
	<script  src="static/js/index.js"></script>
</head>
<body>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>

<?php } ?>
</body>
</html>