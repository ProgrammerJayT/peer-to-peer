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
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Side-Swipe-Menu-1.css">
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

<body>
<?php
    $cc = $rows1->prov_email . "<br>" . $rows1->prov_phone;
    $service = $rows->serv_type;
?>
<section class="contact-clean" style="background: rgba(241,247,252,0);border-radius: 0px;padding-top: 20px;">
    <form method="post" style="border-radius: 20px;padding-bottom: 10px;">
        <h2 class="text-center" style="margin-top: 0px;">Book us!</h2>
        <div>
            <h6 class="text-center" style="margin-top: 0px;font-size: 20px;margin-bottom: 10px;"><?php echo $service?><br></h6>
            <h6 class="text-center" style="margin-top: 0px;margin-bottom: 10px;"><?php echo $cc?></h6>
        </div>
        <div class="mb-3"><textarea class="form-control" name="message" placeholder="Any additional info" rows="14"></textarea></div>
        <div class="mb-3"><input class="form-control" type="date" required="" name="date"></div>
        <div class="mb-3"><input class="form-control" type="time" required="" name="time"></div>
        <div class="d-md-flex justify-content-md-center align-items-md-center mb-3">
            <a class="btn" role="button" href="requestctrl"
               style="border-color: rgb(255,255,255);color: rgb(255,255,255);margin-top: 50px;">&nbsp;Cancel</a>
            <button class="btn" type="submit"
                    style="background: rgb(5,255,0);border-color: rgb(255,255,255);color: rgb(255,255,255);margin-top: 50px;">Submit</button>
        </div>
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
