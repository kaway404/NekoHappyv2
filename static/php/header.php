<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
    $user = $user[0];
?>
<header id="header">
<div id="alinhar-h">
<a href="/"><h1 id="logo">NekoHappy</h1></a>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>
<div class="preto2" id="preto2" style="display: none"></div>
<input type="text" placeholder="Buscar pessoas e comunidades." class="buscar" id="busca"/>
<div class="down-e" id="down">
<svg height="20px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M98.9,184.7l1.8,2.1l136,156.5c4.6,5.3,11.5,8.6,19.2,8.6c7.7,0,14.6-3.4,19.2-8.6L411,187.1l2.3-2.6  c1.7-2.5,2.7-5.5,2.7-8.7c0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2,0-16.6,7.1-16.6,15.8C96,179.1,97.1,182.2,98.9,184.7z"/></svg>
<div class="branco" id="menua">
<div class="avatar-t">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" width="100%" height="100%" style="border-radius: 10px;"/>
</div>
</div>
</div>

<div class="menu" id="menu">
<a href="profile.php?id=<?php echo $user['id']; ?>"><li>Perfil</li></a>
<li>Opções</li>
<li>Comunidades</li>
<a href="?comunidadecreate"><li>Criar comunidade</li></a>
<a href="logout.php"><li>Sair</li></a>
</div>

<div id="box-s-h">
<ul class="src">
</ul>
</div>
<script src="static/js/menu.js" type="text/javascript"></script>
<?Php } ?>
</div>
</header>