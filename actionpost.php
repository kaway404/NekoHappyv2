<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<?php
$conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
$banco = mysql_select_db($dbp);
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
$content=mysql_real_escape_string($_POST['content']);
$form2['tim'] = date('Y-m-d H:i:s');
$form2['iduser'] = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$form2['tipo'] = 1;
$form2['destaque'] = 0;
$form2['texto'] = mysql_real_escape_string($_POST['content']);
$coinsadd = array('coins' => $user['coins'] + 10);
DBUpDate( 'user', $coinsadd, "id = '{$user['id']}'" );
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

	if( DBCreate( 'post', $form2 ) ){
		?>
		<script>
			var blank = document.getElementById('blank');
			blank.style = "display: none";
		</script>
		<div class="postagens">
		<div class="ava-t-e" id="photo">
		<img src="https://orig00.deviantart.net/c9eb/f/2015/076/d/1/icon___avatar_anime_by_mrroccia1989-d8m4cmx.png" class="avatar-post"/>
		</div>

		<p class="name-post"><?php echo $user['nome'] ?> <?php echo $user['sobrenome'] ?></p>

		<p class="cont-d"><?php echo $content; ?></p>

		</div>
		<?php }?>
