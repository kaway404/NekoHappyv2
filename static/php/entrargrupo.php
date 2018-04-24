<?php
require 'database.php';
require 'config.php';

if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$comunidade = $_POST['group'];
$iduser = $_COOKIE['iduser'];

$dbCheck = DBRead( 'membros', "WHERE id and idgroup = $comunidade and iduser = $iduser" );
if( $dbCheck ){
	DBDelete( 'membros', "id and iduser = $iduser and idgroup = '{$comunidade}'  " );
	?>

	<script type="text/javascript">
		$("#entrar").text("Entrar");
	</script>

	<?php } else{?>

<?php
$comunidade = $_POST['group'];
$form3['iduser'] = $iduser;
$form3['idgroup'] = $comunidade;
$form3['datec'] = date('Y-m-d');

if( DBCreate( 'membros', $form3 ) ){	
	echo '';
?>

<script type="text/javascript">
		$("#entrar").text("Sair");
	</script>
<?php } ?>

<?php } } ?>
