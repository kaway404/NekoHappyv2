<div class="leftbar" id="leftbar">
	<div class="covers">
	</div>
	<a href="/profile.php?id=<?php echo $user['id']; ?>">
	<img id="uaiii" src="/img/<?Php echo $user['photo'];?>" class="avatadr"/>
	<span id="nanita"><?php echo $user['nome'];?> <?php echo $user['sobrenome'];?></span></div></a>g
</div>

<style type="text/css">
.covers{
	background-image: url(/img/back.jpg);
}
</style>

<script type="text/javascript">
	var leftbar = document.getElementById('leftbar');
</script>