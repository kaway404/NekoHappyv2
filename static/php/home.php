<div class="apresentation">
	<div id="alinhar-h">
	<h1 id="logot">NekoHappy</h1>
	<center>
	<a href="?registro"><div class="btn-s"><div class="btn"><span>Registrar</span></div></div></a>
	<a href="?login"><div class="btn-s"><div class="btn"><span>Logar-se</span></div></div></a>
	</center>
	</div>
</div>

<div class="holder">
<h1>SEUS INTERESSES... VEZES INFINITO</h1>
<span>No NekoHappy você encontra comunidades sobre tudo que você mais gosta.</span>
<div class="scroll">
<ul>
	<?php
$comunidades = DBRead( 'comunidades', "WHERE id ORDER BY id DESC" );
if (!$comunidades)
echo '';
else  
	foreach ($comunidades as $comunidade):	 
?>
<?php
$comentiduser = $comunidade['iduser'];
$peoples = DBRead( 'user', "WHERE id = $comentiduser ORDER BY id" );
if (!$peoples)
echo '';	
else  
	foreach ($peoples as $people):	 
?>
<li class="imesa">
	<div class="avatar"><img src="/img/<?php echo $people['photo'];?>" class="thumb"/></div>
	<img src="/img/default.png"/>
	<p><?php echo $comunidade['nome'];?></p>
</li>
<?php endforeach; endforeach; ?>
</ul>
</div>
</div>

<div class="inte">
<div id="alinhar-h">
<div class="sobre-inte">
<h1>MERGULHE FUNDO NO QUE MAIS GOSTA</h1>
<p>Chats, blogs, favoritos, enquetes e muito mais.</p>
</div>
</div>
</div>