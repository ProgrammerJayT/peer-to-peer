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

<body>
    <?php
        $acc_num = "";
        $bank_name = "";
        $my_address = $allCustomer->cust_address;
        $my_email = $allCustomer->cust_email;
        $my_name = $allCustomer->cust_fname ." ". $allCustomer->cust_lname;
        $my_phone = $allCustomer->cust_phone;
        $price = $allReq->serv_price;
        $service = $allService->serv_type;
        $acc_holder = substr($allProvider->prov_fname, 0, 1) ." ". $allProvider->prov_lname;
        $acc_type = "";
    ?>
<section class="d-xxl-flex justify-content-xxl-center">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="page-content container">

        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-12">
                        </div>
                    </div>
                    <!-- .row -->

                    <hr class="row brc-default-l1 mx-n1 mb-4" />

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">To:</span>
                                <span class="text-600 text-110 text-blue align-middle"><?php echo $my_name ?></span>
                            </div>
                            <div class="text-grey-m2">
                                <div class="my-1">
                                    <?php echo $my_address ?>
                                </div>
                                <div class="my-1">
                                    <?php echo $my_email ?>
                                </div>
                                <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i>
                                    <b class="text-600"><?php echo $my_phone ?></b></div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <hr class="d-sm-none" />
                            <div class="text-grey-m2">
                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                    Quotation
                                </div>

                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="mt-4">
                        <div class="row text-600 text-white bgc-default-tp1 py-25">
                            <div class="col-9 col-sm-5">Description</div>
                            <div class="col-2">Amount</div>
                        </div>

                        <div class="text-95 text-secondary-d3">
                            <div class="row mb-2 mb-sm-0 py-25">
                                <div class="col-9 col-sm-5"><?php echo $service ?></div>
                                <div class="col-2 text-secondary-d2"><?php echo $price ?></div>
                            </div>

                            <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                                <div class="col-9 col-sm-5">--</div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="my-1">
                                <b class="text-600"><?php echo "Banking details" ?></b>
                            </div>
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                <span class="text-600 text-110 text-blue align-middle"><?php echo $acc_holder ?></span>
                            </div>
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                <span class="text-600 text-110 text-blue align-middle"><?php echo $bank_name ?></span>
                            </div>
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                <span class="text-600 text-110 text-blue align-middle"><?php echo $acc_num ?></span>
                            </div>
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                <span class="text-600 text-110 text-blue align-middle"><?php echo $acc_type ?></span>
                            </div>

                            <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">

                                <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                    <div class="col-7 text-right">
                                        Total Amount
                                    </div>
                                    <div class="col-5">
                                        <span class="text-150 text-success-d3 opacity-2"><?php echo 'R'. $price ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="d-md-flex justify-content-md-center align-items-md-center mb-3">
                            <?php
                                if ($allReq->cust_approved == 0){
                                    echo '<a class="btn" role="button" href="https://www.paypal.com/signin"
                                    style="border-color: rgb(255,255,255);color: rgb(255,255,255);margin-top: 50px;">
                                    Reject</a>';

                                    echo '<a class="btn" role="button" href="acceptquotation?id='.$allReq->req_id.'"
                                    style="background-color: rgb(0,255,0);color: rgb(255,255,255);margin-top: 50px;">
                                    Approve & Pay Now</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/MENU.js"></script>
<script src="assets/js/Side-Swipe-Menu-1.js"></script>
<script src="assets/js/Side-Swipe-Menu.js"></script>
<script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>