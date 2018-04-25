<div class="acc"></div>
<div class="account">
<div class="form">
	<?php
	if((isset($_COOKIE['thecry']))){
	$idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
    $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
    $usercry = $usercry[0];
	?>

	<h1 class="login">Faça login novamante</h1>
	<img src="/img/<?Php echo $usercry['photo'];?>" class="avatar-i"/>
	<h1 id="eto51"><?php echo $usercry['nome'] ?> <?php echo $usercry['sobrenome'] ?></h1>
	<input type="password" name="senhar" id="senhaa" placeholder="Senha"/>
	<div class="btn-sa" id="again"><div class="btna"><span>Login</span></div></div>
	<p class="bat">Não sou eu, sair da conta clique <a href="logoutp.php">aqui</a></p>
	<div id="resposta">
	</div>

	<?php } else{ ?>

	<?php
	if(isset($_GET['login'])){
	?>
	<h1 class="login">Login</h1>
	<input type="email" name="emaill" id="emaill" placeholder="E-mail"/>
	<input type="password" name="senhal" id="senhal" placeholder="Senha"/>
	<div class="btn-sa" id="logar"><div class="btna"><span>Login</span></div></div>
	<p class="bat">Não tens uma conta, registre <a href="?registro">aqui</a></p>
	<div id="resposta">
	</div>
	<?php } ?>
	<?php
	if(isset($_COOKIE['iduser'])){
	if(isset($_GET['verificarsessao'])){
	?>
	<h1 class="login">Verifique sua sessão</h1>
	<form>
	<input type="text" name="pincode" id="pincode" placeholder="Pincode"/>
	<div class="btn-sa" id="verifique"><div class="btna"><span>Continuar</span></div></div>
</form>
	<div id="resposta">
	</div>
	<?php
		}else{
			setcookie("iduser" , "");
			setcookie("inisession" , "");
			header("location: /index.php?login");
		}
		?>
	<?php } ?>

	<?php
	if(isset($_GET['registro'])){
	?>
	<h1 class="login">Registrar</h1>
	<input type="email" name="emailr" id="emailr" placeholder="E-mail"/>
	<input type="password" name="senhar" id="senhar" placeholder="Senha"/>
	<input type="text" name="nome" id="nomer" placeholder="Nome"/>
	<input type="text" name="nome" id="sobrer" placeholder="Sobrenome"/>
	<input type="text" name="pincode" id="pincode" placeholder="Pin Code"/>
	<div class="btn-sa" id="registrar"><div class="btna"><span>Registrar</span></div></div>
	<p class="bat">Já tenho uma conta, loga-se <a href="?login">aqui</a></p>
	<div id="resposta">
	</div>
	<?php } ?>

<?php } ?>
</script>

</div>
</div>