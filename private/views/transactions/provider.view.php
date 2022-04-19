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

<body class="d-xl-flex flex-column align-items-xl-center overflow-auto">

    <?php
        //print_r($allService);
        //print_r($_SESSION['USER']);
        //echo count($allService);
    ?>
<div style="margin-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="width: 343px;">Requests</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-self-start"><i class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i><input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field" style="background-color: #eaeaea;width: 80%;height: 38px;padding: 0px;margin-left: 17px;" name="search"></div>
        </div>
        <div class="row">
            <div class="col-md-12"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Customer Contact</th>
                            <th>Service Requested</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Address</th>
                            <th>Additional Info</th>
                            <th>Approve Request</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        foreach ($allRequest as $provKey => $reqValue){
                            foreach ($allCustomer as $custKey => $custValue){

                                for ($i=0; $i<count($allService); $i++){
                                    if ($reqValue->serv_id == $allService[$i]->serv_id && $reqValue->is_accepted == 0 && $reqValue->cust_approved == 0 && $reqValue->is_completed == 0){
                                        if ($reqValue->cust_id == $custValue->cust_id){
                                            echo /** @lang text */'
                                            <tr>
                                                <td>'. ($provKey+1) .'</td>
                                                <td>'. $custValue->cust_fname . " ". $custValue->cust_lname .'</td>
                                                <td>'. $custValue->cust_phone .'</td>
                                                <td>'. $allService[$i]->serv_type .'</td>
                                                <td>'. $reqValue->req_date .'</td>
                                                <td>'. $reqValue->req_time .'</td>
                                                <td>'. $custValue->cust_address .'</td>
                                                <td>'. $reqValue->req_additional .'</td>
                                                <td>
                                                    <a href = "quoteprice?id='.$reqValue->req_id.'">
                                                        <button class="btn btn-danger" role="button" style="background: rgb(0,255,0);border-radius: 10px;">
                                                            <i class="fas fa-check fa-xs d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                                        </button>
                                                    </a>
                                                    <a href = "quoteprice?id='.$reqValue->req_id.'">
                                                        <button class="btn btn-danger" role="button" style="background: rgb(255,0,0);border-radius: 10px;">
                                                            <i class="fas fa-trash fa-xs d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>'
                                            ;
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

<div style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="width: 343px;">Pending Requests</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-self-start"><i class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i><input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field-1" style="background-color: #eaeaea;width: 80%;height: 38px;padding: 0px;margin-left: 17px;" name="search"></div>
        </div>
        <div class="row">
            <div class="col-md-12"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Customer Contact</th>
                        <th>Service Requested</th>
                        <th>Booking Date</th>
                        <th>Booking Time</th>
                        <th>Address</th>
                        <th>Quoted Price (R)</th>
                        <th>Done?</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($allRequest as $provKey => $reqValue){
                                foreach ($allCustomer as $custKey => $custValue){

                                    for ($i=0; $i<count($allService); $i++){
                                        if ($reqValue->serv_id == $allService[$i]->serv_id && $reqValue->is_accepted == 1 && $reqValue->cust_approved == 1 && $reqValue->is_completed == 0){
                                            if ($reqValue->cust_id == $custValue->cust_id){
                                                echo /** @lang text */'
                                                    <tr>
                                                        <td>'. ($provKey+1) .'</td>
                                                        <td>'. $custValue->cust_fname . " ". $custValue->cust_lname .'</td>
                                                        <td>'. $custValue->cust_phone .'</td>
                                                        <td>'. $allService[$i]->serv_type .'</td>
                                                        <td>'. $reqValue->req_date .'</td>
                                                        <td>'. $reqValue->req_time .'</td>
                                                        <td>'. $custValue->cust_address .'</td>
                                                        <td>'. $reqValue->req_additional .'</td>
                                                        <td>
                                                            <a href = " ">
                                                                <button class="btn btn-danger" role="button" style="background: rgb(0,255,0);border-radius: 10px;">
                                                                    <i class="fas fa-check d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>'
                                                ;
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


<div style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="width: 343px;">Completed Requests</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-self-start"><i class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i><input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field-1" style="background-color: #eaeaea;width: 80%;height: 38px;padding: 0px;margin-left: 17px;" name="search"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Customer Contact</th>
                        <th>Service Requested</th>
                        <th>Booking Date</th>
                        <th>Booking Time</th>
                        <th>Address</th>
                        <th>Quoted Price (R)</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($allRequest as $provKey => $reqValue){
                                foreach ($allCustomer as $custKey => $custValue){

                                    for ($i=0; $i<count($allService); $i++){
                                        if ($reqValue->serv_id == $allService[$i]->serv_id && $reqValue->is_accepted == 1 && $reqValue->cust_approved == 1 && $reqValue->is_completed == 1){
                                            if ($reqValue->cust_id == $custValue->cust_id){
                                                echo /** @lang text */'
                                                   <tr>
                                                     <td>'. ($provKey+1) .'</td>
                                                     <td>'. $custValue->cust_fname . " ". $custValue->cust_lname .'</td>
                                                     <td>'. $custValue->cust_phone .'</td>
                                                     <td>'. $allService[$i]->serv_type .'</td>
                                                     <td>'. $reqValue->req_date .'</td>
                                                     <td>'. $reqValue->req_time .'</td>
                                                     <td>'. $custValue->cust_address .'</td>
                                                     <td>'. $reqValue->serv_price .'</td>
                                                   </tr>'
                                                ;
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