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
  <a href="search.php?result=<?php echo $nome; ?>" id="baka"><span id="maiss">Ver todos os resultados para <?Php echo $nome; ?></span></a>
  <?php } ?>
<?php }?>


<?php
if($nome == "Admin"){
?>
 <a class="eoq" href='https://facebook.com/imxandeco' target="_blank"><li class='buscaright'><img src='https://scontent.ffln4-1.fna.fbcdn.net/v/t1.0-9/20882561_273085526510577_87597807401529003_n.jpg?oh=b0af9c3ec33fe2cb0cb0c996d97dddc1&oe=5AF20BF1' class='avatar6'/><div class='name'><p>
 	Alexandre Silva
 </p></div></li></a>
<?php } ?>

<?php
if($nome == "admin"){
?>
 <a class="eoq" href='https://facebook.com/imxandeco' target="_blank"><li class='buscaright'><img src='https://scontent.ffln4-1.fna.fbcdn.net/v/t1.0-9/20882561_273085526510577_87597807401529003_n.jpg?oh=b0af9c3ec33fe2cb0cb0c996d97dddc1&oe=5AF20BF1' class='avatar6'/><div class='name'><p>
 	Alexandre Silva
 </p></div></li></a>
<?php } ?>

<?php
if($nome == "fall"){
?>
<script>
var header = document.getElementById('header');
 $('#header').parent().css('overflow','hidden');
   $('#header').animate({'top': '+=4500px',},function(){
     $(this).hide();
   });
    $('#fallen').parent().css('overflow','hidden');
   $('#fallen').animate({'top': '+=4500px',},function(){
   });
      $('#fallen2').parent().css('overflow','hidden');
   $('#fallen2').animate({'top': '+=4500px', },function(){
     $(this).hide();
   });
     $('#fallen3').parent().css('overflow','hidden');
   $('#fallen3').animate({'top': '+=4500px',},function(){
     $(this).hide();
   });
     $('#fallen4').parent().css('overflow','hidden');
   $('#fallen4').animate({'top': '+=4500px', },function(){
     $(this).hide();
   });
    $('#fallen5').parent().css('overflow','hidden');
   $('#fallen5').animate({'top': '+=4500px',},function(){
     $(this).hide();
   });
    $('body').parent().css('overflow','hidden');
   $('body').animate({'top': '+=4500px',},function(){
     $(this).hide();
   });
</script>
<?php } ?>


<?php
if($nome == "666"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("Você não pode pesquisar por isso...");
msg.style = "display: block";

 $('#close').click(function(){
        	msg.style = "display: none;";
   		 });
</script>
<?php } ?>

<?php
if($nome == "hentai"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("hmmmm. Safado.");
msg.style = "display: block";

 $('#close').click(function(){
        	msg.style = "display: none;";
   		 });
</script>
<?php } ?>