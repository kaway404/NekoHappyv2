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
<?php if(!isset($_GET['id']) || empty($_GET['id'])){ ?>
<div class="postagenst semlogin">
	<h1>Essa página não foi encontrada <a href="/" class="lgren">Clique aqui para voltar</a></h1>
</div>
<?php } else if (!$comunidade){?>
<div class="postagenst semlogin">
	<h1>Essa página não foi encontrada <a href="/" class="lgren">Clique aqui para voltar</a></h1>
</div>
<?php } else{?>
<div id="comunidadet">

<div id="avatare">
	<img src="/img/default.png"/>
	<h1><?php
  $str2 = nl2br( $comunidade['nome'] );
  $len2 = strlen( $str2 );
  $max2 = 9;
   if( $len2 <= $max2 )
   echo $str2;
  else    
   echo substr( $str2, 0, $max2 ) . '...'?></h1>
</div>

</div>

<div id="footer-c">

<div id="buttons">

<?php
if($comunidade['iduser'] == $iduser){
?>
<button>Convidar amigos</button>
<button>Editar</button>
<a href="/comunidade.php?id=<?php echo $idcomu;?>&viewmember=1"><button>Membros</button></a>
<?Php }else{?>
<?php
require 'db.php';
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$idgroup = DBEscape( strip_tags(trim($_GET['id']) ) );
$membro = mysql_query("SELECT * FROM neko_membros WHERE id and iduser = $iduser and idgroup = $idgroup");
$membros = mysql_num_rows($membro);
if($membros >= 1){
?>
<button id="entrar">Sair</button>
<?php } else{?>
<button id="entrar">Entrar</button>
<?php } ?>

<button>Convidar amigos</button>
<a href="/comunidade.php?id=<?php echo $idcomu;?>&viewmember=1"><button>Membros</button></a>
<?php } ?>
</div>


<style type="text/css">
	#comunidadet{
		background-image: url(/img/backgroundp.jpg);
	}
</style>

</div>



<div class="mainp">

<?php
if($_GET['viewmember'] == 1){
?>


<h1>Membros</h1>
<br>

<?php
$comunidades = DBRead( 'comunidades', "WHERE id = $idcomu ORDER BY id DESC" );
if (!$comunidades)
echo '';
else  
  foreach ($comunidades as $comunidade):
?>
<?php
if($comunidade['iduser'] == $iduser){
?>

<a href="/profile.php?id=<?php echo $user['id'];?>" class="peoples" title="<?php echo $user['nome'] ?> <?php echo $user['sobrenome'] ?>">
<img src="/img/<?php echo $user['photo']; ?>">
</a>

<?php }else{ ?>
<?php
$comunidadeidd = $comunidade['id'];
$membros = DBRead( 'membros', "WHERE id and idgroup = $comunidadeidd ORDER BY id DESC" );
if (!$membros)
echo '<h2>Nenhum membro</h2>';
else  
  foreach ($membros as $membro):
?>
<?php
$peoplems = $membro['iduser'];
$peoples = DBRead( 'user', "WHERE id = $peoplems ORDER BY id DESC LIMIT 10" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):
?>


<a title="<?php echo $people['nome'] ?> <?php echo $user['sobrenome'] ?>" href="/profile.php?id=<?php echo $people['id'];?>" class="peoples">
<img src="/img/<?php echo $people['photo']; ?>">
</a>


<?php endforeach; endforeach; } endforeach;?>


<?php } } ?>

</div>


<div id="happyhour">

<div class="hourstimea" id="wow">

</div>

</div>

<div id="resposta"></div>

<script type="text/javascript">
$(document).ready(function() {
    $("#entrar").click(function() {
        var group = <?php echo $idgroup;?>;
        $.post("/static/php/entrargrupo.php", {group: group},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});

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