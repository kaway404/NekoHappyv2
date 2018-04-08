<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class DB{
	public function con(){
		try{
			return new PDO("mysql:host=localhost;dbname=nekohappy", "root", "");
		}catch(PDOException $e){
			var_dump($e);
		}
	}
}

?>
<?php
$conn = mysql_connect('localhost','root','') or die (mysql_error);
$db=mysql_select_db('nekohappy', $conn) or die (mysql_error);
?>
<?php
require 'database.php';
require 'config.php';
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$totaldenews = mysql_query("SELECT * FROM neko_news WHERE id and tipo = 1 and idquem = '".$iduser."' and iduser <> '".$iduser."'  and view = 0 ");
$totaldenews = mysql_num_rows($totaldenews);
echo $totaldenews;
?>