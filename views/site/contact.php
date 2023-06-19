<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="d-flax img-header">
    <img src="<?= Yii::getAlias('/img/prointix_image/Rectangle-12.png') ?>" class="img-fluid" alt="image">
    <div class="cover-custom img-overlay d-flex flex-column align-items-center justify-content-center overlay-teal">
        <h1 class="text-custom-contact">We are here </h1>
        <h1 class="text-center text-custom-contact">How can we help you?</h1>
        <div class="line"></div>
        <p class="text-custom-contact-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Vestibuornare vestibulum mollis. Nam vitae augue purus.</p>
    </div>
</div>
<div class="container-fluid mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="text-uppercase">get in touch</h1>
                <div class="row">
                    <div class="col-md-10">
                        <form class="mt-3">
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label h5" for="form3Example1">Name</label>
                                        <input type="text" id="form3Example1" class="form-control form-control-lg" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label h5" for="form3Example2">Phone</label>
                                        <input type="text" id="form3Example2" class="form-control form-control-lg" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label h5" for="form3Example3">Email</label>
                                <input type="email" id="form3Example3" class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label h5" for="form3Example4">Message</label>
                                <textarea class="form-control form-control-lg" id="form6Example7" rows="3"></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-danger btn-block mb-4 button">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="text-uppercase"><?= Html::encode($this->title) ?></h1>
                <div class="d-flax mt-5">
                    <h4>069 544 447</h4>
                    <small style="color: red;">Phone number</small>
                </div>
                <div class="d-flax">
                    <h4>robaer.it@gmail.com </h4>
                    <small style="color: red;">Email</small>
                </div>
                <div class="d-flax">
                    <h4>www.prointix.com</h4>
                    <small style="color: red;">Website</small>
                </div>
                <div class="d-flax mt-2">
                    <h4>#0677, Group 25, Banteay Chas, Slor Kram, Siem Reap </h4>
                    <small style="color: red;">Address</small>
                </div>
                <hr>
                <h4 style="color: red;">Office hour</h4>
                <p>Monday to Saturday <br>Morning: 8:00 AM - 12:00 PM<br>Afternoon: 1:00 PM - 5:00 PM</p>
                <div class="d-flex justify-content-start">
                    <a href="#" class="btn-icon mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="btn-icon mx-1"><i class="fa-solid fa-paper-plane"></i></a>
                    <a href="#" class="btn-icon mx-1"><i class="fa-regular fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid mt-5">
    <div class="container pb-5">
        <div class="d-flax">
            <h1>Our location</h1>
            <div class="line-contact"></div>
        </div>
        <div id="map-container-google-1" class="z-depth-1-half map-container mt-5" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15527.26711689251!2d103.84743538085623!3d13.361666109106691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017d8e848d339%3A0x2ceaa5f46dd48546!2sEuro%20Khmer%20Voyages-%20HQ!5e0!3m2!1sen!2sus!4v1686628752847!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>