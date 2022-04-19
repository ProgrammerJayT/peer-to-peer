<?php $this->view('header/customer') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Handy Services</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Side-Swipe-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Company-Invoice.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/login-form-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/login-form.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets/css/MENU-1.css">
    <link rel="stylesheet" href="assets/css/MENU-2.css">
    <link rel="stylesheet" href="assets/css/MENU-3.css">
    <link rel="stylesheet" href="assets/css/menu-cinel-1.css">
    <link rel="stylesheet" href="assets/css/menu-cinel.css">
    <link rel="stylesheet" href="assets/css/MENU.css">
    <link rel="stylesheet" href="assets/css/Navbar-with-menu-and-login.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Profile-Card-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Side-Swipe-Menu.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu-v-10.css">
    <link rel="stylesheet" href="assets/css/Single-Advisor-Profile.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/tabs-Menu.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Ultimate-Sidebar-Menu.css">
</head>

<?php
    $name = $rows->cust_fname . " " . $rows->cust_lname;
    $phone = $rows->cust_phone;
    $address = $rows->cust_address;
    $email = $rows->cust_email;
?>
<body>
<main class="page" style="min-height: 100%;">
    <section class="clean-block about-us" style="padding-bottom: 0px;">
        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                <div class="card clean-card text-center">
                    <img class="card-img-top w-100 d-block" src="assets/img/logoComedor/avatar1.jpg">
                    <div class="card-body info">
                        <div class="row" style="margin-top: -24px;">
                            <div class="col-md-12" style="margin-top: 22px;">
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong><?=$name?></strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><?=$phone?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><?=$email?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><?=$address?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-12 col-lg-8 offset-lg-2"
         style="text-align: center;margin-top: 100px;">
        <a class="btn btn-danger" role="button"
           style="border:none;width:151px;height:58px;background-color:#e86767;"
           href="requestctrl">Request Service
        </a>
        <a class="btn btn-danger" role="button"
           style="border:none;width:151px;height:58px;margin-left:14px;background-color:#a0c65d;"
           href="previousfeedback">Feedback</a>
        <a class="btn btn-danger" role="button"
           style="border:none;width:151px;height:58px;margin-left:14px;background-color:#4bc4e0;"
           href="transactions">Transactions</a>
    </div>
</main>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/MENU.js"></script>
<script src="assets/js/Side-Swipe-Menu-1.js"></script>
<script src="assets/js/Side-Swipe-Menu.js"></script>
<script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>