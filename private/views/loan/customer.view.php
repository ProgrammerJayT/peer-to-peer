<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/css/lightpick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Navbar---Logo-Middle---Phone-Logo-Middle.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Powerful-Calendar.css">
    <link rel="stylesheet" href="assets/css/Slider-Range.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
</head>

<body id="page-top">
    <div id="wrapper">
    <div class="modal fade" id="logoutDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout confirmation</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure?</div>
                    <div class="modal-footer">
                        <a href = "login">
                            <button type="button" id="logoutButton" class="btn btn-primary">Yes, logout</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-info);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fa fa-money"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 10px;">P2P fintech (pty) ltd</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="CustomerDashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="CustomerProfile"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link active"><i class="fa fa-wpforms"></i><span>My loan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="RequestLoan"><i class="fa fa-hand-pointer-o"></i><span>Apply for a loan</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">0</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">0</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$name?></span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div style="margin-top: 50px;">

                <?php

                if ($hasBank == false) {
                    echo /** @lang text */
                    '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You have not added a bank account yet. Please add one to continue.</p>
                    <hr>
                    <p class="mb-0">Please click <a href="AddBank" class="alert-link">here</a> to add a bank account.</p>';
                } else {
                    
                    if ($request == '' && $loan == ''){
                        echo /** @lang text */
                        '<div class="alert alert-danger" role="alert">
                            <p>You have not applied for any loan yet!</p>
                            <hr>
                            <p class="mb-0">Please apply for a loan by clicking the button below.</p>
                        </div>
                        <div class="d-sm-flex justify-content-between justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-xxl-center mb-4">
                            <h3 class="mb-0" style="color: var(--bs-info);">Apply for loan</h3>
                            <a class="btn" role="button" style="margin-left: 50px;border-radius: 20px;background: var(--bs-info);color: rgb(255,255,255);width: 20%;" href="RequestLoan">Apply Now&nbsp;<i class="fas fa-plus"></i></a>
                        </div>';
                    } else {
                        if ($request != '' && $request->is_approved == false){
                            echo /** @lang text */
                            '
                                <div>
                                    <div class="d-xl-flex flex-row align-items-xl-center" style="width: 100%;">
                                        <div class="d-xl-flex justify-content-xl-center align-items-xl-center" style="width: 50%;margin-left: 20px;background: var(--bs-info);border-radius: 25px;border-bottom: 5px solid rgb(255,0,0);height: 100px;">
                                            <h4 class="bounce animated" style="color: rgb(255,255,255);">Requested amount:&nbsp;</h4>
                                            <h1 class="bounce animated" style="color: rgb(255,255,255);">R'.$request->req_amnt.'</h1>
                                        </div>
                                        <div class="d-xl-flex flex-row justify-content-xl-center align-items-xl-center" style="width: 50%;margin-left: 20px;height: 100px;">
                                            <p class="d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-bottom: 0px;font-weight: bold;color: var(--bs-info);">Pending approval</p>
                                            <div style="background: #ff0000;height: 50px;width: 50px;margin-left: 5px;border-radius: 100px;"></div>
                                            <p class="d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-bottom: 0px;margin-left: 10px;font-weight: bold;color: var(--bs-info);">Approved</p>
                                            <div style="background: #18aa00;height: 50px;width: 50px;margin-left: 5px;border-radius: 100px;"></div>
                                        </div>
                                    </div>
                                    <div class="d-xl-flex flex-row align-items-xl-center" style="width: 100%;margin-left: 20px;margin-top: 10px;"><button class="btn" type="submit" style="border-radius: 20px;background: #dadada;font-size: 15px;color: rgb(255,0,0);font-weight: bold;">Cancel loan request</button></div>
                                </div>
                            ';
                        } else {
                            if ($loan != '' && $loan->loan_status == 'approved'){
                                echo /** @lang text */
                                '
                                <div>
                                    <div class="d-xl-flex flex-row align-items-xl-center" style="width: 100%;">
                                        <div class="d-xl-flex justify-content-xl-center align-items-xl-center" style="width: 50%;margin-left: 20px;background: var(--bs-info);border-radius: 25px;height: 100px;border-bottom: 5px solid rgb(0,152,15) ;">
                                            <h4 class="bounce animated" style="color: rgb(255,255,255);">Loan amount:&nbsp;</h4>
                                            <h1 class="bounce animated" style="color: rgb(255,255,255);">R'.$loan->amnt_to_pay.'</h1>
                                        </div>
                                        <div class="d-xl-flex flex-row justify-content-xl-center align-items-xl-center" style="width: 50%;margin-left: 20px;height: 100px;">
                                            <p class="d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-bottom: 0px;font-weight: bold;color: var(--bs-info);">Pending approval</p>
                                            <div style="background: #ff0000;height: 50px;width: 50px;margin-left: 5px;border-radius: 100px;"></div>
                                            <p class="d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-bottom: 0px;margin-left: 10px;font-weight: bold;color: var(--bs-info);">Approved</p>
                                            <div style="background: #18aa00;height: 50px;width: 50px;margin-left: 5px;border-radius: 100px;"></div>
                                        </div>
                                    </div>
                                    <div class="d-xl-flex flex-column" style="width: 100%;margin-top: 50px;">
                                        <div style="margin-left: 20px;">
                                            <p style="margin-bottom: 0px;font-size: 25px;">Payback period</p>
                                        </div>
                                        <div class="d-flex countdown" data-count="'.$loan->payback_date.'" style="margin-left: 20px;">
                                            <div style="border-top-color: var(--bs-info);">
                                                <h3 style="color: rgb(0,0,0);font-size: 40px;">%d</h3>
                                                <h4>Days</h4>
                                            </div>
                                            <div style="border-top-color: var(--bs-info);">
                                                <h3 style="color: rgb(0,0,0);font-size: 40px;">%h</h3>
                                                <h4>Hours</h4>
                                            </div>
                                            <div style="border-top-color: var(--bs-info);">
                                                <h3 style="color: rgb(0,0,0);font-size: 40px;">%m</h3>
                                                <h4>Minutes</h4>
                                            </div>
                                            <div style="border-top-color: var(--bs-info);">
                                                <h3 style="color: rgb(0,0,0);font-size: 40px;">%s</h3>
                                                <h4>Seconds</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
    
                            }
                        }
                    }
                }
                ?>
                
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright � P2P FinTech (Pty) Ltd 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
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