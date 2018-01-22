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


<?php
$coments = DBRead( 'post', "WHERE id ORDER BY id DESC" );
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

		<p class="cont-d"><?php echo $coment['texto']; ?></p>

		</div>

<?php endforeach; endforeach; ?>

<div class="space"></div>
<div id="flash"></div>
<div id="show"></div>



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
	<span>Escreva algo para publicar</span>
	<div class="btn-sd" id="close"><div class="btnd"><span>Certo</span></div></div>
</div>
</div>
</center>



<script type="text/javascript" src="static/js/publicacao.js"></script>