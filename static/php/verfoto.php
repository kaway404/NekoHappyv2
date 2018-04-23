<?php
require 'database.php';
require 'config.php';
?>

<?php
$post = $_POST['post'];
$coments = DBRead( 'post', "WHERE id = $post and destaque = 0 and tipo = 3 ORDER BY id DESC" );
if (!$coments)
echo '';
else  
  foreach ($coments as $coment):   
?>
<?php
$comentiduser = $coment['iduser'];
$peoples = DBRead( 'user', "WHERE id = $comentiduser ORDER BY id DESC LIMIT 1" );
if (!$peoples)
echo '';  
else  
  foreach ($peoples as $people):   
?>


<div class="verfotografia">
	<div id="close">X</div>
<div class="costa"></div>
	 <div class="ava-t-e" id="photo" style="top: 17px !important; z-index: 200" >
    <img src="/img/<?Php echo $people['photo'];?>" class="avatar-post" />
    </div>
 		<style type="text/css">
              .costa{
                background-image: url(/img/back.jpg);
                padding-bottom: 10px;
              }

            </style>
            <center>
            <img id="verfotografia<?php echo $coment['id'];?>" src="/img/<?php echo $coment['photo']; ?>" class="fotografia" style="top: 50px;"/>
        </center>

</div>

<script type="text/javascript">
	var vers = document.getElementById('verfoto');
	$('#close').click(function(){
        	vers.style = "display: none;";
   		 });
</script>

<style type="text/css">
	#close{
		float: right;
		position: relative;
		font-size: 32px;
		right: 10px;
		top: 10px;
		cursor: pointer;
		z-index: 50000;
	}
</style>

<?php endforeach; endforeach;?>