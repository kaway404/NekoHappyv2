<?php
require '/database.php';
require '/config.php';
?>	
<?php
$usuario2 = $_GET['people'];
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'user', "WHERE id = $usuario2 ORDER BY id ASC" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):   
?>
<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$texts = DBRead( 'msg', "WHERE id and quem = $usuario2 and eu = $iduser ORDER BY id ASC" );
if (!$texts)
echo '';
else  
  foreach ($texts as $text):   
?>

<div class="mensagemg" id="tttqs"></div>

<script type="text/javascript">
	var milissegundos = 800;
	var interval = setInterval(function(){
  	$.post('/static/php/wy.php?people=<?php echo $usuario2;?>', function (html) {
				$('#tttqs').html(html);
		});
  	  }, milissegundos);
</script>

<?php endforeach; endforeach;?>