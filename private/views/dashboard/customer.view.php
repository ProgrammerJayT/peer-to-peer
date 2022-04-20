<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PeerToPeer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Basic-Footer.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets/css/megamenu-dark-1.css">
    <link rel="stylesheet" href="assets/css/megamenu-dark.css">
    <link rel="stylesheet" href="assets/css/MENU-1.css">
    <link rel="stylesheet" href="assets/css/MENU-2.css">
    <link rel="stylesheet" href="assets/css/MENU-3.css">
    <link rel="stylesheet" href="assets/css/MENU.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Notes-Dashboard.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sakae-Curved-Header.css">
    <link rel="stylesheet" href="assets/css/Single-Advisor-Profile.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php
    $name = $rows->cust_fname . " " . $rows->cust_lname;
    $phone = $rows->cust_phone;
    $address = $rows->cust_address;
    $email = $rows->cust_email;
    $username = $rows->cust_username;
?>

<body style="background: rgb(255,255,255);">
    <div class="d-xl-flex flex-row justify-content-xl-center align-items-xl-center" style="height: 200px;background: #000000;margin-right: 200px;margin-left: 200px;border-radius: 25px;width: 800px;border-top-left-radius: 100px;border-bottom-left-radius: 100px;">
        <div style="width: 400px;"><img src="assets/img/sidebar-1.jpg" style="width: 200px;border-radius: 100px;height: 200px;"></div>
        <div style="width: 400px;border-top-left-radius: 0px;">
            <p style="color: rgb(255,255,255);margin-bottom: 0px;font-size: 25px;font-weight: bold;"><?=$name?></p>
            <p style="color: rgb(255,255,255);margin-bottom: 0px;"><?=$username?></p>
            <p style="color: rgb(255,255,255);margin-bottom: 0px;"><?=$email?></p>
            <p style="color: rgb(255,255,255);margin-bottom: 0px;"><?=$phone?></p>
            <p style="color: rgb(255,255,255);margin-bottom: 0px;"><?=$address?></p>
            <a href='login' style="color: rgb(0,0,0);opacity: 0.76;">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: rgb(255,255,255);font-size: 35px;margin-top: 10px;">
                    <path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></a>
        </div>
    </div>
    <div class="d-xl-flex justify-content-xl-center" style="margin-top: 50px;margin-bottom: 50px;"><img src="assets/img/logo_system.jpg" style="width: 200px;"></div>
    <section class="article-list">
        <div class="container-fluid d-xl-flex justify-content-xl-center align-items-xl-center">
            <div class="row articles" style="width: 600px;">
                <div class="col-sm-6 col-md-4 item"><a href='loanform'><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Apply for loan</h3><a class="action" href='loanform'><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">My loans</h3><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                    <h3 class="name">-----</h3><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/megamenu-dark.js"></script>
    <script src="assets/js/MENU.js"></script>
</body>

</html>