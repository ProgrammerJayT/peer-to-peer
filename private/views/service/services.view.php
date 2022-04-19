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
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Side-Swipe-Menu-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/login-form-1.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/login-form.css">
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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/tabs-Menu.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Ultimate-Sidebar-Menu.css">
</head>

<body>
<div class="text-center d-xl-flex justify-content-xl-center" style="transform-origin: center;margin-top: 50px;">
    <div class="container">
        <div class="row d-xl-flex justify-content-xl-center">
            <div class="col-md-4" style="margin-bottom: 25px;">
                <h2 style="width: 343px;">My service list</h2>
            </div>
            <div class="col-md-4" style="margin-bottom: 25px;">
                <a class="btn btn-primary" href="<?=ROOT?>/AddService" role="button">Add Service</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Service Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php

                    if($rows == ""){
                        echo /** @lang text */
                            '
                        <tr>
                            <td>You have not added any service(s) yet</td>
                            <td>Click add service button above</td>
                        </tr>';
                    }
                    else {
                        foreach ($rows as $key => $value) echo /** @lang text */
                            '
                        <tr>
                            <td>'. ($key+1) .".". $value->serv_type .'</td>
                            <td>
                                <a href = "editservice?id='.$value->serv_id.'">
                                    <button class="btn btn-danger" role="button" style="background: rgb(0,255,0);border-radius: 10px;">
                                    <i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                    </button>
                                </a>
                                <a href = "deleteservice?id='.$value->serv_id.'">
                                    <button class="btn btn-danger" type = "submit" style="background: rgb(255,0,0);border-radius: 10px;">
                                    <i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>';
                    }
                        ?>
                    </tbody>
                </table>
            </div>
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