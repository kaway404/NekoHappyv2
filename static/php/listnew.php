
<?php
require 'database.php';
require 'config.php';
?>

<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'news', "WHERE idquem = $iduser and iduser <> '".$iduser."' ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '<h1 id="nothing">Nenhuma notificação</h1>';
else  
  foreach ($peoples as $people):   
?>

<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$quem = $people['iduser'];
$peoplesr = DBRead( 'user', "WHERE id = $quem ORDER BY id ASC LIMIT 10" );
if (!$peoplesr)
echo '';
else  
  foreach ($peoplesr as $peopler):   
?>


<li>
	<img src="/img/default.png">
	<p><?php echo $peopler['nome'];?></p>
	<span><?php echo $people['texto']; ?></span>
</li>

<?php endforeach; endforeach; } ?>