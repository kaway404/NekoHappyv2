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
$profile2 = DBRead( 'user', "WHERE nome LIKE '%$nome%' ORDER BY id DESC LIMIT 4" );
 if (!$profile2)
	echo "";
else 
	foreach ($profile2 as $profile22):
 ?>
 
 <a class="eoq" href='/profile.php?id=<?php echo $profile22['id']; ?>'><li class='buscaright'><img src='/img/<?Php echo $profile22['photo'];?>' class='avatar6'/><div class='name'><p>
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
  <a href="search.php?result=<?php echo $nome; ?>" id="baka"><span id="maiss">Ver todos os resultados de pessoas para <?Php echo $nome; ?></span></a>
  <?php } ?>
<?php }?>

<?Php
if(empty($nome)){
  echo "";
}else{?>
<?php
$profile2 = DBRead( 'comunidades', "WHERE nome LIKE '%$nome%' ORDER BY id DESC LIMIT 5" );
 if (!$profile2)
  echo "";
else 
  foreach ($profile2 as $profile22):
 ?>
 
 <a class="eoq" style="padding-top: 20px; padding-bottom: 40px;"  href='/comunidade.php?id=<?php echo $profile22['id']; ?>'><li class='buscaright'><img src='/img/default.png' class='avatar6'/><div class='name'><p>
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
  <a style="padding-top: 20px; padding-bottom: 20px;" href="search.php?result=<?php echo $nome; ?>" id="baka"><span id="maiss">Ver todos os resultados de comunidades para <?Php echo $nome; ?></span></a>
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
if($nome == "satan"){
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

<?php
if($nome == "naruto"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("Não tem anime aqui ç.ç");
msg.style = "display: block";

 $('#close').click(function(){
        	msg.style = "display: none;";
   		 });
</script>
<?php } ?>

<?php
if($nome == "porn"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("Punheteiro ;-;");
msg.style = "display: block";

 $('#close').click(function(){
          msg.style = "display: none;";
       });
</script>
<?php } ?>

<?php
if($nome == "facebook"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("Traidor.. :c");
msg.style = "display: block";

 $('#close').click(function(){
          msg.style = "display: none;";
       });
</script>
<?php } ?>

<?php
if($nome == "loli"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("190..");
msg.style = "display: block";

 $('#close').click(function(){
          msg.style = "display: none;";
       });
</script>
<?php } ?>

<?php
if($nome == "aky"){
?>
<script>
var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$("#fuck").text("Bunda mole.. asduhas");
msg.style = "display: block";

 $('#close').click(function(){
          msg.style = "display: none;";
       });
</script>
<?php } ?>
