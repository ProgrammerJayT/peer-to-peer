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

<body style="overflow: auto">
<div class="d-xxl-flex flex-grow-0 justify-content-xxl-center" style="margin-left: 25px; margin-top: 25px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="width: 343px;">Completed requests</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-self-start"><i class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i><input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field" style="background-color: #eaeaea;width: 80%;height: 38px;padding: 0px;margin-left: 17px;" name="search"></div>
        </div>
        <div class="row">
            <div class="col-md-12"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Service</th>
                        <th>Provider Name</th>
                        <th>Provider Contacts</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if($allRequest == ""){
                        echo /** @lang text */
                        '
                        <tr>
                            <td>You</td>
                            <td>have</td>
                            <td>not</td>
                            <td>made</td>
                            <td>any</td>
                            <td>request</td>
                            <td>yet</td>
                        </tr>';
                    }
                    else {
                        foreach ($allRequest as $reqKey => $reqValue) {
                            foreach ($provData as $provKey => $provValue) {
                                if ($reqValue->prov_id == $provValue->prov_id){
                                    for ($i = 0; $i < count($allService); $i++){
                                        if ($reqValue->serv_id == $allService[$i]->serv_id){
                                            if ($reqValue->is_accepted == 1
                                                && $reqValue->cust_approved == 1 &&
                                                $reqValue->is_completed == 1) {
                                                        echo /** @lang text */
                                                            '<tr>
                                            <td>' . $reqValue->req_date . '</td>
                                            <td>' . $reqValue->req_time . '</td>
                                            <td>' . $allService[$i]->serv_type . '</td>
                                            <td>' . $provValue->prov_fname ." ". $provValue->prov_lname . '</td>
                                            <td>' . $provValue->prov_phone ." ". $provValue->prov_email . '</td>
                                            <td>Completed</td>
                                            <td>
                                            <a class="btn btn-primary" role="button"
                                                style="width: 100px;height: 35px;border-style: none;background: rgb(0,0,0);font-size: 15px;"
                                                href = "writefeedback?id='.$reqValue->req_id.'">
                                                <i class="fas fa-list fa-sm"></i> Write</a>
                                            </td>
                                        </tr>';
                                                    }

                                        }
                                    }
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
