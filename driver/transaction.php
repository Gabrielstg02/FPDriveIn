<?php
    include ("php/connection.php");
    if(!isset($_SESSION['driver'])){
        //        var_dump($_SESSION['admin']);
                ?>
                    <script type="text/javascript">
                        window.location.href = "driver_login.php";
                    </script>
                <?php
            }
            else{
        //        var_dump($_SESSION['admin']);
                if($qr=mysqli_query($conn,"select * from booking where status='Pending'")){
        
                }
                else{
                    ?><script>alert("Data fetching error")</script> <?php
                }
            }
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DriveIn</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- Bootstrap Link here-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body style="background-color: #a7907b40">
       
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Loading</strong>
                </div>
            </div>
        </div>
    </div> -->
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
                                        <li><a href="transaction.php">Transaction</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="driver/user_login.php" class="btn btn1 d-none d-lg-block" id="profile">Log In</a>
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

    <div>
                <div class="container-fluid" style="padding-top: 50px;">
                    <?php
                    if(mysqli_num_rows($qr)>0){
                        ?> <h2 style="text-align: center">Pending Booking Requests</h2> <?php
                    }
                    else{
                        ?> <h2 style="text-align: center">No Pending Booking Requests</h2> <?php
                    }
                    ?>
                    <table class="table table-striped center table-warning table-bordered" style="font-size: small;text-align: center;">
                        <?php
                        if(mysqli_num_rows($qr)){
                            ?>
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="10%">User's Photo</th>
                                <th scope="col">Source</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Pick up Date</th>
                                <th scope="col">Drop off Date</th>
                                <th scope="col">Hire type</th>
                                <th scope="col" width="1000">Car</th>
                                <th scope="col">Driver</th>
                                <th scope="col">Cost</th>
                                <th scope="col" width="10%">Approve Button</th>
                                <th scope="col">Reject Button</th>
                            </tr>
                            </thead>
                            <?php
                        }
                        ?>
                        <tbody>
                        <?php
                        while ($row=mysqli_fetch_array($qr)){
                            extract($row);
//                            var_dump($row);
                            $bid=$row['bid'];
                            $driver_qr=mysqli_query($conn,"select dname,pic from driver where did=$did");
                            $user_qr=mysqli_query($conn,"select name,pic from user where uid=$uid");
                            $car_qr=mysqli_query($conn,"select brand,cname,pic from car where cid=$cid");
                            $driver=mysqli_fetch_array($driver_qr);
                            $user=mysqli_fetch_array($user_qr);
                            $car=mysqli_fetch_array($car_qr);
                            $dpic=$driver['pic'];
                            $cpic=$car['pic'];
                            $upic='../'.$user['pic'];
//                            var_dump($driver);
//                            var_dump($user);
//                            echo $source;
                            ?>
                            <tr>
                                <th scope="row"><img title="<?php echo 'ID: '.$uid.' - Name: '.$user['name'];?>" class="img-fluid" src="<?php echo $upic?>" style="width: 100px"></th>
                                <td style="vertical-align: middle"><?php echo $source?></td>
                                <td style="vertical-align: middle"><?php echo $destination?></td>
                                <td style="vertical-align: middle"><?php echo $startdate?></td>
                                <td style="vertical-align: middle"><?php echo $enddate?></td>
                                <td style="vertical-align: middle"><?php echo $hire_type?></td>
                                <th scope="row"><img title="<?php echo 'ID: '.$cid.': '.$car['brand'].' - '.$car['cname'];?>" class="img-fluid" src="<?php echo $cpic?>" style="width: 100px"></th>
                                <th scope="row"><img title="<?php echo 'ID: '.$did.' - Name: '.$driver['dname'];?>" class="img-fluid" src="<?php echo $dpic?>" style="width: 100px"></th>
                                <td style="vertical-align: middle"><?php echo '₹ '.$cost.' Rupees'?></td>
                                <td style="vertical-align: middle">
                                <form method="post" action="functionalities/approve.php" id="approve-form<?php echo $bid?>">
                                    <?php $arr = [
                                        'bid' => $bid
                                    ];
                                    ?>
                                    <input type="hidden" name="data" value="<?php echo htmlentities(serialize($arr)); ?>">
                                    <input onclick="
                                            swal('Approve Ride','Are U sure? you want to approve this ride','info',{buttons: {
                                            cancel: 'No\, Don\'t Approve',

                                            catch: {
                                            text: 'Yes\, Approve Now',
                                            value: 'catch',
                                            },
                                            },closeOnClickOutside: false,
                                            },).then((value) => {
                                            switch (value) {
                                            case 'catch':
                                            swal('Approved', 'Ride approved successfully', 'success');
                                            $('#approve-form<?php echo $bid?>').submit();
                                            break;

                                            default:
                                            swal('Ride not approved','','warning');
                                            }
                                            });"
                                           class="btn btn-primary" value="<?php echo 'Approve this booking';?>"
                                    />
                                </form>
                                </td>
                                <td style="vertical-align: middle">
                                    <form method="post" action="functionalities/reject.php" id="reject-form<?php echo $bid?>">
                                        <?php $arr = [
                                            'bid' => $bid
                                        ];
                                        ?>
                                        <input type="hidden" name="data" value="<?php echo htmlentities(serialize($arr)); ?>">
                                        <input onclick="
                                                swal('Reject Ride','Are U sure? you want to reject this ride','info',{buttons: {
                                                cancel: 'No\, Don\'t Reject',

                                                catch: {
                                                text: 'Yes\, Reject Now',
                                                value: 'catch',
                                                },
                                                },closeOnClickOutside: false,
                                                },).then((value) => {
                                                switch (value) {
                                                case 'catch':
                                                swal('Rejected', 'Ride rejected successfully', 'error');
                                                $('#reject-form<?php echo $bid?>').submit();
                                                break;

                                                default:
                                                swal('Ride not rejected','','warning');
                                                }
                                                });"
                                               class="btn btn-primary" value="<?php echo 'Reject this booking';?>"
                                        />
                                    </form>
                                </td>
                            </tr>
                            <!-- Button trigger modal -->
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>


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
