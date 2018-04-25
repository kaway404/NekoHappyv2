<?php
require 'database.php';
require 'config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$upRate['view'] = 1;
$upRate['aceite'] = 1;
$idquem = $_POST['iduser'];
DBUpDate( 'amizades', $upRate, "iduser = '{$idquem}' " );
?>

<script type="text/javascript">
	 $("#what<?php echo $idquem;?>").fadeOut(600);
</script>

<?php } ?>