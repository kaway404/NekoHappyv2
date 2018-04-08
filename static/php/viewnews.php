<?php
require 'database.php';
require 'config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$upRate['view'] = 1;
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
DBUpDate( 'news', $upRate, "idquem = '{$iduser}' " );
}
?>