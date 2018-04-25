
<?php
require 'database.php';
require 'config.php';
?>

<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'amizades', "WHERE idquem = $iduser ORDER BY id ASC LIMIT 10" );
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

<a href="/profile.php?id=<?php echo $peopler['id'];?>">
<li id="what<?php echo $peopler['id'];?>">
	<img src="/img/<?php echo $peopler['photo']; ?>">
	<p><?php echo $peopler['nome'];?></p>
	<span><?php echo $people['texto']; ?></span>
	<p>Está te seguindo</p>
</li>
</a>

<div id="resposta">

</div>

<script type="text/javascript">
	$(document).ready(function() {
    $("#addb").click(function() {
        var iduser = <?php echo $peopler['id'];?>;
        $.post("/static/php/aceitar.php", {iduser: iduser},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});

		$(document).ready(function() {
    $("#addbr").click(function() {
        var iduser = <?php echo $peopler['id'];?>;
        $.post("/static/php/recusar.php", {iduser: iduser},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});
</script>

<?php endforeach; endforeach; } ?>