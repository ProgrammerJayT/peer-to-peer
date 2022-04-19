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
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
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

<body class="text-center d-xxl-flex justify-content-xxl-center">

<div class="text-center d-xxl-flex justify-content-xxl-center rubberBand animated" style = "margin-top: 50px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 d-xl-flex flex-column align-items-center align-content-center align-self-center justify-content-xl-center align-items-xl-center">
                <h2 style="width: 343px;margin-top: 0px;">My reports</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-self-start">

            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center">
                <a class="btn btn-primary" role="button"
                   style="height: 35px;border-style: none;background: rgb(0,255,0);font-size: 15px;"
                   href="completedrequests">Write feedback
                    <i class="fa fa-plus-circle"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Provider Name</th>
                        <th>Provider Email</th>
                        <th>Provider Phone</th>
                        <th>Service</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        if ($allFeed == ""){
                            echo /** @lang text */
                                'You have not filed any report yet';
                        }else {
                            foreach ($allFeed as $dataKey => $dataValue){
                                foreach ($allProv as $provKey => $provValue){

                                    if ($dataValue->prov_id == $provValue->prov_id){
                                        echo /** @lang text */
                                            '
                                    <tr>
                                        <td>'. ($dataKey+1) .'</td>
                                        <td>'. $dataValue->report_date .'</td>
                                        <td>'. $provValue->prov_fname . " " . $provValue->prov_lname .'</td>
                                        <td>'. $provValue->prov_email .'</td>
                                        <td>'. $provValue->prov_phone .'</td>
                                        <td>'. $dataValue->serv_type .'</td>
                                        <td>'. $dataValue->report_message .'</td>
                                    </tr>';
                                    }
                                }
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/MENU.js"></script>
<script src="assets/js/Side-Swipe-Menu-1.js"></script>
<script src="assets/js/Side-Swipe-Menu.js"></script>
<script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>