<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'CARRES';
?>
<div class="d-flax img-header">
    <img src="<?= Yii::getAlias('/img/prointix_image/Rectangle-11.png') ?>" class="img-fluid" alt="image">
    <div class="cover-custom img-overlay d-flex flex-column justify-content-center align-items-center overlay-red">
        <h1 class="text-white fw-bold mb-0 text-custom-careers">Careers</h1>
        <div class="line-careers"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="container pb-5">
        <div class="d-flax mt-5">
            <h2>Careers at <span class="text-danger">PROINTIX</span></h2>
            <h5 class="text-custom-careers-h5" style="color: gray;">Once you have chosen a career, you need to develop a plan to achieve your goals. This plan should include your education, training, and experience. You should also network with people in your field and attend industry events.</h5>
        </div>
        <div class="d-flax mt-4">
            <h5 class="text-custom-careers-h5" style="color: gray;">You think you have the Qualifications? Email a short cover letter and your up to date CV to careers@prointix.com</h5>
        </div>
        <hr class="mt-5">
        <div class="d-flax mt-5">
            <h2>Careers <span class="text-danger">Opportunities</span></h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 mt-2 mb-2">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="card-img-top" src="<?= Yii::getAlias('/img/prointix_image/Frame-3.png') ?>" alt="Image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="text-careers">
                                <small class="text-danger" style="font-size: 15px;">1 position</small>
                                <h4 class="mt-1">Web Application</h4>
                                <p class="lh-sm" style="color: gray;">Tempore cum odit placeat. Aliquam sapiente veniam explicabo cupiditate. Est non eum ut.</p>
                                <div class="d-flax gap-2">
                                    <button type="button" class="btn btn-lg btn-danger button">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-2 mb-2">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="card-img-top" src="<?= Yii::getAlias('/img/prointix_image/Frame-3.png') ?>" alt="Image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="text-careers">
                                <small class="text-danger" style="font-size: 15px;">1 position</small>
                                <h4 class="mt-1">Web Application</h4>
                                <p class="lh-sm" style="color: gray;">Tempore cum odit placeat. Aliquam sapiente veniam explicabo cupiditate. Est non eum ut.</p>
                                <div class="d-flax gap-2">
                                    <button type="button" class="btn btn-lg btn-danger button">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 mt-2 mb-2">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="card-img-top" src="<?= Yii::getAlias('/img/prointix_image/Frame-1.png') ?>" alt="Image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="text-careers ">
                                <small class="text-danger" style="font-size: 15px;">1 position</small>
                                <h4 class="mt-1">UX/UI Designer</h4>
                                <p class="lh-sm" style="color: gray;">Tempore cum odit placeat. Aliquam sapiente veniam explicabo cupiditate. Est non eum ut.</p>
                                <div class="d-flax gap-2">
                                    <button type="button" class="btn btn-lg btn-danger button">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-2 mb-2">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="card-img-top" src="<?= Yii::getAlias('/img/prointix_image/Frame-2.png') ?>" alt="Image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="text-careers">
                                <small class="text-danger" style="font-size: 15px;">1 position</small>
                                <h4 class="mt-1">Mobile App</h4>
                                <p class="lh-sm" style="color: gray;">Tempore cum odit placeat. Aliquam sapiente veniam explicabo cupiditate. Est non eum ut.</p>
                                <div class="d-flax gap-2">
                                    <button type="button" class="btn btn-lg btn-danger button">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('_sub_contact') ?>