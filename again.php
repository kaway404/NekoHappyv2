<?php

if((isset($_COOKIE['thecry']))){
  require 'static/php/system/database.php';
  require 'static/php/system/config.php';

  $conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
  $banco = mysql_select_db($dbp);
  $senha=$_POST['senha'];
  $ip=mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
  $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
  $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
  $usercry = $usercry[0];
  $iduser1 = $usercry['id'];
  $emailuser =$usercry['email'];

  $sql="select * from neko_user where senha= '".sha1($senha)."'";
  $resultados = mysql_query($sql)or die (mysql_error());
  $res=mysql_fetch_array($resultados);

	if (@mysql_num_rows($resultados) == 0){
    print "<p>Senha incorreta!</p>"; exit();
  }

  $user = DBRead('user', "WHERE email = '{$email}' LIMIT 1 ");
  $user = $user[0];


  $user = DBRead('user', "WHERE id = '{$iduser1}' LIMIT 1 ");
  $user = $user[0];
  $inisession = date('Y-m-d H:i:s');
  $busca  = "SELECT id FROM neko_user WHERE email = '".$emailuser."'";
  $identificacao = mysql_query($busca);
  $retorno = mysql_fetch_array($identificacao);
  $iduser = $retorno['id'];
  $userUP['lastlogin'] = date('Y-m-d H:i:s');
  setcookie("iduser", $iduser, time()+3600 * 24 * 365);
  setcookie("inisession", $inisession, time()+3600 * 24 * 365);
  if( DBUpdate( 'user', $userUP, "id = '{$iduser}'" ) ){
    echo '';
  }
  echo '<script>location.reload();</script>';
	exit;
}
