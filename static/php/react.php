<?php
require 'database.php';
require 'config.php';

if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){

$conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
$banco = mysql_select_db($dbp);
$thecryed = DBEscape(strip_tags(trim(sha1($_POST['emailr']))));

$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );

$form2['iduser'] = $iduser;
$form2['idpost'] = $_POST['post'];
$post = $_POST['post'];

$totalcurtida = mysql_query("SELECT * FROM neko_like WHERE idpost = $post ");
$totalcurtida = mysql_num_rows($totalcurtida);
$totalcurtida2 = $totalcurtida + 1;
$totalcurtida3 = $totalcurtida - 1;

$dbCheck = DBRead( 'like', "WHERE id and idpost = $post and iduser = $iduser" );

if( $dbCheck ){
	DBDelete( 'like', "id and idpost = '{$post}' and iduser = '{$iduser}'  " );
	?>
<script>
var kawaii<?php echo $post; ?> = document.getElementById('kawaii<?php echo $post; ?>');

$("#totallike<?php echo $post; ?>").text("<?php echo $totalcurtida3; ?> Curtiu isso");

kawaii<?php echo $post; ?>.style = "background-position: 0 -193px !important;";
</script>
	<?php } else{

if( DBCreate( 'like', $form2 ) ){	
	echo '';
?>

<?php
$postid = $_POST['post'];
$coments = DBRead( 'post', "WHERE id = $postid ORDER BY id DESC" );
if (!$coments)
echo '';
else  
  foreach ($coments as $coment):   
?>

<?php
$post = $_POST['post'];
$form3['iduser'] = $iduser;
$form3['idquem'] = $coment['iduser'];
$form3['tipo'] = 1;
$form3['texto'] = "Curtiu sua postagem";

if( DBCreate( 'news', $form3 ) ){	
	echo '';
}
?>

<?php endforeach;?>

<script>
var kawaii<?php echo $post; ?> = document.getElementById('kawaii<?php echo $post; ?>');

$("#totallike<?php echo $post; ?>").text("Tu e outras <?php echo $totalcurtida; ?> curtiram isso");
kawaii<?php echo $post; ?>.style = "background-position: 0 -173px !important;";
</script>
<?php } ?>

<?php } ?>

<?php } ?>