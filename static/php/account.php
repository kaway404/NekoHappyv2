<div class="acc"></div>
<div class="account">
<div class="form">
	<?php
	if(isset($_GET['login'])){
	?>
	<h1 class="login">Login</h1>
	<input type="email" name="emaill" placeholder="E-mail"/>
	<input type="password" name="senhal" placeholder="Senha"/>
	<div class="btn-sa"><div class="btna"><span>Login</span></div></div>
	<p>Não tens uma conta, registre <a href="?registro">aqui</a></p>
	<?php } ?>
	<?php
	if(isset($_GET['registro'])){
	?>
	<h1 class="login">Registrar</h1>
	<input type="email" name="emailr" placeholder="E-mail"/>
	<input type="password" name="senhar" placeholder="Senha"/>
	<input type="text" name="nome" placeholder="Nome"/>
	<input type="text" name="nome" placeholder="Sobrenome"/>
	<div class="btn-sa"><div class="btna"><span>Registro</span></div></div>
	<p>Já tenho uma conta, loga-se <a href="?login">aqui</a></p>
	<?php } ?>
</div>
</div>