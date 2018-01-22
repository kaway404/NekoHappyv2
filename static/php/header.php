<header id="header">
<div id="alinhar-h">
<a href="/"><h1 id="logo">NekoHappy</h1></a>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>
<input type="text" placeholder="Buscar pessoas e comunidades." class="buscar" id="busca"/>
<div class="avatar-t">
<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" width="100%" height="100%" style="border-radius: 50%;"/>
</div>
<?Php } ?>
</div>
</header>