<?php
require 'database.php';
require 'config.php';
?>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$upRate['status'] = 1;
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
DBUpDate( 'post', $upRate, "iduser = '{$iduser}' " );
}
?>