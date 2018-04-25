<?php
require 'database.php';
require 'config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$peoplef = $_POST['iduser'];
$iduser = $_COOKIE['iduser'];
DBDelete( 'amizades', "id and iduser = $peoplef and idquem = '{$iduser}' " );
?>

<script type="text/javascript">
	 $("#what<?php echo $peoplef;?>").fadeOut(600);
</script>

<?php } ?>