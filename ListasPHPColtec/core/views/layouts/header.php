<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <title><?= $titulo_aba ?></title>
</head>

<body>
  <?php use core\classes\Functions; ?>
  <div style="background-color: #1f1e33;">
    <div class="container-fluid navegacao">
      <div class="row">
        <div class="col-6 text-start p-3">
          <a href="?a=inicio" class="fixLink">
            <h3><?= APP_NAME ?></h3>
          </a>
        </div>
        <div class="col-6 text-end p-3">
          <?php if (Functions::isLogged()) : ?>
            <i class="fas fa-user-circle">
              <a href="?a=area_do_usuario" class="fixLink">
                <?= $_SESSION["user_nick"] ?>
              </a>
            </i>
            <a href="?a=logout" class="fixLink" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
          <?php else : ?>
            <a href="?a=cadastro" class="fixLink">Criar Conta</a>
            <a href="?a=login" class="fixLink">Login</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>