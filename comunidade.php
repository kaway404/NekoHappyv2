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

$idcomu = DBEscape( strip_tags(trim($_GET['id']) ) );
$comunidade = DBRead('comunidades', "WHERE id = '{$idcomu}' LIMIT 1 ");
$comunidade = $comunidade[0];
?>
<!DOCTYPE html>
<html>
<head>
<title>NekoHappy |  <?php echo $comunidade['nome']; ?></title>
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
	]<link rel="stylesheet" type="text/css" href="/static/css/comunidade.css"/>
</head>
<body id="momer">

<?php
require 'static/php/header.php';
require 'static/php/leftbar.php';
?>

<div id="alinhar-h">
<div id="comunidadet">

<div id="avatare">
	<img src="/img/default.png"/>
	<h1><?php
  $str2 = nl2br( $comunidade['nome'] );
  $len2 = strlen( $str2 );
  $max2 = 10;
   if( $len2 <= $max2 )
   echo $str2;
  else    
   echo substr( $str2, 0, $max2 ) . '...'?></h1>
</div>

</div>

<div id="footer-c">

<div id="buttons">

<button>Entrar</button>
<button>Convidar amigos</button>

</div>


<style type="text/css">
	#comunidadet{
		background-image: url(/img/backgroundp.jpg);
	}
</style>

</div>

</body>
</html>
<?php } ?>