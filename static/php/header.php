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

<div class="down-e" id="down">
<svg height="20px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M98.9,184.7l1.8,2.1l136,156.5c4.6,5.3,11.5,8.6,19.2,8.6c7.7,0,14.6-3.4,19.2-8.6L411,187.1l2.3-2.6  c1.7-2.5,2.7-5.5,2.7-8.7c0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2,0-16.6,7.1-16.6,15.8C96,179.1,97.1,182.2,98.9,184.7z"/></svg>
<div class="branco" id="menua">
<div class="avatar-t">
<img src="/img/default.png" width="100%" height="100%" style="border-radius: 10px;"/>
</div>
</div>
</div>

<div class="menu" id="menu">
<a href="profile.php?id=<?php echo $user['id']; ?>"><li>Perfil</li></a>
<li>Opções</li>
<li>Comunidades</li>
<a href="comunitycreate"><li>Criar comunidade</li></a>
<a href="sair"><li>Sair</li></a>
</div>

<div id="box-s-h">
<ul class="src">
</ul>
</div>

<div id="news">
<li>
<div id="newsnot1" class="newsnot"><span>0</span></div>
	<svg id="Layer_1" style="enable-background:new 0 0 16 16;" version="1.1" viewBox="0 0 16 16" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M7.516,11.094C7.688,10.609,9,8.938,9,6c0-1.657-1.343-3-3-3S3,4.343,3,6c0,2.938,1.313,4.609,1.484,5.094  C2.953,11.234,0,12.211,0,14c0,0.422,0.336,1,1,1h10c0.664,0,1-0.578,1-1C12,12.211,9.047,11.234,7.516,11.094z M12.648,8.039  C12.889,7.311,14,5.273,14,4c0-1.657-1.344-3-3-3c-0.84,0-1.599,0.346-2.143,0.902C10.15,2.808,11,4.306,11,6  c0,1.521-0.297,2.779-0.645,3.748c0.775,0.307,1.527,0.723,2.146,1.252H15c0.578,0,1-0.453,1-1C16,8.742,13.578,8.211,12.648,8.039z  "/></svg>
	<p>Amizades</p>
</li>
<li id="now">
<div id="newsnot2" class="newsnot"><span>0</span></div>
	<svg data-name="Livello 1" id="Livello_1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><title/><path d="M101.39,92.84,96.22,39.68A32,32,0,0,0,77.67,13.59a13.67,13.67,0,0,0-27.33,0,32.05,32.05,0,0,0-18.55,26.1L26.6,92.9a15.09,15.09,0,0,0-13.6,15v3.87a3,3,0,0,0,3,3H42.3a24.39,24.39,0,0,0,43.4,0H112a3,3,0,0,0,3-3V107.1A14.32,14.32,0,0,0,101.39,92.84ZM64,6a7.67,7.67,0,0,1,7.35,5.44,33,33,0,0,0-14.69,0A7.67,7.67,0,0,1,64,6Zm0,116a18.34,18.34,0,0,1-14.64-7.26H78.65A18.29,18.29,0,0,1,64,122Zm45-13.26H19v-.87a9.09,9.09,0,0,1,9.11-9h1.22a3,3,0,0,0,3-2.71l5.43-55.85A26.07,26.07,0,0,1,54.43,18.37l.1,0a26.88,26.88,0,0,1,18.89,0l.32.12A26.09,26.09,0,0,1,90.25,40.26l5.43,55.85a3,3,0,0,0,3,2.71h2A8.31,8.31,0,0,1,109,107.1Z"/></svg>
	<p>Notificação</p>
</li>
</div>

<div id="newsdiv">
</div>


<input type="text" placeholder="Buscar pessoas e comunidades." class="buscar" id="busca"/>

<script src="static/js/menu.js" type="text/javascript"></script>

<script>

function news1(){
	$.post('/static/php/news.php', function (html) {
				$('#newsnot1').html(html);
		});
}

var milissegundos = 1000;

// Executa a função a cada intervalo de tempo
var interval = setInterval(function(){
  	$.post('/static/php/news.php?news=1', function (html) {
				$('#newsnot2').html(html);
		});

  	$.post('/static/php/newt.php?amizades=1', function (html) {
				$('#newsnot1').html(html);
		});

  	$.post('/static/php/listnew.php?news=1', function (html) {
				$('#newsdiv').html(html);
		});


  }, milissegundos);
</script>

<?Php } ?>
</div>
</header>