<script  src="/static/js/index.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

 <link rel="stylesheet" href="/static/css/react.css">
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<?php
$conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
$banco = mysql_select_db($dbp);
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
$content=mysql_real_escape_string($_POST['content']);
$form2['tim'] = date('Y-m-d H:i:s');
$form2['iduser'] = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$form2['tipo'] = 1;
$form2['destaque'] = 0;
$form2['texto'] = mysql_real_escape_string($_POST['content']);
$coinsadd = array('coins' => $user['coins'] + 10);
DBUpDate( 'user', $coinsadd, "id = '{$user['id']}'" );
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

	if( DBCreate( 'post', $form2 ) ){
		?>
		<script>
			var blank = document.getElementById('blank');
			blank.style = "display: none";
		</script>
	<div class="postagens" id="fallen">
        <div class="ava-t-e" id="photo">
        <img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
        </div>

        <a href="profile.php?id=<?php echo $user['id']; ?>"><p class="name-poster"><?php echo $user['nome'] ?> <?php echo $user['sobrenome'] ?></p></a>

        <p class="cont-d"> <?php 
                                                    $emotions = array(':)', ':@', '8)', ':D', ':3', ':(', ';)', ':O', ':o', ':P', ':p', '<3');
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
                                                        '<img id="emoticon" src="/static/img/emotions/heart.png"/>'
                                                    );
                                                    $msg = str_replace($emotions, $imgs, $content);
                                                    echo $msg;
                                                    ?></p>

    <?php
    $busca2  = "SELECT id FROM neko_post WHERE texto = '".$content."' and iduser = $iduser";
    $identificacao2 = mysql_query($busca2);
    $retorno2 = mysql_fetch_array($identificacao2);
    $postid = $retorno2['id'];
    ?>

<div class="post-bottom">
    <div class="feed">
<?php
$comentid = $postid;
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$comentiduser = $postid;
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

        </div>
    </div>


        </div>
<script>
var kawaii<?php echo $comentiduser; ?> = document.getElementById('kawaii<?php echo $comentiduser; ?>');
</script>

<?php
$dbCheck = DBRead( 'like', "WHERE id and idpost = $comentiduser and iduser = $iduser" );

if( $dbCheck ){
?>
<script>
   $(document).ready(function() {
    $("#kawaii<?php echo $comentiduser; ?>").click(function() {
        var post = <?php echo $postid;?>; 
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
        var post = <?php echo $postid; ?>; 
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
?>

    <div class="space<?php echo $comentiduser ?>"></div>
<div id="flash<?php echo $comentiduser ?>"></div>
<div id="show<?php echo $comentiduser ?>"></div>

  </div>

    <div class="eooqsa">
      <div class="ava-t-sde" id="photo">
     <img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
   </div>
    <input type="text" placeholder="Digite seu comentario aqui!" id="comment<?php echo $comentiduser ?>" class="helloe"/>
    <button class="btnt" id="nani<?php echo $comentiduser ?>">Comentar</button>
    </div>
  </div>

<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$(function() {
$("#nani<?php echo $comentiduser ?>").click(function() {
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
$("#show<?php echo $comentiduser ?>").after(html);
document.getElementById('comment<?php echo $comentiduser ?>').value='';
$("#flash<?php echo $comentiduser ?>").hide();
$("#content<?php echo $comentiduser ?>").focus();
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



<div id="respostaba">

</div>


</div>
		<?php } else{?>

            <script>
            $("#fuck").text("Ocorreu um erro.");
            msg.style = "display: block";
            </script>

        <?php } ?>

<?php } ?>