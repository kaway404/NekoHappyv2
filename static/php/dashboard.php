<?php

if (isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
	$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
  $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
  $user = $user[0];
  $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
  $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
  $usercry = $usercry[0];
  require_once 'static/php/veried.php';
	// require_once 'static/php/menu.php';
  }
