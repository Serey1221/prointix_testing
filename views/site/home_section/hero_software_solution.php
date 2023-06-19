<?php

/** @var yii\web\View $this */

$this->title = 'Software Solution';
?>

<section>
<section>
    <div class="hero_desgin">
        <div class="d-flax">
            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center overlay-cover-software">
                <div class="hero_text">
                    <h1 class="h1_hero_tex">Software Solution</h1>
                    <div class="hr_desgin"></div>
                </div>
            </div>
        </div>
        <img src="<?= Yii::getAlias('@web/img/logo/Rectangle 4422.png') ?>" alt="about image" class="w-100 cart" />
    </div>
</section>
<section>
    <div class="container py-5">
        <h3>What Software Solution do?</h3>
        <p class="py-4">Software solutions are a collection of software programs, services, and data that are designed to solve a specific problem or meet a specific need. They can be used by businesses, organizations, or individuals to improve efficiency, productivity, or effectiveness.
            Software solutions can be custom-built or off-the-shelf. Custom-built solutions are designed specifically for the needs of a particular organization or individual. Off-the-shelf solutions are available for purchase and can be used without modification.
        </p>
        <div class="row">
            <div class="col-6 py-5">
                <h3>Type of Software Solution</h3>
                <ul>
                    <li>
                        <p>Enterprise resource planning (ERP) solutions: ERP solutions help businesses manage their core operations, such as accounting, manufacturing, and supply chain management.</p>
                    </li>
                    <li>
                        <p>Customer relationship management (CRM) solutions: CRM solutions help businesses manage their customer interactions, such as sales, marketing, and customer support.</p>
                    </li>
                    <li>
                        <p>Human capital management (HCM) solutions: HCM solutions help businesses manage their employees, such as payroll, benefits, and performance management.</p>
                    </li>
                </ul>

            </div>
            <div class="col-6 py-5">
            <img src="<?= Yii::getAlias('@web/img/logo/our_service4.png') ?>" class="img_desgin">
            </div>
        </div>
    </div>
</section>
<hr class="hr_hero_our_service" />
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
                                    <h2 class="mb-h2">Website <br> Development</h2>
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