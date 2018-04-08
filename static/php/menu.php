<style>
.background-cap{
	background-image: url(/img/back.jpg);
}
</style>


<div id="alinhar-h" id="fallen4">
<?php 
if(isset($_GET['comunidadecreate'])){
?>

<div class="comunidade">
<div class="body">
<h2 class="criando">Criando comunidade.</h2>
<p class="gostat">Crie uma comunidade do que mais gosta.<br> Pode ser uma comunidade de jogos, série, anime, banda etc... </p>

<div class="botoes-select">
  <div class="entre"></div>
<p>Entretenimento</p>
</div>

<div class="botoes-select">
  <div class="artista"></div>
<p>Artista/Banda</p>
</div>

</div>
</div>

<div id="bottomphone">
<input type="text" placeholder="Buscar pessoas e comunidades." class="buscarr" id="buscat"/>
</div>

<div id="box-s-ht">
<ul class="srcc">
</ul>
</div>


<?php } else{?>


<div class="notice" id="fallen3">
	<p>Crie sua primeira <a href="comunitycreate">comunidade</a>.</p>
</div>
<div class="profile-cap" id="caper">
<div class="background-cap"></div>
<center>
<img src="/img/default.png" class="avatar-cap"/>
<a class="eto" href="profile.php?id=<?php echo $user['id']; ?>"><h1 class="bakero"><?php echo $user['nome'] ?> <?php echo $user['sobrenome'] ?></h1></a>
<p>Dados:</p>
<p>Pontuação : <?php echo $user['coins']; ?> </p>
</center>
</div>
<div class="main" id="fallen2">
<div class="publicar" id="pub" id="fallen5">
<form>
<textarea class="public" placeholder="No que estás a pensar?" id="content"></textarea>
<div class="btn-sc" id="publish"><div class="btnc"><span>Publicar</span></div></div>
</form>
</div>
<div class="ava-t-e" id="photo">
<img src="/img/default.png" class="avatar-post"/>
</div>

<?php
$peoples = DBRead( 'user', "WHERE id <> $iduser ORDER BY id ASC LIMIT 10" );
if (!$peoples){
  echo '';
  }
  else{
?>
<div class="postagens sugerido">
  <h1>Amigos sugeridos</h1>
<div class="scrollamigo">
<ul>
<div class="bakerooo">
<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'user', "WHERE id <> $iduser ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):   
?>
<a href="profile.php?id=<?php echo $people['id']; ?>">
<li class="imesa">
  <img src="/img/default.png"/>
  <p> <?php
  $str2 = nl2br( $people['nome'] );
  $len2 = strlen( $str2 );
  $max2 = 14;
   if( $len2 <= $max2 )
   echo $str2;
  else    
   echo substr( $str2, 0, $max2 ) . '...'?></p>
</li>
</a>
<?php endforeach; ?>
</div>
</ul>
</div>
</div>
<?php } ?>

<div class="postagens ajuda">
<div class="help"></div>
<h1>Estamos atualizando o NekoHappy.</h1>
</div>

<?php
if(isset($_COOKIE['batata']) ){
?>
<h1 id="cont">Publicação fixada.</h1>
<?php
$coments = DBRead( 'post', "WHERE id and destaque > 0 ORDER BY id DESC" );
if (!$coments)
echo '<div class="postagens"><p class="bakeero">Sem publicações fixadas.</p></div>';
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

<div class="postagens" id="fallenl">
		<div class="ava-t-e" id="photo">
		<img src="/img/default.png" class="avatar-post"/>
		</div>
		<svg class="fixada"  height="22" version="1.1" width="22" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><g transform="translate(0 -1028.4)"><path d="m9.5999 1.4564 1.5501 4.7699 5.015 0.0002-4.057 2.9482 1.55 4.7703-4.0581-2.948-4.0577 2.948 1.5497-4.7703-4.0575-2.9482 5.0154-0.0002z" fill="#f1c40f" stroke="#f39c12" stroke-width=".69755" transform="matrix(1.4336 0 0 1.4336 -1.7602 1028.9)"/></g></svg>

		<a href="profile.php?id=<?php echo $people['id']; ?>"><p class="name-poster"><?php echo $people['nome'] ?> <?php echo $people['sobrenome'] ?> 	</p></a>

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
                                                         '<br/>'
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
                                                     ?>
                                        <div class="post-bottom">
  <div class="feed">
     <p class="totallike" id="totallike<?php echo $comentiduser ?>"><?Php echo $totalcurtida ?> Curtida</p>
<?php
$comentid = $coment['id'];
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$comentiduser = $coment['id'];
$likes = DBRead( 'like', "WHERE idpost = $comentiduser and iduser = $iduser ORDER BY id DESC" );
if (!$likes)
echo '<a class="like-btn" id="kawaii'.$comentid.'">';
else  
  foreach ($likes as $like):
?>
   <a class="like-btn ativolike" id="kawaii<?php echo $comentiduser; ?>">
   <?php endforeach;?>
    </a>
 <a class="like-btn2" id="comentar<?php echo $comentiduser; ?>"></a>
    </div>
  </div>

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


    <div class="comentarios" id="comentarios<?php echo $comentiduser; ?>">

      <div class="taber">


<?php
$postid = $coment['id'];
$coments = DBRead( 'comment', "WHERE id and idpost = $postid ORDER BY id DESC" );
if (!$coments)
echo '<p id="feelsba'.$postid.'" style="font-size: 22px;">Não há nenhum comentario</p>';
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
$("#show<?php echo $postid ?>").after(html);
document.getElementById('comment<?php echo $postid ?>').value='';
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
var comentarios<?php echo $comentiduser; ?> = document.getElementById('comentarios<?php echo $comentiduser; ?>')

 $('#comentar<?php echo $comentiduser; ?>').click(function(){
          if (comentarios<?php echo $comentiduser; ?>.style.display === "block") {
             comentarios<?php echo $comentiduser; ?>.style = "display: none;";
          } else {
              comentarios<?php echo $comentiduser; ?>.style = "display: block;";
           }
       });

</script>



<?php endforeach; endforeach; }?>

<div id="respostaba">

</div>

<h1 id="cont2">Publicaçãos normais.</h1>

<div class="space"></div>
<div id="flash"></div>
<div id="show"></div>

<?php
$coments = DBRead( 'post', "WHERE id and destaque = 0 ORDER BY id DESC" );
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
		<div class="ava-t-e" id="photo">
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


<?php 
if($user['configurado'] <= 1){
?>


<div class="preto" id="preto"></div>

<div class="track" id="track">

<?php 
if($user['configurado'] == 0){
?>
<center>
<div class="bakat" id="nanituto">
<div class="msg" id="boxmsg">
  <span id="fuck">Deseja fazer o tuturial?</span>
  <div class="btn-sd sim" id="simtuto"><div class="btnd"><span>Sim</span></div></div>
  <div class="btn-sd nao" id="naotuto"><div class="btnd"><span>Não</span></div></div>
</div>
</div>
</center>

<style>
#nanituto{
  display: block;
}

.nao{
  position: absolute;
  right: 90px;
}

</style>

<?php } ?>

<div id="batatao" style="display: none;"></div>

<div class="track1" id="track1">
<span>Isso aqui é onde você publica coisas no seu feed.</span>
<div class="btn-sb" id="click1"><div class="btnb"><span>Continuar</span></div></div>
</div>



<div class="track2" id="track2">
<span>Isso aqui é o seu card, suas informações no NekoHappy.</span>
<div class="btn-sb" id="click2"><div class="btnb"><span>Continuar</span></div></div>
</div>

<div class="track3" id="track3">
<span>Isso aqui é sua barra de pesquisa do NekoHappy.</span>
<div class="btn-sb" id="click3"><div class="btnb"><span>Continuar</span></div></div>
</div>

<div class="track4" id="track4">
<span>Isso aqui é o menu do usuario.</span>
<div class="btn-sb" id="click4"><div class="btnb"><span>Finalizar</span></div></div>
</div>

</div>

</div>

<style>
body{
    overflow-y: hidden;
}
</style>

<script type="text/javascript" src="static/js/pratica.js"></script>

<?php } ?>
</div>
<center>
<div class="bakat" id="bakaetes">
<div class="msg" id="boxmsg">
	<span id="fuck"></span>
	<div class="btn-sd" id="close"><div class="btnd"><span>Certo</span></div></div>
</div>
</div>
</center>

<div id="bottomphone">
<input type="text" placeholder="Buscar pessoas e comunidades." class="buscarr" id="buscat"/>
</div>

<div id="box-s-ht">
<ul class="srcc">
</ul>
</div>



<script type="text/javascript" src="static/js/publicacao.js"></script>

<?Php } ?> 