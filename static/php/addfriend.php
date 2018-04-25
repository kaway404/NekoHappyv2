<?php
require 'database.php';
require 'config.php';

if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$peoplef = $_POST['people'];
$iduser = $_COOKIE['iduser'];

$dbCheck = DBRead( 'amizades', "WHERE id and iduser = $iduser and idquem = $peoplef" );
if( $dbCheck ){
	DBDelete( 'amizades', "id and iduser = $iduser and idquem = '{$peoplef}' " );
	?>

	<script type="text/javascript">
		$("#addf").text("Seguir");
	</script>

	<?php } else{?>

<?php
$comunidade = $_POST['people'];
$form3['iduser'] = $iduser;
$form3['idquem'] = $comunidade;
$form3['view'] = 0;

if( DBCreate( 'amizades', $form3 ) ){	
	echo '';
?>
<script type="text/javascript">
		$("#addf").text("Parar de seguir");
	</script>

<?php } ?>

<?php } } ?>
