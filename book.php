<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
<style>.swal-overlay {background-image: url("assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
    include ("php/connection.php");
    if(!isset($_POST['data'])){
        ?>
        <script>
            alert("Can\'t reload during booking, Please go back to Booking page")
            window.location.href='booking.php';
        </script>
        <?php
    }
    //print_r($_FILES);
    $decoded = unserialize($_POST['data']);
    //var_dump($_FILES['paymentfile']['name']);
    //exit;
    $source = $decoded['source'];
    $destination = $decoded['destination'];
    $uid=$_SESSION['user']['uid'];
    $cid=$decoded['cid'];
    $rid=$decoded['rid'];
    $did=$decoded['did'];
    $cost=0;
    $current=date("Y-m-d H-i-s");
    $startD= date("Y-m-d", strtotime($decoded['startDate']));
    $endD= date("Y-m-d", strtotime($decoded['endDate']));
    $start=strtotime($decoded['startDate']);
    $end=strtotime($decoded['endDate']);
    $days=($end-$start)/60/60/24;
    $route_qr=mysqli_query($conn,"SELECT * FROM `route` WHERE rid=$rid");
    $car_qr=mysqli_query($conn,"SELECT * FROM `car` WHERE cid=$cid");
    $mode=$decoded['mode'];
    $destination_paymentfile = '';
                            // file is not empty
    if(!empty($_FILES['paymentfile']['name']))
    {
        $file_name = $_FILES['paymentfile']['name']; // orginal file name
        $file_size = $_FILES['paymentfile']['size']; // bytes (by default the limit of file upload is set to 2 MB (modify php.ini to increase))
        $file_type = $_FILES['paymentfile']['type']; // media type
        $file_error = $_FILES['paymentfile']['error']; // file error
        $file_tmp_name = $_FILES['paymentfile']['tmp_name']; // file temp path

        echo($file_tmp_name);

        //  $date = date('d-m-Y');
        $destination_paymentfile = "uploaded/books/".date('d-m-Y_H-i-sa').$_FILES['paymentfile']['name'];

        // check if file type is jpg/png
        if($file_type=="image/jpg" || $file_type=="image/png" || $file_type=="image/JPG" || $file_type=="image/jpeg" || $file_type=="image/JPEG" || $file_type=="image/PNG")
        {
            # upload the file
            if(!move_uploaded_file($file_tmp_name, $destination_paymentfile)){
                var_dump($file_error);
                exit;
            }
            else{
                echo "Files uploaded successfully";
            }
        }
        else
        {
            echo "Invalid Image file, please upload jpg,png file only";
        }
    }
    else {
        echo "Testinggggggggggggggg";
    }
    // var_dump($destination_paymentfile);
    // exit;
    if($route_qr and $car_qr){
        $car=mysqli_fetch_array($car_qr);
        $route=mysqli_fetch_array($route_qr);
        $cost=$car['farepkm']*$route['distance'];
        if($mode=='day'){
            $days+=1;
        }
        $cost=$cost+($days*$car['farepd']);
        $insert=mysqli_query($conn,"INSERT INTO `booking`(`uid`, `rid`, `source`, `destination`, `startdate`, `enddate`, `hire_type`, `cid`, `did`, `status`, `cost`, `timing`,`paymentfile`) VALUES ($uid,$rid,'$source','$destination','$startD','$endD','$mode',$cid,$did,'Pending',$cost,'$current','$destination_paymentfile')");
        if($insert){
            echo "<img id='bg' src='assets/img/error/success.gif'>";
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
            <script>
                //alert("You must log in to perform this task");
                swal('Ride Requested','Booking request generated successfully','success',{buttons: {
                        catch: {
                            text: 'Go to Profile',
                            value: 'profile',
                        },
                    },closeOnClickOutside: false,
                },).then((value) => {
                    switch (value) {
                        case 'profile':
                            window.location.href="user/profile.php";
                            break;
                    }
                });
                //window.location.href = "user/user_login.php";
            </script>
            <?php
        }
        else{
            ?> <script>alert("Booking Error");window.location.href="booking.php";</script> <?php
        }
    }
    else{
        ?> <script>alert("Route fetching error")</script> <?php
    }
?>