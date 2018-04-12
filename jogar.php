<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
require 'static/php/system/database.php';
require 'static/php/system/config.php';
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
$idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
$usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
$usercry = $usercry[0];
?>
<!DOCTYPE html>
<html>
<head>
<title>NekoHappy | Games</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	 <link rel="stylesheet" href="/static/css/react.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="static/js/functions.js"></script>
	<script src="static/js/jquery.js" type="text/javascript"></script>
	<script src="static/js/js-all.js" type="text/javascript"></script>
	<script  src="static/js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/screen.css"/>
	<link rel="stylesheet" type="text/css" href="/static/css/comunidade.css"/>
</head>
<body id="momer">

<?php
require 'static/php/header.php';
require 'static/php/leftbar.php';
?>

<div id="alinhar-h">

<div id="editprofile">
<center>
<div id="nanisa">
<h1>Jogo da velha</h1>
</div>

<div id="jogodavelha">
<div id="g1" class="wowh">
	<p id="e1"></p>
</div>
<div id="g2" class="wowh">
	<p id="e2"></p>
</div>
<div id="g3" class="wowh">
	<p id="e3"></p>
</div>
<div id="g4" class="wowh">
	<p id="e4"></p>
</div>
<div id="g5" class="wowh">
	<p id="e5"></p>
</div>
<div id="g6" class="wowh">
	<p id="e6"></p>
</div>
<div id="g7" class="wowh">
	<p id="e7"></p>
</div>
<div id="g8" class="wowh">
	<p id="e8"></p>
</div>
<div id="g9" class="wowh">
	<p id="e9"></p>
</div>

<h1 id="what">X</h1>
<input id="jogadas" type="text" value="0"/>
</div>

</div>

<div id="nanivelha">

</div>

<script type="text/javascript">
$('#g1').click(function(){
	 $.post('/static/php/velha.php?onde=1', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g2').click(function(){
	 $.post('/static/php/velha.php?onde=2', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g3').click(function(){
	 $.post('/static/php/velha.php?onde=3', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g4').click(function(){
	 $.post('/static/php/velha.php?onde=4', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g5').click(function(){
	 $.post('/static/php/velha.php?onde=5', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g6').click(function(){
	 $.post('/static/php/velha.php?onde=6', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g7').click(function(){
	 $.post('/static/php/velha.php?onde=7', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g8').click(function(){
	 $.post('/static/php/velha.php?onde=8', function (html) {
        $('#nanivelha').html(html);
    });
	});

$('#g9').click(function(){
	 $.post('/static/php/velha.php?onde=9', function (html) {
        $('#nanivelha').html(html);
    });
	});

var milissegundost = 1000;

// Executa a função a cada intervalo de tempo
var interval = setInterval(function(){
    $.post('/static/php/velha.php', function (html) {
        $('#nanivelha').html(html);
    });
  }, milissegundost);
</script>

</div>

<div id="happyhour">

<div class="hourstimea" id="wow">

</div>

</div>

<script type="text/javascript">
var milissegundos = 800;

// Executa a função a cada intervalo de tempo
var interval = setInterval(function(){
    $.post('/static/php/newsound.php', function (html) {
        $('#wow').html(html);
    });
  }, milissegundos);
</script>

</body>

</html>

<?php } ?>