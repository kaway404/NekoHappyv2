<style>
.background-cap{
	background-image: url(http://eskipaper.com/images/anime-backgrounds-1.jpg);
}
</style>


<div id="alinhar-h" id="fallen4">
<div class="notice" id="fallen3">
	<p>Crie sua primeira comunidade</p>
</div>
<div class="profile-cap" id="caper">
<div class="background-cap"></div>
<center>
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-cap"/>
<a class="eto" href="profile.php?id=<?php echo $user['id']; ?>"><h1 class="bakero"><?php echo $user['nome'] ?></h1></a>
</center>
</div>
<div class="main" id="fallen2">
<div class="publicar" id="pub" id="fallen5">
<textarea class="public" placeholder="No que estás a pensar?" id="content"></textarea>
<div class="btn-sc" id="publish"><div class="btnc"><span>Publicar</span></div></div>
</div>
<div class="ava-t-e" id="photo">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
</div>

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
		<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
		</div>
		<svg class="fixada"  height="22" version="1.1" width="22" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><g transform="translate(0 -1028.4)"><path d="m9.5999 1.4564 1.5501 4.7699 5.015 0.0002-4.057 2.9482 1.55 4.7703-4.0581-2.948-4.0577 2.948 1.5497-4.7703-4.0575-2.9482 5.0154-0.0002z" fill="#f1c40f" stroke="#f39c12" stroke-width=".69755" transform="matrix(1.4336 0 0 1.4336 -1.7602 1028.9)"/></g></svg>

		<a href="profile.php?id=<?php echo $people['id']; ?>"><p class="name-post"><?php echo $people['nome'] ?> <?php echo $people['sobrenome'] ?> 	</p></a>

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
                                                    $msg = str_replace($emotions, $imgs, $coment['texto']);
                                                    echo $msg;
                                                    ?></p>

                                                    <div class="post-bottom">
	<div class="feed">
	 <a class="like-btn">
      <div class="reaction-box">
        <div id="gosteireact" class="reaction-icon">
        <img src="/static/img/react/like.gif" class="react-icon-b-gif">
         <label>Gostei</label>
        </div>
        <div class="reaction-icon>
        	<img src=/static/img/react/amei.gif" class="react-icon-b-gif">
         <label>Amei</label>
        </div>
        <div class="reaction-icon">
        	<img src="/static/img/react/odeio.gif" class="react-icon-b-gif">
         <label>Odeio</label>
        </div>
        <div class="reaction-icon">
        	<img src="/static/img/react/haha.gif" class="react-icon-b-gif">
         <label>Haha</label>
        </div>
      </div>
  </a>
		</div>
	</div>

		</div>


<?php endforeach; endforeach; ?>

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
		<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
		</div>

		<a href="profile.php?id=<?php echo $people['id']; ?>"><p class="name-post"><?php echo $people['nome'] ?> <?php echo $people['sobrenome'] ?></p></a>

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
                                                    $msg = str_replace($emotions, $imgs, $coment['texto']);
                                                    echo $msg;
                                                    ?></p>
<div class="post-bottom">
	<div class="feed">
<?php
$comentid = $coment['id'];
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$comentiduser = $coment['id'];
$likes = DBRead( 'like', "WHERE idpost = $comentiduser and iduser = $iduser ORDER BY id DESC" );
if (!$likes)
echo '<a class="like-btn" id="kawaii<?php echo $comentid; ?>">';
else  
	foreach ($likes as $like):
?>
	 <a class="like-btn ativolike" id="kawaii<?php echo $comentid; ?>">
	 <?php endforeach;?>

      <div class="reaction-box">
        <div class="reaction-icon like" id="gosteireact">
        <img src="/static/img/react/like.gif" class="react-icon-b-gif">
         <label>Gosto</label>
        </div>
        <div class="reaction-icon love">
        	<img src=/static/img/react/amei.gif class="react-icon-b-gif">
         <label>Amei</label>
        </div>
        <div class="reaction-icon hate">
        	<img src="/static/img/react/odeio.gif" class="react-icon-b-gif">
         <label>Odeio</label>
        </div>
        <div class="reaction-icon laug">
        	<img src="/static/img/react/haha.gif" class="react-icon-b-gif">
         <label>Haha</label>
        </div>
      </div>
  </a>
		</div>
	</div>

		</div>


<?php
$dbCheck = DBRead( 'like', "WHERE id and idpost = $comentiduser and iduser = $iduser" );

if( $dbCheck ){
?>
<script>
	 $('#gosteireact').click(function(){
        	$.post('/static/php/react.php?post=<?php echo $coment['id']; ?>', function (html) {
			});
			$('.like-btn').removeClass("ativolike");
			return false;
   		 });
</script>
<?php } else{ ?>
<script>
	 $('#gosteireact').click(function(){
        	$.post('/static/php/react.php?post=<?php echo $coment['id']; ?>', function (html) {
			});
			$('.like-btn').addClass("ativolike");
			return false;
   		 });
</script>
<?Php } ?>

</script>


<?php endforeach; endforeach;?>


</div>


<?php 
if($user['configurado'] == 0){
?>

<div class="preto" id="preto"></div>

<div class="track" id="track">

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
<div class="btn-sb" id="click3"><div class="btnb"><span>Finalizar</span></div></div>
</div>

</div>

</div>

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



<script type="text/javascript" src="static/js/publicacao.js"></script>