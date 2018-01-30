<?php
  require 'static/php/system/database.php';
  require 'static/php/system/config.php';

  if(isset($_COOKIE['iduser']) ){
  mysql_connect('localhost', 'root','')or die();	//Conecta com o MySQL
  mysql_select_db('nekohappy');						//Seleciona banco de dados

  $pincode= $_POST['pincode'];
  $ip=mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
  $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );

  $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
  $user = $user[0];

  if($user['pin'] == $pincode){
      echo '<p>Redirecionando</p>';
      $inisession = date('Y-m-d H:i:s');
      $iduser = $iduser;
      $userUP['lastlogin'] = date('Y-m-d H:i:s');
      $userUP['ip'] = $ip;
      setcookie("inisession", $inisession, time()+3600 * 24 * 365);
      $busca2  = "SELECT thecry FROM neko_user WHERE id = '".$iduser."'";
      $identificacao2 = mysql_query($busca2);
      $retorno2 = mysql_fetch_array($identificacao2);
      $idcry = $retorno2['thecry'];
      setcookie("thecry", $idcry, time()+3600 * 24 * 365);
      if( DBUpdate( 'user', $userUP, "id = '{$iduser}'" ) ){
        echo '';
      }
      echo "<script>location.href='/';</script>";
      exit;
  }
	else{
    echo '<p>Pincode incorreto</p>';
  }
}
