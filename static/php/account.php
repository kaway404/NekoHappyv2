<div class="acc"></div>
<div class="account">
<div class="form">
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
	<input type="text" name="pincode" id="pincode" placeholder="Pincode"/>
	<div class="btn-sa" id="verifique"><div class="btna"><span>Continuar</span></div></div>
	<div id="resposta">
	</div>
	<?php
		}}else{
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
</div>
</div>