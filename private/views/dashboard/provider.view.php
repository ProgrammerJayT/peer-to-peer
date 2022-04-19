<!DOCTYPE html>
<html lang="en" style="text-align: center;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Handy Services</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Side-Swipe-Menu-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/login-form-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/login-form.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MENU-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MENU-2.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MENU-3.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/menu-cinel-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/menu-cinel.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MENU.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Profile-Card-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Profile-Card.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Side-Swipe-Menu.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Simple-Vertical-Navigation-Menu-v-10.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Single-Advisor-Profile.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/tabs-Menu.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Ultimate-Sidebar-Menu.css">
</head>

<body style="text-align: center;background-color: white">

<?php
    $name = $rows[0]->prov_fname . " " . $rows[0]->prov_lname;
    $phone = $rows[0]->prov_phone;
    $address = $rows[0]->prov_address;
    $email = $rows[0]->prov_email;
?>

<div class="text-center profile-card" style="margin: 15px;background-color: #ffffff;border-style: none;">
    <div class="profile-card-img" style="background-image: url('iceland.jpg');height: 100px;background-size: cover;">

    </div>
    <div class="d-xl-flex d-xxl-flex flex-row justify-content-center justify-content-xl-center justify-content-xxl-center">
        <img class="rounded-circle" style="margin-top: -70px;" src="<?=ROOT?>/assets/img/avatar-dhg.png" height="150px">
    </div>
    <h3 class="d-xl-flex justify-content-xl-center"
        style="font-size: 30px;text-align: center;margin-top: 10px;font-weight: bold;">
        <?=$name?>
    </h3>
    <h3 class="d-xl-flex justify-content-xl-center" style="font-size: 15px;text-align: center;">
        <?=$email?>
        <br>
        <?=$phone?>
    </h3>
    <div class="d-xl-flex justify-content-xl-center">
        <hr style="width: 60%;text-align: center;">
    </div>
    <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
        <div class="col-md-6 d-xl-flex justify-content-xl-center align-items-xl-center"
             style="text-align: right;">
            <a class="btn btn-primary text-center d-xl-flex justify-content-xl-center align-items-xl-center"
               role="button" href = "services"
               style="width: 250px;height: 50px;margin-right: 5px;text-align: center;margin-left: 300px;">My Services
            </a>
        </div>
        <div class="col-md-6 d-xl-flex justify-content-xl-center align-items-xl-center"
             style="text-align: left;">
            <a class="btn btn-primary text-center d-xl-flex justify-content-xl-center align-items-xl-center"
               href = "requests" role="button"
               style="width: 250px;height: 50px;text-align: center;margin-left: 5px;margin-right: 300px;">Requests
            </a>
        </div>
    </div>
    <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
        <div class="col-md-6 d-xl-flex justify-content-xl-center align-items-xl-center" style="text-align: right;">
            <a class="btn btn-primary text-center d-xl-flex justify-content-xl-center align-items-xl-center" role="button"
               href = "bank_details.php"
               style="width: 250px;height: 50px;margin-right: 5px;text-align: center;margin-left: 300px;">Banking Details
            </a>
        </div>
        <div class="col-md-6 d-xl-flex justify-content-xl-center align-items-xl-center" style="text-align: left;">
            <a class="btn btn-primary text-center d-xl-flex justify-content-xl-center align-items-xl-center" role="button"
               href = "feedback.php"
               style="width: 250px;height: 50px;text-align: center;margin-left: 5px;margin-right: 300px;">Feedback/Reviews
            </a>
        </div>
    </div>
</div>
<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=ROOT?>/assets/js/bs-init.js"></script>
<script src="<?=ROOT?>/assets/js/MENU.js"></script>
<script src="<?=ROOT?>/assets/js/Side-Swipe-Menu-1.js"></script>
<script src="<?=ROOT?>/assets/js/Side-Swipe-Menu.js"></script>
<script src="<?=ROOT?>/assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>