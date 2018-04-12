
<?php
require 'database.php';
require 'config.php';
?>

<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
    $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $thecry = DBEscape( strip_tags( trim( $_COOKIE['thecry'] ) ) );
    $user   = DBRead( 'user', "WHERE id = '{$iduser}' and thecry  = '{$thecry}'  LIMIT 1" );
?>

<?php
$coments = DBRead( 'post', "WHERE id and destaque = 0 and tipo = 1 and status = 0 ORDER BY id DESC" );
if (!$coments)
echo '';
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
		<img src="/img/<?Php echo $people['photo'];?>" class="avatar-post"/>
		</div>

		<a href="profile.php?id=<?php echo $people['id']; ?>"><p class="name-poster"><?php echo $people['nome'] ?> <?php echo $people['sobrenome'] ?></p></a>

		<p class="cont-d"> <?php 
                                                    $emotions = array(':)', ':@', '8)', ':3', ':(', ';)', ':O', ':o', ':P', ':p', '<3', '\n');
                                                    $imgs = array(
                                                        '<img id="emoticon" src="/static/img/emotions/nice.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/angry.png"/>',
                                                        '<img id="emoticon" src="/static/img/emotions/cool.png"/>',
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
     <img src="/img/<?Php echo $people['photo'];?>" class="avatar-post"/>
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
     <img src="/img/<?Php echo $user['photo'];?>" class="avatar-post"/>
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

<?php endforeach; endforeach; }?>

<div id="respostaba">

</div>

