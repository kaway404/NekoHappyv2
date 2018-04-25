<?php
require 'database.php';
require 'config.php';

if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$peoplef = $_POST['people'];
$iduser = $_COOKIE['iduser'];
$grupo = $_POST['group'];

$dbCheck = DBRead( 'membros', "WHERE iduser = $peoplef and idgroup = $grupo" );
if( $dbCheck ){
	echo '';
	?>

	<?php echo '';?>

	<?php } else{?>

<?php
$href = '/comunidade.php?id='.$grupo.'';
$form3['iduser'] = $iduser;
$form3['idquem'] = $peoplef;
$form3['tipo'] = 1;
$form3['texto'] = "Convidou para entrar no grupo";
$form3['href'] = $href;

if( DBCreate( 'news', $form3 ) ){	
	echo '';
?>

<?php echo '';?>

<?php } ?>

<?php } } ?>
