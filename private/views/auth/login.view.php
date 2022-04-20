<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PeerToPeer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/megamenu-dark-1.css">
    <link rel="stylesheet" href="assets/css/megamenu-dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: rgb(255,255,255);">
    <div class="contenedorPrimario">
        <h1 class="padMar headerOmolds text-center"> <img src="assets/img/logo_system.jpg" style="width: 500px;"></h1>
    </div>
    <section class="login-clean" style="padding-top: 0;background: rgb(254,254,254);">
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
        <div class="mb-3"><select required="" name="user" class="form-select">
                <option <?=get_select('user', '')?>  value="undefined" selected="">--Select User Type--</option>
                <option <?=get_select('user', 'customer')?>  value="customer">Customer</option>
                <option <?=get_select('user', 'investor')?>  value="investor">Investor</option>
            </select>
        </div>
            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" required=""></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required="" minlength="8" maxlength="10"></div>
            <div class="mb-3"><button class="btn d-block w-100" type="submit" style="background: #ff3546;color: rgb(255,255,255);">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
            <hr>
            <p style="text-align: center;margin-top: 20px;margin-bottom: 10px;">No account yet?</p>
            <a class="forgot" href='register' style="font-weight: bold;color: rgb(0,0,0);">Register account</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/megamenu-dark.js"></script>
</body>

</html>