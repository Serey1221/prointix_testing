<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'ABOUT US';
?>
<div class="img-header d-flax">
    <img src="<?= Yii::getAlias("@web/img/prointix_image/Rectangle-8.png"); ?>" class="img-fluid" alt="about image">
    <div class="cover-custom img-overlay d-flex flex-column align-items-center justify-content-center overlay-violet">
        <h1>Who we are</h1>
        <div class="line-about"></div>
        <h4 class="text-center">We are your trusted IT solution software that can <br> providing and offering solution for you.</h4>
    </div>
</div>
<div class="d-flax">
    <img src="<?= Yii::getAlias('/img/prointix_image/Vision_and_Mission.png') ?>" class="img-fluid" alt="image">
    <div class="cover-custom d-flex flex-column justify-content-center">
        <div class="row text-center">
            <div class="col-lg-12 col-md-6 col-sm">
                <h1>Our Vision</h1>
                <p>“ We provide technological solutions that <br> improve the lives of others. ”</p>
            </div>
            <div class="col-lg-12 col-md-6 col-sm">
                <h1>Our Mission</h1>
                <p>“ Use our skills and resources to make the world <br> a better place. ”</p>
            </div>
        </div>
    </div>
</div>
<div clas="container-fluid">
    <div class="container pb-5">
        <div class="d-flex flex-column align-items-center justify-content-center mt-5 mb-4">
            <h1>Our Team Work</h1>
            <p class="text-muted text-center">We are a challenge team, our team can help to improve productivity,<br> creativity, and problem-solving skill.</p>
        </div>
        <?= $this->render('card') ?>
    </div>
</div>
<?= $this->render('_sub_contact') ?>