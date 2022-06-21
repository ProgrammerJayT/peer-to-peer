<!DOCTYPE html>
<html>

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

<body>
    <div class="container" style="margin-top: 20px;">
        <div>
            <h1 class="text-end" style="font-weight: bold;color: var(--bs-info);">Registration Form</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form style="width: 100%;" method="post">
                    <div>
                        <h3 style="font-weight: bold;color: var(--bs-info);">Personal Info</h3>
                    </div>
                    <div style="margin-top: 30px;">
                        <p style="margin-bottom: 10px;">First Name</p>
                        <input class="form-control" value="<?=get_var('name')?>" type="text" name="name" required="">
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 10px;">Last Name</p>
                        <input class="form-control" value="<?=get_var('surname')?>" type="text" required="" name="surname">
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 10px;">Residential Address</p>
                        <input class="form-control" value="<?=get_var('address')?>" type="text" required="" name="address">
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 10px;">ID Number</p>
                        <input class="form-control" value="<?=get_var('id')?>" type="number" required="" name="id">
                    </div>
                    <div style="margin-top: 50px;">
                        <h3 style="font-weight: bold;color: var(--bs-info);">Contact Info</h3>
                    </div>
                    <div style="margin-top: 30px;">
                        <p style="margin-bottom: 10px;">Email Address</p>
                        <input class="form-control" value="<?=get_var('email')?>" type="email" name="email" required="">
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 10px;">Phone</p>
                        <input class="form-control" value="<?=get_var('phone')?>" type="number" name="phone" step="1" required="">
                    </div>
                    <div style="margin-top: 50px;">
                        <h3 style="font-weight: bold;color: var(--bs-info);">Let's create your credentials</h3>
                    </div>
                    <div style="margin-top: 30px;">
                        <p style="margin-bottom: 10px;">Username</p>
                        <input class="form-control" value="<?=get_var('username')?>" type="text" name="username" required="" minlength="8" maxlength="10">
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 10px;">Password</p>
                        <input class="form-control" value="<?=get_var('password')?>" type="password" required="" minlength="8" maxlength="15" name="password">
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 10px;">User type</p><select class="form-select" name="user" required="">
                            <option <?=get_select('user', 'administrator')?> value="administrator" selected="">Please select user</option>
                            <option <?=get_select('user', 'customer')?> value="customer">Customer</option>
                            <option <?=get_select('user', 'investor')?> value="investor">Investor</option>
                        </select>
                    </div>
                    <div class="d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-end align-items-xl-end align-items-xxl-end" style="margin-top: 50px;margin-bottom: 100px;"><button class="btn" type="submit" style="border-radius: 20px;background: var(--bs-info);color: rgb(255,255,255);width: 30%;">Submit</button></div>
                </form>
            </div>
            <div class="col-md-6 d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-lg-center align-items-xl-center align-items-xxl-center">
             
                <div class="d-lg-flex flex-column align-items-lg-center" style="width: 100%;">
                    <?php if(count($errors) > 0) : ?>
                    <div style="width:100%;" class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                        <strong>Oops! </strong>
                        <?php foreach ($errors as $error):?>
                        <br> <?=$error?>
                        <?php endforeach;?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif;?>
                </div>   
            
                <div class="d-lg-flex flex-column align-items-lg-center" style="width: 100%;">
                    <lottie-player class="d-lg-flex flex-column align-items-lg-center" src="assets/js/86974-registration%20(1).json" mode="normal" style="width: 50%;" autoplay="" loop=""></lottie-player>
                </div>
                <div class="d-lg-flex flex-column align-items-lg-center" style="width: 100%;margin-top: 50px;">
                    <p>Already have an account?</p>
                </div>
                <div class="d-lg-flex flex-column align-items-lg-center" style="width: 100%;">
                <a class="btn" role="button" style="border-radius: 20px;background: var(--bs-info);color: rgb(255,255,255);width: 30%;" href="Login">Go to Login</a></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/lottie-player.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
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