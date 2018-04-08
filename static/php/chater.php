<div id="alinhar-h" id="fallen4">
<div class="messenger" id="eoq">
	<div id="bottom-messenger">
		<p id="peoplettt"></p>
	</div>
	<div id="left-messenger">
<span>Pessoas para conversar</span>		
		<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'user', "WHERE id <> $iduser ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):   
?>

<li id="peopler<?php echo $people['id'];?>">
	<img src="/img/default.png">
	<p><?php echo $people['nome'];?></p>
</li>

<?php endforeach;?>
	</div>

<div class="msgter">

</div>

</div>



</div>


<script type="text/javascript">
<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$peoples = DBRead( 'user', "WHERE id <> $iduser ORDER BY id ASC LIMIT 10" );
if (!$peoples)
echo '';
else  
  foreach ($peoples as $people):   
?>
	 $(document).ready(function() {
    $("#peopler<?php echo $people['id'];?>").click(function() {
        var post = <?php echo $people['id'] ?>; 
        $.post("/static/php/newchat.php", {people: post},
        function(data){
         $("#respostaba").html(data);
         }
         , "html");
         return false;
    });
});
	 <?php endforeach;?>
</script>

<script type="text/javascript">
	document.getElementById("alinhar-h").style = "width: 100%;";
	document.getElementById("eoq").style = "width: 100%;";
</script>