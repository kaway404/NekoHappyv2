<div class="leftbar" id="leftbar">
	<div class="covers">
	</div>
	<a href="/profile.php?id=<?php echo $user['id']; ?>">
	<img id="uaiii" src="/img/<?Php echo $user['photo'];?>" class="avatadr"/>
	<span id="nanita"><?php echo $user['nome'];?> <?php echo $user['sobrenome'];?></span></a>
			<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peopleid = $user['id'];
$comunidadest = DBRead( 'comunidades', "WHERE id and iduser = $peopleid  ORDER BY id DESC LIMIT 10" );
if (!$comunidadest)
echo '';
else  
  foreach ($comunidadest as $comunidadet):
?>
<a href="/comunidade.php?id=<?php echo $comunidadet['killua']; ?>"><img src="/img/default.png" class="baka" style="top: 10px; cursor: pointer;"/></a>
<?php endforeach;?>
</div>

<style type="text/css">
.covers{
	background-image: url(/img/back.jpg);
}
</style>

<script type="text/javascript">
	var leftbar = document.getElementById('leftbar');
</script>