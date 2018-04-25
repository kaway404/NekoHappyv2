<?php
require 'database.php';
require 'config.php';
$nome = $_POST['nome'];
if (!($nome)){
    print "Preencha todos os campos!"; exit();
}
else{
	$form2['datec'] = date('Y-m-d H:i:s');
	$form2['iduser'] = $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );;
	$form2['nome'] = $nome;
	$form2['killua'] = md5(uniqid(rand(), true));
	if( DBCreate( 'comunidades', $form2 ) ){
		echo '<script>location.href="/";</script>';
	}
}
?>