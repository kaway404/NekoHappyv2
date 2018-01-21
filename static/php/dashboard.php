<?php
  	$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
    $user = $user[0];
    $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
    $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
    $usercry = $usercry[0];
    require 'static/php/veried.php';
        if($user['configurado'] == 0){
   		require 'static/php/configure.php';
		}
		else{
		require 'static/php/menu.php';
		}
?>