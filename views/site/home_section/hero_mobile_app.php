<?php

/** @var yii\web\View $this */

$this->title = 'Mobile App';
?>

<section>
    <div class="hero_desgin">
        <div class="d-flax">
            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center overlay-cover-mobile">
                <div class="hero_text">
                    <h1 class="h1_hero_tex">Mobile App</h1>
                    <div class="hr_desgin"></div>
                </div>
            </div>
        </div>
        <img src="<?= Yii::getAlias('@web/img/logo/Rectangle 4423.png') ?>" alt="about image" class="w-100 cart" />
    </div>
</section>
<section>
    <div class="container py-5">
        <h3>What Mobile App do?</h3>
        <p class="py-4">Mobile app developers are responsible for the creation and maintenance of software applications for mobile devices, such as smartphones and tablets. They use a variety of programming languages and development tools to create apps that meet the needs of users and businesses.
        </p>
        <div class="row">
            <div class="col-6 py-5">
                <h3>Task Mobile App</h3>
                <ul>
                    <li>
                        <p>Development: The development stage involves writing the code for the app. This includes the user interface, the backend logic, and the database.</p>
                    </li>
                    <li>
                        <p>Testing: Once the app is developed, it needs to be tested on target devices. This includes testing the functionality, the performance, and the user experience.</p>
                    </li>
                    <li>
                        <p>Deployment: Once the app is tested and approved, it can be deployed to the app store.</p>
                    </li>
                </ul>

            </div>
            <div class="col-6 py-5">
            <img src="<?= Yii::getAlias('@web/img/logo/Rectangle 15.png') ?>" class="img_desgin">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
            <div class="text-center">
                <h1>Explore more services</h1>
            </div>
        <div class="slider_container">
            <div class="py-5">
                <div class="swiper cart_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="card mb-4 border-0 shadow-none" style=" padding: 2rem">
                                <img src="<?= Yii::getAlias('@web/img/logo/our_service1.png') ?>" alt="about image" class="w-100 cart" />
                                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-h2">Website Development</h2>
                                    <button class="btn btn-outline-danger text-white btn-viwe-detail">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card mb-4 border-0 shadow-none " style="padding: 2rem">
                                <img src="<?= Yii::getAlias('@web/img/logo/our_service2.png') ?>" alt="about image" class="w-100 cart" />
                                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-h2">UX UI Desgin</h2>
                                    <button class="btn btn-outline-danger text-white btn-viwe-detail">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card mb-4 border-0 shadow-none" style="padding: 2rem">
                                <img src="<?= Yii::getAlias('@web/img/logo/our_service3.png') ?>" alt="about image" class="w-100 cart" />
                                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-h2">Mobile App</h2>
                                    <button class="btn btn-outline-danger text-white btn-viwe-detail">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card mb-4 border-0 shadow-none" style="padding: 2rem">
                                <img src="<?= Yii::getAlias('@web/img/logo/our_service4.png') ?>" alt="about image" class="w-100 cart" />
                                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-h2">Software Solution</h2>
                                    <button class="btn btn-outline-danger text-white btn-viwe-detail">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next "></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
  <div class="row">
    <div class="col-6 text-center p-0">
      <img src="<?= Yii::getAlias('@web/img/logo/contact.png')?>" class="w-100">
    </div>
    <div class="col text-center bg-light">
      <div class="how_content">
        <h3>How Can we help you?</h3>
        <h1 class="text-danger">Get in touch with us</h1>
        <p class="text-muted-member">we are always happy to hear from customers. if you have any question, comments, or suggestions, pleas feel free to contact us. We can be reached
          by phone, email, or through our website.
        </p>
        <button class="btn btn-danger nav_btn_contact text-white f-18"><a href=""></a>Contact us</button>
      </div>
    </div>
  </div>
</section>