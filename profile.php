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
require 'static/php/header.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>

<?php
require 'static/php/leftbar.php';
?>

<div id="background-p"></div>
<div id="background-t"></div>


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

<?php
$conn = mysql_connect('localhost','root','') or die (mysql_error);
$db=mysql_select_db('nekohappy', $conn) or die (mysql_error);
$iduser = DBEscape( strip_tags(trim($_GET['id']) ) );
$totaldecomunidades = mysql_query("SELECT * FROM neko_comunidades WHERE id and iduser = '".$iduser."' ");
$totaldecomunidades = mysql_num_rows($totaldecomunidades);
?>

<div id="alinhar-h">

<div class="about">
<div class="posta">

<div id="header-p">
	<li class="ativo">Feed</li>
	<li>Amigos</li>
	<li><div id="newsnot1" class="feednot"><span>
		<?php echo $totaldecomunidades;?>
	</span></div>Comunidades</li>
</div>


<div id="proezas">
	<p>Proezas</p>
</div>


<div id="feed">
<?php
$peopleidt = $people['id'];
$coments = DBRead( 'post', "WHERE id and destaque = 0 and iduser = $peopleidt  ORDER BY id DESC" );
if (!$coments)
echo '<div class="postagens" id="blank"><p class="bakeero">Sem postagem :/</p></div>';
else  
	foreach ($coments as $coment):	 
?>
<?php
$comentiduser = $coment['iduser'];
$peoples = DBRead( 'user', "WHERE id = $comentiduser ORDER BY id DESC LIMIT 1" );
if (!$peoples)
echo '';	
else  
	foreach ($peoples as $people):	 
?>

<div class="postagens" id="fallen">
		<div class="ava-t-e" id="photo" style="top: 17px !important;">
		<img src="/img/default.png" class="avatar-post"/>
		</div>

		<a href="profile.php?id=<?php echo $people['id']; ?>"><p class="name-poster"><?php echo $people['nome'] ?> <?php echo $people['sobrenome'] ?></p></a>

		<p class="cont-d"> <?php 
                                                    $emotions = array(':)', ':@', '8)', ':D', ':3', ':(', ';)', ':O', ':o', ':P', ':p', '<3', '\n');
                                                    $imgs = array(
                                                        '<img id="emoticon" src="/static/img/emotions/nice.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/angry.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/cool.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/happy.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/ooh.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/sad.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/right.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/ooooh.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/ooooh.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/pi.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/pi.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/heart.png"/>',
                                                        '<br>'
                                                    );
                                                    $msg = str_replace($emotions, $imgs, $coment['texto']);
                                                    echo $msg;
                                                    ?></p>
                                                   <?php
  $conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
  $banco = mysql_select_db($dbp);
  $comentiduser = $coment['id'];
  $totalcurtida = mysql_query("SELECT * FROM neko_like WHERE idpost = $comentiduser ");
  $totalcurtida = mysql_num_rows($totalcurtida);
  $totalcurtidamenos = $totalcurtida - 1;
                                                     ?>
<div class="post-bottom">
	<div class="feed">
    <p class="totallike" id="totallike<?php echo $comentiduser ?>">
      <?php
    $dbCheck = DBRead( 'like', "WHERE id and idpost = $comentiduser and iduser = $iduser" );
    if( $dbCheck ){
  ?>
    Tu e outras <?php echo $totalcurtidamenos; ?>
    <?php } else{?>
    <?php echo $totalcurtida; ?> curtiram isso
    <?php } ?>
  </p>
<?php
$comentid = $coment['id'];
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$comentiduser = $coment['id'];
$likes = DBRead( 'like', "WHERE idpost = $comentiduser and iduser = $iduser ORDER BY id DESC" );
if (!$likes)
echo '<a class="like-btn" id="kawaii'.$comentiduser.'">';
else  
	foreach ($likes as $like):
?>
	 <a class="like-btn ativolike" id="kawaii<?php echo $comentiduser; ?>">
	 <?php endforeach;?>
    </a>
     <a class="like-btn2" id="comentar<?php echo $comentiduser; ?>"></a>


<?php
$dbCheck = DBRead( 'like', "WHERE id and idpost = $comentiduser and iduser = $iduser" );

if( $dbCheck ){
?>
<script>
   $(document).ready(function() {
    $("#kawaii<?php echo $comentiduser; ?>").click(function() {
        var post = <?php echo $coment['id'] ?>; 
        $.post("/static/php/react.php", {post: post},
        function(data){
         $("#respostaba").html(data);
         }
         , "html");
         return false;
    });
});
</script>
<?php } else{ ?>
<script>
   $(document).ready(function() {
    $("#kawaii<?php echo $comentiduser; ?>").click(function() {
        var post = <?php echo $coment['id'] ?>; 
        $.post("/static/php/react.php", {post: post},
        function(data){
         $("#respostaba").html(data);
         }
         , "html");
         return false;
    });
});
</script>
<?Php } ?>

		</div>
	</div>

   <div class="comentarios" id="comentarios<?php echo $comentiduser; ?>">

      <div class="taber">

<script>
var kawaii<?php echo $comentiduser; ?> = document.getElementById('kawaii<?php echo $comentiduser; ?>');
var comentarios<?php echo $comentiduser; ?> = document.getElementById('comentarios<?php echo $comentiduser; ?>')

 $('#comentar<?php echo $comentiduser; ?>').click(function(){
          if (comentarios<?php echo $comentiduser; ?>.style.display === "block") {
             comentarios<?php echo $comentiduser; ?>.style = "display: none;";
          } else {
              comentarios<?php echo $comentiduser; ?>.style = "display: block;";
           }
       });

</script>

<?php
$postid = $coment['id'];
$coments = DBRead( 'comment', "WHERE id and idpost = $postid ORDER BY id DESC" );
if (!$coments)
echo '<p id="feelsba'.$postid.'" style="font-size: 18px; padding: 5px;">Não há nenhum comentario</p>';
else  
  foreach ($coments as $coment):   
?>
<?php
$comentiduser = $coment['iduser'];
$peoples = DBRead( 'user', "WHERE id = $comentiduser ORDER BY id DESC LIMIT 1" );
if (!$peoples)
echo '';  
else  
  foreach ($peoples as $people):   
?>

      <div class="coment">
      <div class="ava-t-sd" id="photo">
     <img src="/img/default.png" class="avatar-post"/>
    </div>
    <p class="name-post"><?php echo $people['nome'] ?> <?php echo $people['sobrenome'] ?>  <span class="commentpostiduq"><?php echo $coment['texto']; ?></span> </p>
    </div>

  <?php endforeach; endforeach;?>

<?php
$postid = $coment['id'];
?>

    <div class="space<?php echo $postid ?>"></div>
<div id="flash<?php echo $postid ?>"></div>
<div id="show<?php echo $postid ?>"></div>

  </div>

    <div class="eooqsa">
      <div class="ava-t-sde" id="photo">
     <img src="/img/default.png" class="avatar-post"/>
   </div>
   <form>
    <input type="text" placeholder="Digite seu comentario aqui!" id="comment<?php echo $postid ?>" class="helloe"/>
    <button class="btnt" id="nani<?php echo $postid ?>">Comentar</button>
  </form>
    </div>
  </div>

<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$(function() {
$("#nani<?php echo $postid ?>").click(function() {
var textcontent = $("#comment<?php echo $postid ?>").val();
var dataString = 'content='+ textcontent;
if(textcontent=='')
{
$("#fuck").text("Você não pode deixar o comentario vazio.");
msg.style = "display: block";
}
else
{
$.ajax({
type: "POST",
url: "static/php/comment.php?idpost=<?php echo $coment['id']; ?>",
data: dataString,
cache: true,
success: function(html){
  document.getElementById('comment<?php echo $postid ?>').value='';
$("#show<?php echo $postid ?>").after(html);
$("#flash<?php echo $postid ?>").hide();
$("#content<?php echo $postid ?>").focus();
}  
});
}
return false;
});
});

 $('#close').click(function(){
          msg.style = "display: none;";
       });

</script>


		</div>

<script>
var kawaii<?php echo $comentiduser; ?> = document.getElementById('kawaii<?php echo $comentiduser; ?>');
</script>



<?php endforeach; endforeach;?>

<div id="respostaba">

</div>


</div>


</div>
</div>

</div>

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

<div class="postagenst semlogin">
	<h1>Faça o login para ver mais <a href="/?login" class="lgren">Clique aqui</a></h1>
</div>

</div>

<?php } ?>
</body>
</html>