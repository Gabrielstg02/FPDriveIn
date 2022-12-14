<?php include('../php/connection.php'); ?>
<?php if(isset($_SESSION['driver']))
{
    ?><script type="text/javascript">
    window.location.href = "driver_login.php";
</script>
    <?php
} ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Ride | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
    <style>.swal-overlay {background-image: url("../assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
</head>

<body style="background-color: #a7907b40">

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <strong>Done</strong>
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
                            <a href="../index.php"><img src="../assets/img/logo/myRIde_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">                                                                                                                                     
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="transaction.php">Transaction</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="driver_register.php" class="btn btn1 d-none d-lg-block ">Register</a>
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
<!-- slider Area Start-->
<div class="slider-area">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="../assets/img/background/login_bg.jpg" >
        <div class="container">
            <div class="row ">
                <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                    <div class="hero-caption">
                        <span>Log In</span>
                        <h2>Login - Book - Ride <br><br>That's simple</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
        <div>
                <div style="overflow-x:auto;width: 600px; margin: 0 auto;">
                    <form method="post" style="font-weight: bold;font-size: large" enctype="multipart/form-data">
                        <table cellpadding="15%" class="table-responsive" style="align-content: center">
                            <tr>
                                <td>Driver Name</td>
                                <td>
                                    <input type="text" name="name" placeholder="Enter driver's Name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Driver Address:
                                </td>
                                <td>
                                    <input type="text" name="address" placeholder="Enter Driver's Address" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Age:
                                </td>
                                <td>
                                    <input type="number" name="age" placeholder="Enter driver's Age" min="18" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Gender:
                                </td>
                                <td>
                                    <input type="radio" id="male" name="gender" value="Male" required>
                                    <label for="private">Male</label>
                                    <input type="radio" id="female" name="gender" value="Female">
                                    <label for="commercial">Female</label>
                                    <input type="radio" id="other" name="gender" value="Other">
                                    <label for="other">Other</label>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Contact Number:
                                </td>
                                <td>
                                    <input type="number" name="contact" placeholder="Enter Driver's Contact Number" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Licence Number:
                                </td>
                                <td>
                                    <input type="text" name="lics" placeholder="Enter Driver's Licence Number" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Driver picture:
                                </td>
                                <td>
                                    <input type="file" name="pic" required>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="submit" name="addDriver" value="Add Driver">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if(isset($_POST['addDriver'])){
                    foreach ($_POST as $key => $value){
                    if(empty($value)) {
                        ?>
                        <script type="text/javascript">alert("All fields are mandatory"); window.location.href="add_drivers.php";</script>
                    <?php
                    }
                    }
                    $image_path='uploaded/drivers/'.date('d-m-Y_H-i-sa').$_FILES['pic']['name'];
                    if($_FILES['pic']['type']=='image/jpg' || $_FILES['pic']['type']=='image/jpeg' || $_FILES['pic']['type']=='image/JPG' || $_FILES['pic']['type']=='image/JPEG' || $_FILES['pic']['type']=='image/png' || $_FILES['pic']['type']=='image/PMG'){
                    if(!move_uploaded_file($_FILES['pic']['tmp_name'],$image_path)){
                    //                            var_dump($_FILES['pic']);
                    //                            echo $image_path;
                    ?>
                        <script type="text/javascript">alert("Image upload error"); window.location.href="add_drivers.php";</script>
                    <?php
                    }
                    else{
                    $name=mysqli_real_escape_string($conn,$_POST['name']);
                    $address=$_POST['address'];
                    $age=mysqli_real_escape_string($conn,$_POST['age']);
                    $gender=$_POST['gender'];
                    $contact=mysqli_real_escape_string($conn,$_POST['contact']);
                    $lics=$_POST['lics'];
                    $datetime=date("d/m/Y h:i:sa");
                    $qr=mysqli_query($conn,"insert into driver (dname,address,age,gender,phno,lic,pic,datetime) values('$name','$address','$age','$gender','$contact','$lics','$image_path','$datetime')");
                    $datetime=date();
                    echo $datetime;
                    if($qr){
                        echo "<img id='bg' src='../assets/img/error/drifting-by.gif'>";
                        ?>
                        <style>
                            #whole-body {
                                /* The image used */
                                display: none;
                            }
                            #bg{
                                background-repeat: no-repeat;
                                width: 100%;
                                height: 100%;
                                size: auto;
                            }
                        </style>
                        <script type="text/javascript">
                            swal("Driver Added",'Driver added successfully','success',{
                                    buttons:{
                                        cancel: 'Add Driver',
                                    },
                                    closeOnClickOutside: false,
                                },
                            ).then((value) =>{
                                switch (value){
                                    default:
                                        // swal("Clicked");
                                        window.location.href="index.php";
                                }
                            });
                        </script>
                    <?php
                    }
                    else{
                    ?>
<!--                        <script type="text/javascript">alert("Car add error in database"); window.location.href="../add_cars.php";</script>-->
                    <?php
                    }
                    }
                    }
                    else{
                    ?>
                        <script type="text/javascript">alert("Invalid image file format"); window.location.href="../add_cars.php";</script>
                        <?php
                    }
                    }
                    ?>
                </div>

                </div>
            <div class="col-lg-4">
                <h1>Already have an account?</h1>
                <br><br>
                <h2>You are ready to go</h2>
                <br><br><br><br>
                <h1 style="font-size: 50pt; "><a href="driver_login.php">Login</a> now.</h1>
            </div>
        </div>

            </div>
            <!-- ============================================================== -->
        
    </div>
</section>
<!--================Blog Area =================-->

<footer>
    <!-- Footer Start-->
    <div class="footer-area black-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="index.php"><img src="../assets/img/logo/myride-footer.png" alt=""></a>
                        </div>
                        <!--                         <div class="footer-social footer-social2">-->
                        <!--                             <a href="#"><i class="fab fa-facebook-f"></i></a>-->
                        <!--                             <a href="#"><i class="fab fa-twitter"></i></a>-->
                        <!--                             <a href="#"><i class="fas fa-globe"></i></a>-->
                        <!--                             <a href="#"><i class="fab fa-behance"></i></a>-->
                        <!--                         </div>-->
                        <div class="footer-pera">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="about.php">About Myride</a></li>
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
                                <li><a href="skype:live:.cid.734aa98970431b7c?chat">Skype: Myride</a></li>
                                <li><a href="mailto:p2.ms@yandex.com">booking@myride.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Our Location</h4>
                            <ul>
                                <li><a href="https://goo.gl/maps/9U8wYcagqy6Awii89">Kutighat Baranagar Bazar</a></li>
                                <li><a href="https://goo.gl/maps/9U8wYcagqy6Awii89">Baranagar, West Bengal</a></li>
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
<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="../assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="../assets/js/jquery.scrollUp.min.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    var timepicker = $('#timepicker').timepicker({
        format: 'HH.MM'
    });
</script>
</body>
</html>