<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Team-Rotating-Cards-BS4-.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable--1.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable-.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
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
                                    <div class="modal-body">
                                        Are you sure?
                                    </div>
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
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-file-pdf-o"></i><span>Statements</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
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
                <div class="container-fluid">
                    <section class="py-5">
                        <h1 class="text-center text-uppercase" style="margin-bottom: 20px;">My loans</h1>
                        <div class="container">
                            <div class="row">

                            <?php

                            if ($loans == ''){
                                echo /** @lang text */
                                'No loans were found';
                            }

                            else
                            {
                                foreach ($loans as $key => $val)
                                {
                                    if ($val->is_approved == 1){
                                        echo /** @lang text */
                                        '<div class="col-md-6 col-lg-4">
                                            <div class="card-container-imagia" style="border-left: 5px solid var(--bs-info) ;">
                                                <div class="card-imagia">
                                                    <div class="front-imagia">
                                                        <div class="cover-imagia cover-gradient" style="background: var(--bs-info);"></div>
                                                        <div class="d-xl-flex justify-content-xl-center user-imagia"><img class="rounded-circle" alt="" src="assets/img/WhatsApp%20Image%202022-05-20%20at%203.26.00%20PM.jpeg" width="120px" height="120px" loading="auto"></div>
                                                        <div class="py-1 px-3 text-center">
                                                            <h3 class="text-capitalize m-0" style="font-size: 25px;">Simon Jones</h3>
                                                            <p class="text-secondary mb-3">Investor</p>
                                                            <p><em><strong>You borrowed R15 301 from this investor</strong><br></em><em style="color: rgb(255,0,0);font-weight: bold;"><br>Balance to pay: R9 153<br></em></p>
                                                        </div>
                                                        <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2"><span><i class="fa fa-plus"></i> More info</span></div>
                                                    </div>
                                                    <div class="back-imagia">
                                                        <div class="d-flex align-items-center h-100 px-3">
                                                            <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center">
                                                                <h2 class="text-center">Loan Info</h2>
                                                                <p class="text-center">You have 165 days left to settle your balance, before your debt accumulates</p><a class="btn" role="button" style="background: var(--bs-info);color: rgb(255,255,255);width: 60%;margin-top: 50px;font-size: 15px;">Payment timeline</a>
                                                            </div>
                                                        </div>
                                                        <div class="footer-imagia w-100 text-secondary position-absolute text-center py-2">
                                                            <div class="social-imagia text-center"><a class="m-2" href="#"><i class="fa fa-phone-square"></i></a><a class="m-2" href="#"><i class="fa fa-linkedin"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }

                                    else {
                                        echo /** @lang text */
                                        '<div class="col-md-6 col-lg-4">
                                            <div class="card-container-imagia" style="border-left: 5px solid #ffc700;border-radius: 10px;">
                                                <div class="card-imagia">
                                                    <div class="front-imagia">
                                                        <div class="cover-imagia cover-gradient" style="background: #ffc700;"></div>
                                                            <div class="py-1 px-3 text-center">
                                                            <h3 class="text-capitalize m-0" style="font-size: 20px;padding-bottom: 50px;color: #ffc700;font-weight: bold;">Pending approval</h3>
                                                            <p><em><strong>You have requested a loan of</strong><br></em></p>
                                                        <h1 class="text-capitalize m-0" style="color: #00ae07;">R'.$val->req_amnt.'</h1>
                                                    </div>
                                                </div>
                                                <div class="back-imagia">
                                                    <div class="d-flex align-items-center h-100 px-3">
                                                        <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="width: 100%;">
                                                            <h2 class="text-center">Loan Info</h2>
                                                            <p style="width: 100%;margin-top: 10px;">Date: '.$val->req_date.'<br>Amount: R'.$val->req_amnt.'<br>Status: Pending</p><a class="btn" role="button" style="background: #ffc700;color: rgb(255,255,255);width: 60%;margin-top: 50px;font-size: 15px;">Edit request</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }
                            }

                            ?>

                            </div>
                        </div>
                    </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
    <script src="assets/js/Range-selector---slider.js"></script>
    <script src="assets/js/theme.js"></script>
    </script>

    <script>
        document.getElementById('logout').onclick = function(){
            $('#logoutDialog').modal('show');
        }
    </script>
</body>

</html>