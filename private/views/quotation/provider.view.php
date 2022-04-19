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
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Side-Swipe-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Company-Invoice.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
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

<body style="background: rgb(255,255,255);">

<?php if(count($errors) > 0) : ?>
    <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
        <strong>Oops! </strong>
        <?php foreach ($errors as $error):?>
            <br> <?=$error?>
        <?php endforeach;?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php endif;?>
    <section class="login-clean" style="background: rgb(255,255,255);">
        <form method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="border-radius: 0px;">
                <img src="assets/img/unnamed.jpg" style="width: 200px;border-radius: 16px;">
            </div>
            <div class="mb-3">
                <p style="text-align: center;">Enter quotation total price (in R)</p>
                <input class="form-control" name="price" required = "" type="text" style="border-radius: 10px;text-align: center;" placeholder="R0.00">
            </div>
            <div class="mb-3">
                <button class="btn btn-success btn-sm d-block w-100" type="submit" style="background: rgb(51,255,0);">Submit</button>
                <a class="btn" role="button" href="requests"
                   style="border-color: rgb(255,255,255);color: rgb(255,255,255);">&nbsp;Cancel</a>
            </div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/MENU.js"></script>
    <script src="assets/js/Side-Swipe-Menu-1.js"></script>
    <script src="assets/js/Side-Swipe-Menu.js"></script>
    <script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>
</html>