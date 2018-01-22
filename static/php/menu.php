<style>
.background-cap{
	background-image: url(http://eskipaper.com/images/anime-backgrounds-1.jpg);
}
</style>


<div id="alinhar-h">
<div class="notice">
	<p>Crie sua primeira comunidade</p>
</div>
<div class="profile-cap" id="caper">
<div class="background-cap"></div>
<center>
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-cap"/>
<a class="eto" href="profile.php?id=<?php echo $user['id']; ?>"><h1 class="bakero"><?php echo $user['nome'] ?></h1></a>
</center>
</div>
<div class="main">
<div class="publicar" id="pub">
<textarea class="public" placeholder="No que estás a pensar?"></textarea>
</div>
<div class="ava-t-e" id="photo">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
</div>
<div class="postagens">
</div>
<div class="postagens">
</div>
</div>

<?php 
if($user['configurado'] == 0){
?>

<div class="preto" id="preto"></div>

<div class="track">

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
