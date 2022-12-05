<?php
include ("php/connection.php");
if(isset($_SESSION['user'])){
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // Change text of input button
            $("#profile").attr("href", "user/profile.php");

            // Change text of button element
            $("#profile").html("My Profile");
        });
    </script>
    <?php
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DriveIn | About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <style>
            .dining-area .single-dining-area.left-imgf {
                position: relative;
            }

            /* line 16, C:/Users/SPN Graphics/Desktop/hotel_up/Hotel_HTML/assets/scss/_dining.scss */
            .dining-area .single-dining-area.left-imgf::before {
                position: absolute;
                left: 0;
                content: "";
                top: 0;
                bottom: 0;
                background-image: url(assets/img/gallery/start2.jpg);
                width: 50%;
                border-radius: 0 5px 0 0;
                background-size: cover;
                background-repeat: no-repeat;
            }

            @media (max-width: 767px) {
                /* line 16, C:/Users/SPN Graphics/Desktop/hotel_up/Hotel_HTML/assets/scss/_dining.scss */
                .dining-area .single-dining-area.left-imgf::before {
                    display: none;
                }
            }

            .dining-area .single-dining-area.right-imgf {
                position: relative;
            }

            /* line 34, C:/Users/SPN Graphics/Desktop/hotel_up/Hotel_HTML/assets/scss/_dining.scss */
            .dining-area .single-dining-area.right-imgf::before {
                position: absolute;
                right: 0;
                content: "";
                top: 0;
                bottom: 0;
                background-image: url(assets/img/gallery/growing.jpg);
                width: 50%;
                border-radius: 0 0 0 5px;
                background-repeat: no-repeat;
                background-size: cover;
            }

            @media (max-width: 767px) {
                /* line 34, C:/Users/SPN Graphics/Desktop/hotel_up/Hotel_HTML/assets/scss/_dining.scss */
                .dining-area .single-dining-area.right-imgf::before {
                    display: none;
                }
            }
        </style>
   </head>

   <body style="background-color: #a7907b40">
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Loading</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="index.php"><img src="assets/img/logo/logoDriveIn.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="booking.php">Booking</a></li>
<!--                                        <li><a href="blog.html">Blog</a>-->
<!--                                            <ul class="submenu">-->
<!--                                                <li><a href="blog.html">Blog</a></li>-->
<!--                                                <li><a href="user/user_register.php">Blog Details</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
                                        <li><a href="cars.php">Services</a>
                                            <ul class="submenu">
                                                <li><a href="cars.php">Cars</a>
                                                <li><a href="drivers.php">Drivers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="user/user_login.php" class="btn btn1 d-none d-lg-block" id="profile">Log In</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/background/about.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>Our story - where we started</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="assets/img/gallery/better-journey.jpg" class="customar-img1" alt="">
                            <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3>Pelayanan Kami Adalah Pilihan<br>Terbaik</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span>Apa yang Kami Berikan?</span>
                            <h2>Kami membuat perjalanan Anda Lebih Baik</h2>
                            <div class="caption-details">
                                <p class="pera-dtails">Kenyamanan dan Keamanan Anda dalam Perjalanan adalah tanggung jawab kami</p>
                                <p>Melayanani pelanggan dengan pelayanan yang terbaik. Kami sangat senang melayani Anda. Perjalanan kami sangat memperhitungkan kenyamanan pelanggan.</p>
                                <a href="about.php" class="btn more-btn1">Pelajari Lebih Lanjut <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Dining Start -->
        <div class="dining-area dining-padding-top">
            <!-- Single Left img -->
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Driver Kami</span>
                                <h3>Driver kami akan mengantar Anda ke tujuan</h3>
                                <p>Driver kami adalah orang-orang terpilih dan mengutamakan kenyamanan dan keselamatan pelanggan. Driver kami juga sangat berpengalaman di bidangnya.</p>
                                <a href="drivers.php" class="btn border-btn">Driver Kami<i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Dining End -->

    

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>DriveIn merupakan platform terbaik di bidangnya.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Gabriel, <span>Pelanggan</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial2.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>DriveIn memberikan pelayanan yang terbaik dan tepat waktu.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Fany, <span>Pelanggan</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial3.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>DriveIn mempunyai driver yang sangat berpengalaman dan ramah
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star-half"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Berliana, <span>Pelanggan</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

    </main>
    <!-- Footer Start-->
    <div class="footer-area theme-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="index.php"><img src="assets/img/logo/logoDriveIn.png" alt="" width="250px"></a>
                         </div>
<!--                         <div class="footer-social footer-social2">-->
<!--                             <a href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                             <a href="#"><i class="fab fa-twitter"></i></a>-->
<!--                             <a href="#"><i class="fas fa-globe"></i></a>-->
<!--                             <a href="#"><i class="fab fa-behance"></i></a>-->
<!--                         </div>-->
                         <div class="footer-pera">
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="about.php">About DriveIn</a></li>
                                   <li><a href="cars.php">Our Cars</a></li>
                                   <li><a href="drivers.php">Our Drivers</a></li>
                                   <li><a href="booking.php">Book Car</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Talk to us</h4>
                               <ul>
                                   <li><a href="tel:1234567889">Tel: 123 4567 889</a></li>
                                   <li><a href="skype:live:.cid.734aa98970431b7c?chat">Skype: DriveIn</a></li>
                                   <li><a href="mailto:p2.ms@yandex.com">booking@drivein.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li>Surabaya, Indonesia</li>
                               </ul>
                               <!-- Form -->
<!--                                <div class="footer-form" >-->
<!--                                    <div id="mc_embed_signup">-->
<!--                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"-->
<!--                                        method="get" class="subscribe_form relative mail_part">-->
<!--                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"-->
<!--                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"-->
<!--                                            onblur="this.placeholder = ' Email Address '">-->
<!--                                            <div class="form-icon">-->
<!--                                              <button type="submit" name="submit" id="newsletter-submit"-->
<!--                                              class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>-->
<!--                                            </div>-->
<!--                                            <div class="mt-10 info"></div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
        
    </body>
</html>