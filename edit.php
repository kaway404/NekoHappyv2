<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
require 'static/php/system/database.php';
require 'static/php/system/config.php';
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
$idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
$usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
$usercry = $usercry[0];
?>

<?php
$conexao = mysql_pconnect($hostp,$userp,$passwrdp) or die (mysql_error());
$banco = mysql_select_db($dbp);
if (isset($_POST['save'])) {
		if ($_FILES["file"]["error"]>0) {
			echo "<script language='javascript' type='text/javascript'>alert('Tens de escolher uma foto...');</script>";
		}else{
            $n = rand (0, 10000000);
            $img = preg_replace('/[^\w\._]+/', '', $_FILES["file"]["name"]);

            move_uploaded_file($_FILES['file']['tmp_name'], "img/".$img);
			echo '';

			$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );

			$query = "UPDATE neko_user SET `photo`='$img' WHERE `id`='$iduser'";
			$data = mysql_query($query);
			if ($data) {
				$form['tipo'] = 3;
				$form['iduser'] = $user['id'];
				$form['texto'] = "Alterou sua foto de perfil";
				$form['tim'] = date('Y-m-d H:i:s');
				$form['destaque'] = 0;
				$form['photo'] = $img;
				if( DBCreate( 'post', $form ) ){
					header("Location: /profile.php?id=".$iduser);
				}
			}else{
				echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um erro ao atualizar a tua foto...');</script>";
			}
		}
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>NekoHappy | Editando perfil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	 <link rel="stylesheet" href="/static/css/react.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="static/js/functions.js"></script>
	<script src="static/js/jquery.js" type="text/javascript"></script>
	<script src="static/js/js-all.js" type="text/javascript"></script>
	<script  src="static/js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/screen.css"/>
	<link rel="stylesheet" type="text/css" href="/static/css/comunidade.css"/>
</head>
<body id="momer">

<?php
require 'static/php/header.php';
require 'static/php/leftbar.php';
?>

<div id="alinhar-h">

<div id="editprofile">
<center>
<div id="nanisa">
<h1>Foto de perfil atual</h1>
<img src="/img/<?php echo $user['photo'];?>" class="avatarja"/>
</div>
<div id="fotop">
<form method="POST" enctype="multipart/form-data" id="perfil">
			<br />
			<h3>Mostra ao mundo quem és</h3><br />
			<h3>adicionado uma foto de rosto...</h3><br /><br />
			<input type="file" id="btn2" name="file" /><br /><br /><br />
			<input type="submit" id="btn2" value="Guardar" name="save" />
			<br /><br />
		</form>
	</div>
</div>

</div>

</div>

<div id="happyhour">

<div class="hourstimea" id="wow">

</div>

</div>

<script type="text/javascript">
var milissegundos = 800;

// Executa a função a cada intervalo de tempo
var interval = setInterval(function(){
    $.post('/static/php/newsound.php', function (html) {
        $('#wow').html(html);
    });
  }, milissegundos);
</script>

</body>

</html>

<?php } ?>