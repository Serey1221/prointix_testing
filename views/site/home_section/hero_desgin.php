<?php

/** @var yii\web\View $this */

$this->title = 'UX/UI Desgin';
?>
<section>
    <div class="hero_desgin">
        <div class="d-flax">
            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center overlay-cover-ux-ui">
                <div class="hero_text">
                    <h1 class="h1_hero_tex">UX UI Desgin</h1>
                    <div class="hr_desgin"></div>
                </div>
            </div>
        </div>
        <img src="<?= Yii::getAlias('@web/img/logo/Rectangle 4421.png') ?>" alt="about image" class="w-100 cart" />
    </div>
</section>
<section>
    <div class="container py-5">
        <h3>What UX/UI Design do?</h3>
        <p class="py-4">UX designers use a variety of methods to understand user needs and pain points, including user research, usability testing, and A/B testing. They then use this information to create designs that are easy to use, efficient, and enjoyable.
            UI designers use a variety of tools and techniques to create visually appealing and functional interfaces, including typography, color theory, and animation. They work closely with UX designers to ensure that the design meets the needs of users and the overall goals of the product.</p>
        <div class="row">
            <div class="col-6 py-5">
                <h3>Task UX/UI Design</h3>
                <ul>
                    <li>
                        <p>Conduct user research to understand user needs and pain points</p>
                    </li>
                    <li>
                        <p>Create user personas to represent different types of users</p>
                    </li>
                    <li>
                        <p>Develop user flows to map out the user journey</p>
                    </li>
                    <li>
                        <p>Design wireframes and prototypes to test and iterate on designs</p>
                    </li>
                    <li>
                        <p>Create high-fidelity designs that are ready for development</p>
                    </li>
                    <li>
                        <p>Work with developers to implement designs</p>
                    </li>
                    <li>
                        <p>Conduct usability testing to ensure that designs are easy to use</p>
                    </li>
                    <li>
                        <p>Gather feedback from users and iterate on designs</p>
                    </li>
                </ul>

            </div>
            <div class="col-6 py-5">
                <img src="<?= Yii::getAlias('@web/img/logo/our_service2.png') ?>" class="img_desgin">
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