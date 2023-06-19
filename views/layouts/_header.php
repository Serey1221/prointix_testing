<?php

use yii\helpers\Url;

$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id; ?>
?>
<section>
  <nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container">
      <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::getAlias('@web/img/logo/PROINTIX-LOGO.png') ?>" alt="logo" width="139px" /></a>
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Sidebar -->
      <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- side-bar header -->
        <div class="offcanvas-header text-dark border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            Offcanvas
          </h5>
          <button type="button" class="btn-close btn-close-dark shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- sidebar body -->
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 nav_ul">
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= Url::to(['site/ux-ui-desgin']) ?>">UX UI Desgin</a></li>
                <li>
                  <a class="dropdown-item" href="<?= Url::to(['site/website-development']) ?>">Website Development</a>
                </li>
                <li><a class="dropdown-item" href="<?= Url::to(['site/mobile-app']) ?>">Mobile App</a></li>
                <li>
                  <a class="dropdown-item" href="<?= Url::to(['site/software-solution']) ?>">Software Solution</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-dark <?= $action == 'about' ? 'active' : '' ?>" aria-current="page" href="<?= Url::to(['site/about']) ?>">About</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-dark <?= $action == 'careers' ? 'active' : '' ?>" href="<?= Url::to(['site/careers']) ?>">Careers</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link btn btn-danger text-white nav_btn_contact" href="<?= Url::to(['site/contact']) ?>">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark nav_ul" href="#"><i class="far fa-search"></i></a>
            </li>
            <div class="top-bar-item top-bar-item-right px-0">
              <ul class="header-nav nav">
                <li class="nav-item">
                  <a class="nav-link no-hover" href="#">
                    <span><img src="<?= Yii::getAlias('@web/img/logo/uk-circle-01.png') ?>" alt="logo" class="logo-switch-language" /></span>
                    |
                    <span><img src="<?= Yii::getAlias('@web/img/logo/kh-circle-01.png') ?>" alt="logo" class="logo-switch-language" /></span>
                  </a>
                </li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</section>