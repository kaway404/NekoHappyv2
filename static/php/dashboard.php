<?php
  $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
    $user = $user[0];
        if($user['configurado'] == 0){
   		require 'static/php/configure.php';
		}
		else{
		require 'static/php/menu.php';
		}
?>