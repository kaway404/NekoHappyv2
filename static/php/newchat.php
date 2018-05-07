<?php
require '/database.php';
require '/config.php';
?>

<?php
$usuario = $_POST['people'];
?>

<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'user', "WHERE id = $usuario ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):   
?>

<script type="text/javascript">
	$("#peoplettt").text("<?php echo $people['nome'];?> <?php echo $people['sobrenome'];?>");
</script>

<div class="msgter">


<div id="vermsg51">

</div>

<script type="text/javascript">
	var milissegundos = 800;
	var interval = setInterval(function(){
  	$.post('/static/php/viewmsg.php?people=<?php echo $usuario;?>', function (html) {
				$('#vermsg51').html(html);
		});
  	  }, milissegundos);
</script>

<div class="bottomg">
<form>
<input type="text" name="chat" placeholder="Envie uma mensagem">
</form>
</div>

</div>

<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$quems = DBRead( 'amizades', "WHERE id and iduser = $iduser ORDER BY id ASC LIMIT 10" );
if (!$quems)
echo '';
else  
  foreach ($quems as $quem):   
?>
<?php
$quemr = $quem['idquem'];
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'user', "WHERE id = $quemr ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):   
?>

<script type="text/javascript">
	document.getElementById("peopler<?php echo $people['id'];?>").style = "background: #fff !important; color: #000;";
</script>

<?php endforeach; endforeach;?>


<script type="text/javascript">
	document.getElementById("peopler<?php echo $usuario;?>").style = "background: #459bd9 !important; color: #fff;";
</script>

<?php endforeach; ?>