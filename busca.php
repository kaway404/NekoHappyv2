<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<?php 
$nome = $_POST['nome'];
?>

<?Php
if(empty($nome)){
	echo "";
}else{?>
<?php
$profile2 = DBRead( 'user', "WHERE nome LIKE '%$nome%' ORDER BY id DESC LIMIT 9" );
 if (!$profile2)
	echo "";
else 
	foreach ($profile2 as $profile22):
 ?>
 
 <a class="eoq" href='/profile.php?id=<?php echo $profile22['id']; ?>'><li class='buscaright'><img src='https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png' class='avatar6'/><div class='name'><p>
 <?php
	$str2 = nl2br( $profile22['nome'] );
	$len2 = strlen( $str2 );
	$max2 = 25;
   if( $len2 <= $max2 )
   echo $str2;
	else    
   echo substr( $str2, 0, $max2 ) . '...'?>
 </div></li></a></p>
 
 <?php endforeach; ?>
 <?php
if (!$profile2){
 echo '';
}
else{
 ?>
  <a href="search.php?result=<?php echo $profile22['nome']; ?>" id="baka"><span id="maiss">Ver mais sobre <?Php echo $profile22['nome']; ?></span></a>
  <?php } ?>
<?php }?>