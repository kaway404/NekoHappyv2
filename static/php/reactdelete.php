<?php
require 'database.php';
require 'config.php';

$conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
$banco = mysql_select_db($dbp);
$thecryed = DBEscape(strip_tags(trim(sha1($_POST['emailr']))));

$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );

$form2['iduser'] = $iduser;
$form2['idpost'] = $_GET['post'];
$post = $_GET['post'];


$dbCheck = DBRead( 'like', "WHERE id and idpost = $post and iduser = $iduser" );

if( $dbCheck ){
	DBDelete( 'like', "id and idpost = '{$post}' and iduser = '{$iduser}'  " );
    echo '';
}
else{
	echo '';
}