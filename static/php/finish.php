<?php
require 'database.php';
require 'config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
if($user['configurado'] == 0){
 $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
 $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
 $user = $user[0];

$userUP['configurado'] = $_POST['finalizado'];
if( DBUpdate( 'user', $userUP, "id = '{$iduser}'" ) ){
        echo $_POST['finalizado'];
        }
    }
    }
?>