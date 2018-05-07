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

<li class="eu">
<img src="/img/<?php echo $people['photo'];?>" class="nanisc">
<p><?php echo $text['text'];?></p>
</li>


<?php endforeach; endforeach;?>