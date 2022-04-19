<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Handy Services</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Side-Swipe-Menu-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Company-Invoice.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Header-Blue.css">
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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Navbar-with-menu-and-login.css">
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

<body style="background: rgb(255,255,255);">
<section class="login-clean" style="background: #ffffff;padding-top: 10px;">
    <h1 style="text-align: center;margin-bottom: 25px;font-weight: bold;">Handy Services</h1>
    <form method="post">

        <?php if(count($errors) > 0) : ?>
            <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                <strong>Failed! </strong>
                <?php foreach ($errors as $error):?>
                    <br> <?=$error?>
                <?php endforeach;?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php endif;?>

        <div class="illustration">
            <img src="<?=ROOT?>/assets/img/WhatsApp%20Image%202022-02-23%20at%202.27.15%20PM.jpeg" style="width: 150px;"></div>
        <div class="mb-3">
            <input class="form-control" value="<?=get_var('email')?>" type="email" required = "" name="email" placeholder="Email"></div>
        <div class="mb-3">
            <input class="form-control" type="password" required = "" value="<?=get_var('password')?>" name="password" placeholder="Password">
        </div>
        <div class="mb-3"><select required="" name="user" class="form-select">
                <option <?=get_select('user', '')?>  value="undefined" selected="">--Select User Type--</option>
                <option <?=get_select('user', 'customer')?>  value="customer">Customer</option>
                <option <?=get_select('user', 'provider')?>  value="provider">Service Provider</option>
            </select></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div>
        <hr><a class="forgot" href="<?=ROOT?>/register">No Account yet? Register</a>
    </form>
</section>
<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=ROOT?>/assets/js/bs-init.js"></script>
<script src="<?=ROOT?>/assets/js/MENU.js"></script>
<script src="<?=ROOT?>/assets/js/Side-Swipe-Menu-1.js"></script>
<script src="<?=ROOT?>/assets/js/Side-Swipe-Menu.js"></script>
<script src="<?=ROOT?>/assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>