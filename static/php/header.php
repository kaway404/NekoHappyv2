<?php

$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
    $user = $user[0];
?>

<!-- Header -->
<header class="nav nav-fixed bg-primary">
  <div class="row">
  <nav>
      <div class="col col-2">
        <div class="row">
          <div class="col col-min-sidebar">
              <span class="brand" title="NekoHappy"><img class="img-icon" src="static/img/favicon1.png" alt="brand favicon icon neko gato cat happy"></span>
          </div>
          <div class="col col-min-content">
            <form name="search">
              <input class="text-white" type="text" name="q" placeholder="Pesquisar">
            </form>
          </div>
        </div>
      </div>

      <div class="col col-2 text-right">
        <div class="row">
          <div class="col col-md-content">
            <!-- None -->
          </div>
          <div class="col col-md-sidebar">
            <img class="img-profile" src="https://pbs.twimg.com/profile_images/900805931545403392/CZBDXrwN_400x400.jpg" alt="">
            <a href="#!" class="nav-link special-link">🖉</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>

<?php if (isset($_COOKIE['iduser']) && (isset($_COOKIE['inisession'])) && (isset($_COOKIE['thecry']))) { ?>


<?php } ?>
