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
	<?php if(!isset($_GET['id']) || empty($_GET['id'])){ ?>
<title>NekoHappy |  <?php echo $user['nome']; ?></title>
	<?php } ?>
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
	<link rel="stylesheet" type="text/css" href="/static/css/screen.css"/>
</head>
<body id="momer">

<?php
require 'static/php/leftbar.php';
?>s

<?php
require 'static/php/header.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>
<div id="alinhar-h">


<?php if(!isset($_GET['id']) || empty($_GET['id'])){ ?>

<div class="nani-h" id="batatao">
<div class="wow">
<div class="about-t" style="bottom: 0;">
<button>Configurar perfil</button>
<button>Minhas atividades</button>
</div>
</div>
<center>
<div class="profilephoto" id="photo">
<img src="/img/default.png" class="avatar-post"/>
</div>
<h1 class="name-batito" ><?php echo $user['nome']; ?>  <?php echo $user['sobrenome']; ?></h1>
</center>
</div>

<?php } else if (!$people){?>
<div class="postagenst semlogin">
	<h1>Essa página não foi encontrada <a href="/" class="lgren">Clique aqui para voltar</a></h1>
</div>
<?php } else{?>

<?php
if($user['admin'] == 0){
if($user['id'] <> $people['id']){
if($people['priv'] == 1){?>
<div class="postagenst semlogin">
	<h1>Esse perfil é privado <a href="/" class="lgren">Clique aqui para voltar</a></h1>
</div>
<?php } } } else{ ?>

<div class="wow">

<?php
if($people['id'] <> $user['id']){
?>
<div class="about-t">
<button>Adicionar como amigo</button>
<button>Bloquear</button>
</div>
<?php } else{?>
<div class="about-t">
<button>Configurar perfil</button>
<button>Minhas atividades</button>
</div>
<?php } ?>
</div>
<center>
<div class="profilephoto" id="photo">
<img src="/img/default.png" class="avatar-post"/>
</div>
<h1 class="name-batito" ><?php echo $people['nome']; ?>  <?php echo $people['sobrenome']; ?></h1>
</center>
</div>

<div class="about">

</div>

<?php } ?>


<div id="box-s-ht">
<ul class="srcc">
</ul>
</div>



<?php } ?>

</div>


<div id="bottomphone">
<input type="text" placeholder="Buscar pessoas e comunidades." class="buscarr" id="buscat"/>
</div>


<?php } else{ ?>

<div id="alinhar-h">
<div class="nani-h">

<div class="wow">
</div>
<center>
<div class="profilephoto" id="photo">
<img src="/img/default.png" class="avatar-post"/>
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