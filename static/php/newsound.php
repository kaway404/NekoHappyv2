
<?php
require 'database.php';
require 'config.php';
?>

<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'news', "WHERE idquem = $iduser and iduser <> '".$iduser."' and status = 0 ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '';
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

<?php
$soundFile = "/sound/sound.ogg";
echo "<EMBED SRC='/sound/sound.ogg' WIDTH='2' HEIGHT='2'>";
?>

<div class="hourstimea">
<li>
	<img src="/img/default.png">
	<p><?php echo $peopler['nome'];?></p>
	<span><?php echo $people['texto']; ?></span>
</li>
</div>

<script type="text/javascript">
	setTimeout(function(){
   <?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$upRate['status'] = 1;
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
DBUpDate( 'news', $upRate, "idquem = '{$iduser}' " );
}
?>
}, 10000);
</script>

<?php endforeach; endforeach; } ?>