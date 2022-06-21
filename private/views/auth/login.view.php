<!DOCTYPE html>
<html style="width: 100%;height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Peer-to-peer Admin (copy)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="assets/css/-Team-Rotating-Cards-BS4-.css">
    <link rel="stylesheet" href="assets/css/3D-image.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable--1.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable-.css">
    <link rel="stylesheet" href="assets/css/Animated-numbers-section.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Animated-Typing-With-Blinking.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="assets/css/Circle-Nav.css">
    <link rel="stylesheet" href="assets/css/Countdown.css">
    <link rel="stylesheet" href="assets/css/Date-Picker-From-and-To.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-1.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-2.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-3.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-4.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/Form-Select---Full-Date---Month-Day-Year.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/css/lightpick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Navbar---Logo-Middle---Phone-Logo-Middle.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Powerful-Calendar.css">
    <link rel="stylesheet" href="assets/css/Slider-Range.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
</head>

<body class="d-md-flex d-lg-flex align-items-md-center align-items-lg-center" style="width: 100%;height: 100%;">
    <div class="container">
        <div class="row" style="width: 100%;">
            <div class="col-md-6 d-lg-flex d-xl-flex d-xxl-flex flex-column justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center">
                <form method="post" class="d-lg-flex flex-column align-items-lg-center" style="width: 100%;">
                
                <?php if(count($errors) > 0) : ?>
                    <div class="alert alert-warning alert-dismissible fade show p-1" role="alert" style="width:100%;">
                        <strong>Oops! </strong>
                        <?php foreach ($errors as $error):?>
                        <br> <?=$error?>
                        <?php endforeach;?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>

                    <div class="d-lg-flex d-xxl-flex flex-column align-items-lg-center align-items-xxl-center" style="width: 100%;">
                        <p style="width: 80%;margin-bottom: 0px;font-weight: bold;font-family: Nunito, sans-serif;color: var(--bs-blue);font-size: 20px;">Username</p>
                        <input class="form-control" type="text" style="width: 80%;border-radius: 20px;background: var(--bs-gray-400);border: 0px none rgb(255,255,255);padding-right: 10px;padding-left: 20px;padding-bottom: 5px;padding-top: 5px;color: var(--bs-gray-800);font-weight: bold;" name="username" minlength="8" maxlength="15" required="">
                    </div>
                    <div class="d-lg-flex d-xxl-flex flex-column align-items-lg-center align-items-xxl-center" style="width: 100%;margin-top: 25px;">
                        <p style="width: 80%;margin-bottom: 0px;font-weight: bold;font-family: Nunito, sans-serif;color: var(--bs-blue);font-size: 20px;">Password</p>
                        <input class="form-control" type="password" style="width: 80%;border-radius: 20px;border-style: none;border-color: rgb(255,255,255);background: var(--bs-gray-400);padding-right: 10px;padding-left: 20px;padding-bottom: 5px;padding-top: 5px;" name="password" required="" minlength="8" maxlength="15">
                    </div>
                    <div class="d-lg-flex d-xxl-flex flex-column align-items-lg-center align-items-xxl-center" style="width: 100%;margin-top: 25px;">
                        <p style="width: 80%;margin-bottom: 0px;font-weight: bold;font-family: Nunito, sans-serif;color: var(--bs-blue);font-size: 20px;">User type</p>
                        <select class="form-select" style="width: 80%;border-style: none;border-radius: 20px;padding-left: 20px;padding-right: 10px;padding-bottom: 5px;padding-top: 5px;background: var(--bs-gray-400);font-weight: bold;color: var(--bs-gray-dark);" name="user" required="">
                            <option value="administrator" selected="">--Choose user type--</option>
                            <option value="customer">Customer</option>
                            <option value="investor">Investor</option>
                        </select>
                    </div>
                    <div class="d-lg-flex d-xxl-flex flex-row align-items-lg-end align-items-xxl-center" style="width: 80%;margin-top: 50px;">
                        <a href="Register" style="width: 100%;">
                            <p style="margin-bottom: 0px;">No account yet? Go to registration</p>
                        </a>
                        <button class="btn btn-primary" type="submit" style="border-radius: 20px;width: 30%;">Continue</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-center justify-content-xl-center justify-content-xxl-center">
                <h1 style="font-family: 'Alfa Slab One', serif;color: var(--bs-blue);">Login</h1>
                <lottie-player src="assets/js/72874-user-profile-v2.json" mode="normal" loop="" autoplay="" style="width: 70%;"></lottie-player>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/lottie-player.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="assets/js/Date-Picker-From-and-To.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/Animated-numbers-section.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/Animated-Typing-With-Blinking.js"></script>
    <script src="assets/js/Circle-Nav.js"></script>
    <script src="assets/js/Countdown.js"></script>
    <script src="assets/js/DateRangePicker.js"></script>
    <script src="assets/js/ebs-bootstrap-datepicker-1.js"></script>
    <script src="assets/js/ebs-bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="assets/js/Multi-step-form.js"></script>
    <script src="assets/js/Powerful-Calendar.js"></script>
    <script src="assets/js/Range-selector---slider.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>