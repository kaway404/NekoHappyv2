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
</head>
<body id="momer">
<?php
require 'static/php/header.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>
<div id="alinhar-h">

<?php if(!isset($_GET['id']) || empty($_GET['id'])){ ?>

<div class="nani-h" id="batatao">
<div class="wow">
</div>
<center>
<div class="profilephoto" id="photo">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
</div>
<h1 class="name-batito" ><?php echo $user['nome']; ?>  <?php echo $user['sobrenome']; ?></h1>
</center>
</div>


<?php 
if($user['configurado'] == 2){
?>


<div class="preto" id="preto"></div>

<div class="track" id="track">

<div id="pub" style="display: none;"></div>
<div id="photo" style="display: none;"></div>
<div id="caper" style="display: none;"></div>

<div class="track1" id="track1" style="display: none;">
<span>Isso aqui é onde você publica coisas no seu feed.</span>
<div class="btn-sb" id="click1"><div class="btnb"><span>Continuar</span></div></div>
</div>



<div class="track2" id="track2" style="display: none;">
<span>Isso aqui é o seu card, suas informações no NekoHappy.</span>
<div class="btn-sb" id="click2"><div class="btnb"><span>Continuar</span></div></div>
</div>

<div class="track3" id="track3" style="display: none;">
<span>Isso aqui é sua barra de pesquisa do NekoHappy.</span>
<div class="btn-sb" id="click3"><div class="btnb"><span>Continuar</span></div></div>
</div>

<div class="track4" id="track4" style="display: none;">
<span>Isso aqui é o menu do usuario.</span>
<div class="btn-sb" id="click4"><div class="btnb"><span>Finalizar</span></div></div>
</div>

<div class="track5" id="track5">
<span>Isso é o seu perfil. Você pode entrar em perfil de outras pessoas!</span>
<div class="btn-sb eta" id="click5"><div class="btnb"><span>Finalizar</span></div></div>
</div>

<div id="resposta"></div>

<script type="text/javascript" src="static/js/pratica.js"></script>

<?Php } ?>

<?php } else if (!$people){?>
<div class="postagens semlogin">
	<h1>Essa página não foi encontrada <a href="/" class="lgren">Clique aqui para voltar</a></h1>
</div>
<?php } else{?>


<div class="wow">
<div class="about-t">
<button>Adicionar como amigo</button>
<button>Bloquear</button>
</div>

</div>
<center>
<div class="profilephoto" id="photo">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
</div>
<h1 class="name-batito" ><?php echo $people['nome']; ?>  <?php echo $people['sobrenome']; ?></h1>
</center>
</div>

<div class="about">

</div>

<?php } ?>

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