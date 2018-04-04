 <?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
require 'database.php';
require 'config.php';
?>
<?php
$conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
$banco = mysql_select_db($dbp);
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
$banana = $_GET['idpost'];
$content=mysql_real_escape_string($_POST['content']);
$form2['date'] = date('Y-m-d H:i:s');
$form2['iduser'] = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$form2['idpost'] = $_GET['idpost']; 
$form2['texto'] = mysql_real_escape_string($_POST['content']);
$coinsadd = array('coins' => $user['coins'] + 10);
DBUpDate( 'user', $coinsadd, "id = '{$user['id']}'" );
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

	if( DBCreate( 'comment', $form2 ) ){
		?>


 <div class="coment">
      <div class="ava-t-sd" id="photo">
     <img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
    </div>
    <p class="name-post"><?php echo $user['nome'] ?> <?php echo $user['sobrenome'] ?>  <span class="commentpostiduq"><?php echo $content; ?></span> </p>
    </div>

 <script>
var blankmsg<?php echo $banana ?> = document.getElementById('feelsba<?php echo $banana ?>');
blankmsg<?php echo $banana ?>.style = "display: none";
    </script>

    <?php } else{ ?>

    <script>
var msg = document.getElementById('bakaetes');
$("#fuck").text("Ocorreu um erro.");
msg.style = "display: block";
    </script>

    <?php } ?>

    <?php } ?>