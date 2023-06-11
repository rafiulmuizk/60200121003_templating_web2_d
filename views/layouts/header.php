<?php 
    use yii\helpers\Url;
?>
<header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-center flex-wrap align-items-center">
                                    <div class="header-info-left">
                                        <ul>
                                            <li><span>ENDS TOMORROW:</span> Join Teachable for $4,800 in bonus content
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">

                                        <div class="cd-timer" id="countdown">
                                            <div class="cd-item">
                                                <span>40</span>
                                                <p>Days</p>
                                            </div>
                                            <div class="cd-item">
                                                <span>18</span>
                                                <p>Hours</p>
                                            </div>
                                            <div class="cd-item">
                                                <span>46</span>
                                                <p>Minutes</p>
                                            </div>
                                            <div class="cd-item">
                                                <span>32</span>
                                                <p>Seconds</p>
                                            </div>
                                        </div>

                                        <a href="#" class="browse-btn browse-btn2 ml-40 d-none d-sm-block">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">

                        <div class="left-side d-flex align-items-center">
                            <div class="logo">
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/index']) ?>"><img src="<?=Url::to(['template/img/logo/logo.png'])?>" alt=""></a>
                            </div>

                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['site/index']) ?>">Home</a></li>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['site/about']) ?>">About</a></li>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['site/program']) ?>">Programs</a></li>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['site/blog']) ?>">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="<?=Url::to(['site/index1'])?>">Project Yii2</a></li>
                                                <li><a href="<?=Url::to(['mahasiswa/index'])?>">Mahasiswa</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['site/kontak']) ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right-btn d-flex f-right align-items-center">
                            <a href="#" class="header-btn2 d-none d-xl-inline-block">Call Us : <span> 0 (78) 675
                                    3674</span></a>
                            <ul class="header-social d-none d-sm-block">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li> <a href="#"><i class="fab fa-youtube-square"></i></a></li>
                                <li> <a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>