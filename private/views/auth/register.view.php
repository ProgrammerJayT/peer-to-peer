<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>P2P FinTech (Pty) Ltd</title>
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

<body style="background: rgb(255,255,255);">

<section class="register-photo" style="padding-top: 20px;background: rgb(255,255,255);">
    <div class="form-container">
        <div class="image-holder" style="background: url('assets/img/sign_up.png') center / contain no-repeat;width: 400px;text-align: center;"></div>
        <form method="post">

            <?php if(count($errors) > 0) : ?>
            <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                <strong>Oops! </strong>
                <?php foreach ($errors as $error):?>
                <br> <?=$error?>
                <?php endforeach;?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php endif;?>

            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <div class="mb-3"><input class="form-control" value="<?=get_var('name')?>" type="text" name="name" placeholder="First name" required=""></div>
            <div class="mb-3"><input class="form-control" value="<?=get_var('surname')?>" type="text" name="surname" placeholder="Surname" required=""></div>
            <div class="mb-3"><input class="form-control" value="<?=get_var('id')?>" type="text" name="id" placeholder="Identity number" required="" minlength="13" maxlength="13"></div>
            <div class="mb-3"><input class="form-control" value="<?=get_var('phone')?>" type="tel" name="phone" placeholder="Phone (071.....68)" required="" minlength="10" maxlength="10"></div>
            <div class="mb-3"><input class="form-control" value="<?=get_var('address')?>" type="text" name="address" placeholder="Residential address" required=""></div>
            <h5 class="text-center" style="font-weight: bold;margin-top: 50px;margin-bottom: 5px;">Credentials</h5>
            <hr style="margin-top: 5px;">
            <div class="mb-3"><input class="form-control" value="<?=get_var('username')?>" type="text" name="username" placeholder="Username - (8 to 10 characters allowed)" required="" minlength="8" maxlength="10"></div>
            <div class="mb-3"><input class="form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" required=""></div>
            <div class="mb-3"><input class="form-control" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password" required="" minlength="8"></div>
            <div class="mb-3"><select class="form-control" name="user" style="color: var(--bs-gray-800);font-family: helvetica;">
                    <option <?=get_select('user', '')?> value="">Select user type</option>
                    <option <?=get_select('user', 'customer')?> value="customer">Customer</option>
                    <option <?=get_select('user', 'investor')?> value="investor">Investor</option>
                </select></div>
            <div class="mb-3">
                <button class="btn btn-primary d-block pulse animated w-100"
                        type="submit" style="background: rgb(0,0,0);border-radius: 10px;">Sign Up</button>
            </div>
            <a class="already" href="login">Already having an account? Login here.</a>
        </form>
    </div>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/MENU.js"></script>
<script src="assets/js/Side-Swipe-Menu-1.js"></script>
<script src="assets/js/Side-Swipe-Menu.js"></script>
<script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>
<?php $this->view('footer') ?>