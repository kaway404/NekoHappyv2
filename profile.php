<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
$idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
$usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
$usercry = $usercry[0];

$idpeople = DBEscape( strip_tags(trim($_GET['id']) ) );
$people = DBRead('user', "WHERE id = '{$idpeople}' LIMIT 1 ");
$people = $people[0];
require 'static/php/veried.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>NekoHappy |  <?php echo $people['nome']; ?></title>
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
require 'static/php/header.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>
<div id="alinhar-h">
<div class="nani-h">

<div class="wow">
</div>
<center>
<div class="profilephoto" id="photo">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
</div>
<h1 class="name-batito" ><?php echo $people['nome']; ?>  <?php echo $people['sobrenome']; ?></h1>
</center>

</div>
</div>

<?php } else{ ?>

<div id="alinhar-h">
<div class="nani-h">

<div class="wow">
</div>
<center>
<div class="profilephoto" id="photo">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
</div>
<h1 class="name-batito" ><?php echo $people['nome']; ?>  <?php echo $people['sobrenome']; ?></h1>
</center>

</div>

<div class="postagens semlogin">
	<h1>Faça o login para ver mais <a href="/?login" class="lgren">Clique aqui</a></h1>
</div>

</div>

<?php } ?>
</body>
</html>