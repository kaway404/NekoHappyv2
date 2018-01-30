<article>

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
      <button class='btn btn-outline-primary login'>Pronto</button>
      <button class='btn btn-secondary cancel' type='reset'>Cancelar</button>
    </div>",
    "relogin"   => "<div class='form'><div class='alert alert-error resposta'></div>
      <div class='form-group'>
        <label for='passa'>Senha</label>
        <input type='password' id='passa' placeholder='Senha'>
      </div>
      <button class='btn btn-outline-primary again'>Pronto</button>
      <button class='btn btn-secondary' type='reset'>Cancelar</button>
    </div>",
    "pincode"   => "<div class='form'><div class='alert alert-error resposta'></div>
      <div class='form-group'>
        <label for='pin'>Código</label>
        <input type='text' id='pin' placeholder='Pin Code'>
      </div>
      <button class='btn btn-outline-primary pincode'>Pronto</button>
      <button class='btn btn-secondary' type='reset'>Cancelar</button>
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
      <button class='btn btn-outline-primary register'>Pronto</button>
      <button class='btn btn-secondary' type='reset'>Cancelar</button>
    </div>"
  ];

  $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
  $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
  $usercry = $usercry[0];

  if (isset($_COOKIE['iduser'])) {
    if (isset($_GET['checksession'])) {
      $message = [
        "h2"    => "Verifique sua sessão",
        "span"  => "Após verificar sua sessão, você poderá entrar no <b>NekoHappy</b> sem problemas!",
        "user"  => $usercry
      ];
      $form['selected'] = $form['pincode'];
    }
  } elseif ((isset($_COOKIE['thecry']))) {

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

  ?>

  <div class="row">
    <div class="col col-sidebar max-height side-primary">
      <div class="container">
        <?php if (!empty($message['user'])) { ?>
          <!-- <img src="img/<?= $message['user']['image'] ?>" alt="image profile user"> -->
          <img class="img-compressed" src="https://static1.squarespace.com/static/58290792725e259c855c07e2/58320e3059cc687f522a96a3/588a00c3d482e90e1b1b1c39/1485439194441/boy.png" alt="profile user example">
          <h2 class="display-3"><?= ucFirst($message['user']['nome']) .", ". $message['h2']  ?></h2>
        <?php } else { ?>
        <h2 class="display-3"><?= $message['h2'] ?></h2>
      <?php } ?>
        <span class="lead"><?= $message['span'] ?></span><br>
        <small class="text-muted"><?= $message['small'] ?></small>
      </div>
    </div>
    <div class="col col-content medium-height-margin side-secondary bg-white max-height">
      <div class="container">
        <?= $form['selected'] ?>
      </div>
    </div>
  </div>

</article>
