<?php

  $form = [
    "normal"    => "<div class='form'><div class='alert alert-error resposta'></div>
      <div class='form-group'>
        <label for='emaill'>Email</label>
        <input type='email' id='emaill' placeholder='Email'>
      </div>
      <div class='form-group'>
        <label for='passl'>Senha</label>
        <input type='password' id='passl' placeholder='Senha'>
      </div>
      <button class='btn btn-outline-primary login'>Entrar</button>
      <button class='btn btn-secondary cancel' type='reset'>Cancelar</button>
    </div>",
    "relogin"   => "<div class='form'><div class='alert alert-error resposta'></div>
      <div class='form-group'>
        <label for='passa'>Senha</label>
        <input type='password' id='passa' placeholder='Senha'>
      </div>
      <button class='btn btn-outline-primary again'>Entrar</button>
      <button class='btn btn-secondary cancel'>Cancelar</button>
    </div>",
    "pincode"   => "<div class='form'><div class='alert alert-error resposta'></div>
      <div class='form-group'>
        <label for='pin'>Código</label>
        <input type='text' id='pin' placeholder='Pin Code'>
      </div>
      <button class='btn btn-outline-primary pincode'>Continuar</button>
      <button class='btn btn-secondary cancel'>Cancelar</button>
    </div>",
    "register"  => "<div class='form'><div class='alert alert-error resposta'></div>
      <div class='form-group'>
        <label for='emailr'>Email</label>
        <input type='email' id='emailr' placeholder='Email'>
      </div>
      <div class='form-group'>
        <label for='passr'>Senha</label>
        <input type='password' id='passr' placeholder='Senha'>
      </div>
      <div class='form-group'>
        <label>Nome/Sobrenome</label>
        <div class='row'>
          <div class='col col-2'>
            <input type='text' id='namer' placeholder='Nome'>
          </div>
          <div class='col col-2'>
            <input type='text' id='lastnamer' placeholder='Sobrenome'>
          </div>
        </div>
      </div>
      <div class='form-group'>
        <label for='pincoder'>Código</label>
        <input type='text' id='pincoder' placeholder='Pin Code'>
      </div>
      <button class='btn btn-outline-primary register'>Cadastrar-se</button>
      <button class='btn btn-secondary cancel'>Cancelar</button>
    </div>"
  ];

  $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
  $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
  $usercry = $usercry[0];
  $ip = @mysql_real_escape_string($_SERVER['REMOTE_ADDR']);

if (isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
   echo "<script> history.go(-1); </script>";
}
else{
  if (isset($_COOKIE['iduser'])) {
  $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
  $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
  $user = $user[0];
  if($user['ip'] <> $ip ){
    if (isset($_GET['checksession'])) {
      $message = [
      "h2"    => "Verifique sua sessão",
      "span"  => "Após verificar sua sessão, você poderá entrar no <b>NekoHappy</b> sem problemas!",
      "user"  => $usercry
      ];
      $form['selected'] = $form['pincode'];
    }
  }

  if($user['ip'] == $ip ){
    if (isset($_GET['checksession'])) {
      setcookie("iduser" , "");
      setcookie("inisession" , "");
      setcookie("perfil" , "");
      header("location: /signin");
    }
  }

  } else if ((isset($_COOKIE['thecry']))) {

    $message = [
      "h2"    => "faça login novamente",
      "span"  => "Que bom! Você está voltando ao <b>NekoHappy</b>",
      "user"  => $usercry
    ];
    $form['selected'] = $form['relogin'];
  } else {
    if (isset($_GET['signin'])) {
      $message = [
        "h2"    => "Faça Login",
        "span"  => "Entre agora e desfrute ao maximo o <b>NekoHappy</b>"
      ];
      $form['selected'] = $form['normal'];
    }

    if (isset($_GET['signup'])) {
      $message = [
        "h2"    => "Registre-se",
        "span"  => "Faça seu cadastro agora mesmo, para encontrar seus amigos no <b>NekoHappy</b>",
        "small" => "Já tenho uma conta, loga-se <a class='text-white-hover' href='signin'>aqui</a>"
      ];
      $form['selected'] = $form['register'];
    }
  }
}

?>
  <style media="screen">
    body {
      overflow-y: hidden;
    }
  </style>
  <article class="bg-white max-height">
    <div class="bg-primary text-white text-center">
      <div class="container">
        <div class="container">
          <?php if (!empty($message['user'])) { ?>
            <div class="row">
              <div class="col col-min-sidebar text-right">
                <img class="img-compressed img-rounded img-ajust" src="https://static1.squarespace.com/static/58290792725e259c855c07e2/58320e3059cc687f522a96a3/588a00c3d482e90e1b1b1c39/1485439194441/boy.png" alt="profile user example">
              </div>
              <div class="col col-min-content text-left">
                <h2 class="display-3"><?= ucFirst($message['user']['nome']) .", ". $message['h2']  ?></h2>
                <span class="lead"><?= $message['span'] ?></span><br>
              </div>
            </div>
          <?php } else { ?>
          <h2 class="display-3"><?= $message['h2'] ?></h2>
          <span class="lead"><?= $message['span'] ?></span><br>
          <small class="text-muted"><?= $message['small'] ?></small>
        <?php } ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="container">
        <?= $form['selected'] ?>
      </div>
    </div>
  </article>
