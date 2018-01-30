<?php
  require 'static/php/system/database.php';
  require 'static/php/system/config.php';

  $conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
  $banco = mysql_select_db($dbp);

  $email=$_POST['emaill'];
  $senha=$_POST['senhal'];
  $ip=mysql_real_escape_string($_SERVER['REMOTE_ADDR']);

  function validaEmail($email) {
	$conta = "^[a-zA-Z0-9\._-]+@";
	$domino = "[a-zA-Z0-9\._-]+.";
	$extensao = "([a-zA-Z]{2,4})$";
	$pattern = $conta.$domino.$extensao;
	if (ereg($pattern, $email))
	return true;
	else
	return false;
	}

	if(!validaEmail($email)){
	print "<p>E-mail invalido</p>"; exit();
	}


  $sql="select * from neko_user where email= '".$email."' and senha= '".sha1($senha)."'";
  $resultados = mysql_query($sql)or die (mysql_error());
  $res=mysql_fetch_array($resultados);

	if (@mysql_num_rows($resultados) == 0){
        print "<p>Email ou senha incorretos!</p>"; exit();
  }

  $user = DBRead('user', "WHERE email = '{$email}' LIMIT 1 ");
  $user = $user[0];

  if($user['ip'] <> $ip){
      $busca  = "SELECT id FROM neko_user WHERE email = '".$email."'";
      $identificacao = mysql_query($busca);
      $retorno = mysql_fetch_array($identificacao);
      $iduser = $retorno['id'];
      setcookie("iduser", $iduser);
      echo '<script>location.href="checksession";</script>';
  }


  else{
    $user = DBRead('user', "WHERE email = '{$email}' LIMIT 1 ");
    $user = $user[0];

    $inisession = date('Y-m-d H:i:s');
    $busca  = "SELECT id FROM neko_user WHERE email = '".$email."'";
    $identificacao = mysql_query($busca);
    $retorno = mysql_fetch_array($identificacao);
    $iduser = $retorno['id'];
    $userUP['lastlogin'] = date('Y-m-d H:i:s');
    setcookie("iduser", $iduser, time()+3600 * 24 * 365);
    setcookie("inisession", $inisession, time()+3600 * 24 * 365);
    $busca2  = "SELECT thecry FROM neko_user WHERE email = '".$email."'";
    $identificacao2 = mysql_query($busca2);
    $retorno2 = mysql_fetch_array($identificacao2);
    $idcry = $retorno2['thecry'];
    setcookie("thecry", $idcry, time()+3600 * 24 * 365);
    if( DBUpdate( 'user', $userUP, "id = '{$iduser}'" ) ){
      echo '';
    }
   header("location: /"); 
		exit;
  }
