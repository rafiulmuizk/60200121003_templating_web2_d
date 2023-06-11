<?php 
    use yii\helpers\Url;
?>

<footer>
        <div class="footer-wrapper gray-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-20">

                                    <div class="footer-logo mb-35">
                                        <a href="<?= Yii::$app->urlManager->createUrl(['site/index']) ?>"><img src="<?=Url::to(['template/img/logo/logo2_footer.png'])?>" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="#">Tips & Tricks</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Programs</h4>
                                    <ul>
                                        <li><a href="#">Air freight</a></li>
                                        <li><a href="#">Ocean freight</a></li>
                                        <li><a href="#">Large projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Resourses</h4>
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Submit Ticket</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle mb-10">
                                    <h4>Newsletter</h4>
                                    <p>Subscribe newsletter to get updates.</p>
                                </div>

                                <div class="footer-form mb-20">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Enter your email" class="placeholder hide-on-focus">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                    <img src="<?=Url::to(['template/img/icon/Icon-send.svg'])?>" alt="">
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="footer-social mt-30">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com/" target="_blank"
                                            rel="nofollow noopener">Colorlib</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
</div>