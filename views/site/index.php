<?php 
    use yii\helpers\Url;
?>

<main>

        <section class="slider-area position-relative">
            <div class="slider-active">

                <div class="single-slider slider-height hero-overly slider-bg1 d-flex  align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-12">
                                <div class="hero-caption">
                                    <span data-animation="fadeInUp" data-delay=".2s">EDUCATION & SCHOOL</span>
                                    <h1 data-animation="fadeInUp" data-delay=".2s">SHOWCASE COURSES,
                                        EVENTS AND MORE!</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Suspendisse varius enim in eros elementum tristique.</P>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/program']) ?>" class="btn_1 hero-btn" data-animation="fadeInUp"
                                        data-delay=".8s">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-area section-bg section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">

                        <div class="about-img about-img1  ">
                            <img src="<?=Url::to(['template/img/gallery/about1.jpg'])?>" alt="">
                        </div>
                    </div>
                    <div class="offset-xl-1 offset-lg-0 offset-sm-1 col-xxl-5 col-xl-5 col-lg-6 col-md-9 col-sm-11">
                        <div class="about-caption about-caption1">

                            <div class="section-tittle m-0">
                                <h2>A comprehensive
                                    teaching approach</h2>
                                <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis
                                    felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus
                                    metus, sed feugiat leo posuere ac. Morbi vitae tincidunt malesuada massa.</p>
                                <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer
                                    efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et
                                    malesuada massa.</p>
                                <a href="#" class="browse-btn mt-20">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-blog section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">

                        <div class="section-tittle text-center mb-40">
                            <h2>Programs we Offer</h2>
                            <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer
                                efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et
                                malesuada massa.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="<?=Url::to(['template/img/gallery/blog1.jpg'])?>" alt="">
                            </div>
                            <div class="blog-caption">
                                <h3><a href="#">Faculty of Science</a></h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi,
                                    et malesuada massa. Sed blandit placerat elit sit amet condimentum.</p>
                                <a href="#" class="browse-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blogs">
                            <div class="blog-img">
                                <img src="<?=Url::to(['template/img/gallery/blog2.jpg'])?>" alt="">
                            </div>
                            <div class="blog-caption">
                                <h3><a href="#">Faculty of Arts</a></h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi,
                                    et malesuada massa. Sed blandit placerat elit sit amet condimentum.</p>
                                <a href="#" class="browse-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="visit-three fix">

            <div class="tailor-details">
                <div class="section-tittle mb-40">
                    <h2>Essential resources</h2>
                    <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula.<br> Integer efficitur
                        tellus metus, sed feugiat leo posuere.</p>
                </div>

                <div class="single-gallery mb-15">
                    <div class="thumb-content-box d-flex">
                        <div class="thumb-content">
                            <div class="capt">
                                <h3>First year students</h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt
                                    mi, et malesuada massa.</p>
                            </div>
                            <a href="#"><i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="single-gallery mb-15">
                    <div class="thumb-content-box d-flex">
                        <div class="thumb-content">
                            <div class="capt">
                                <h3>Tuition & fees</h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt
                                    mi, et malesuada massa.</p>
                            </div>
                            <a href="#"><i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="single-gallery mb-15">
                    <div class="thumb-content-box d-flex">
                        <div class="thumb-content">
                            <div class="capt">
                                <h3>International students</h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt
                                    mi, et malesuada massa.</p>
                            </div>
                            <a href="#"><i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visit-team"></div>
        </section>


        <section class="class-offer-area section-padding border-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="section-tittle  d-flex justify-content-between align-items-center">
                            <h2>Top Stories</h2>
                            <a href="#" class="browse-btn mb-20">More Stories</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties pb-30">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="<?=Url::to(['template/img/gallery/class-img1.jpg'])?>" alt=""></a>
                                </div>
                                <div class="properties__caption text-center">
                                    <h3><a href="#">Linguistics alumna says recognizing Indigenous Languages Day is
                                            crucial to our histories</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties pb-30">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="<?=Url::to(['template/img/gallery/class-img2.jpg'])?>" alt=""></a>
                                </div>
                                <div class="properties__caption text-center">
                                    <h3><a href="#">Linguistics alumna says recognizing Indigenous Languages Day is
                                            crucial to our histories</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties pb-30">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="<?=Url::to(['template/img/gallery/class-img3.jpg'])?>" alt=""></a>
                                </div>
                                <div class="properties__caption text-center">
                                    <h3><a href="#">Linguistics alumna says recognizing Indigenous Languages Day is
                                            crucial to our histories</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="brand-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">

                        <div class="section-tittle text-center mb-60">
                            <h2>Our Pertners</h2>
                            <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer
                                efficitur tellus metus, sed feugiat leo posuere.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-end">
                    <div class="col-xl-8 col-lg-9">
                        <div class="brand-active text-center">
                            <div class="single-brand">
                                <img src="<?=Url::to(['template/img/gallery/brand1.png'])?>" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="<?=Url::to(['template/img/gallery/brand2.png'])?>" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="<?=Url::to(['template/img/gallery/brand3.png'])?>" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="<?=Url::to(['template/img/gallery/brand4.png'])?>" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="<?=Url::to(['template/img/gallery/brand2.png'])?>" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="<?=Url::to(['template/img/gallery/brand3.png'])?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="visit-one fix">

            <div class="visit-team">
                <div class="wrapper"></div>
            </div>

            <div class="tailor-details">
                <div class="section-tittle section-tittle2 mb-25">
                    <h2>TRUSTED BY OVER <br> 6000+ STUDENTS</h2>
                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis felis,
                        vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat
                        leo posuere ac. Morbi vitae tincidunt malesuada massa.</p>
                    <p class="mb-30">Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer
                        efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada
                        massa.</p>
                    <a href="#" class="browse-btn browse-btn2 mt-20">Join Now</a>
                </div>
            </div>
        </section>

</main>