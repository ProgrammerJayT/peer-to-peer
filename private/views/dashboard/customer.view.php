<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable--1.css">
    <link rel="stylesheet" href="assets/css/Animated-Header--Easy-Editable-.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-info);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fa fa-money"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 10px;">P2P fintech (pty) ltd</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="CustomerProfile"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="CustomerLoan"><i class="fa fa-wpforms"></i><span>My loan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="RequestLoan"><i class="fa fa-hand-pointer-o"></i><span>Apply for a loan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-file-pdf-o"></i><span>Statements</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                        <i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown">
                                    <span class="badge bg-danger badge-counter">0</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in" style="border-radius: 10px;border: 2px solid rgb(241,241,241) ;">
                                        <h6 class="dropdown-header" style="padding-bottom: 5px;padding-top: 5px;background: var(--bs-info);color: var(--bs-gray-100);">alerts</h6>

                                        <?php

                                            if (count($offer) < 1){
                                                echo '<div class="dropdown-divider"></div>';
                                                echo '<a class="dropdown-item">No offers</a>';
                                            }
                                            else {
                                                foreach ($offer as $itemKey => $offerVal) {
                                                    foreach ($investor as $invKey => $invValue) {
                                                        if ($offerVal->inv_uid == $invValue->inv_uid){
                                                            echo /** @lang text */
                                                            '
                                                                <a class="dropdown-item d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center justify-content-xxl-center" style="padding: 5px;" href="ViewOffer?id='.$offerVal->loan_id.'">
                                                                    <div style="width: 100%;"><span class="small text-gray-500">December 12, 2019</span>
                                                                        <p style="margin-bottom: 0px;">A new monthly report is ready to download!</p>
                                                                    </div>
                                                                </a>
                                                            ';
                                                        }
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown">
                                        <span class="badge bg-danger badge-counter">0</span><i class="fas fa-envelope fa-fw"></i></a>
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
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$name?></span>
                                        <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="CustomerProfile">
                                            <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" id="logout" onclick href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>

                    <div class="d-flex d-sm-flex justify-content-center align-items-center justify-content-xl-center mb-4" style="width: 100%;">
                        <div class="row space-rows" style="width: 100%;margin-right: 0px;margin-left: 0px;height: 30%;">
                            <div class="col">
                                <div class="card cards-shadown cards-hover" data-aos="flip-left" data-aos-duration="950" style="border-left-width: 5px;border-left-color: #00a5db;">
                                    <div class="card-header" style="background: var(--bs-white);height: 150px;">
                                        <div class="cardheader-text">
                                            <h4 id="heading-card-1" style="color: var(--bs-info);font-size: 20px;font-weight: bold;">Amount</h4>
                                            <p id="cardheader-subtext-1" style="color: var(--bs-info);">owing</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text sub-text-color" style="font-size: 20px;font-weight: bold;">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card cards-shadown cards-hover" data-aos="slide-right" data-aos-duration="950" style="border-left-width: 5px;border-left-color: #00a5db;">
                                    <div class="card-header" style="background: var(--bs-white);height: 150px;">
                                        <div class="cardheader-text">
                                            <h4 id="heading-card-2" style="color: var(--bs-info);font-weight: bold;font-size: 20px;">Rejected</h4>
                                            <p id="cardheader-subtext-2" style="color: var(--bs-info);">applications</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text sub-text-color" style="font-size: 20px;font-weight: bold;">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card cards-shadown cards-hover" data-aos="flip-up" data-aos-duration="950" style="border-left-width: 5px;border-left-color: #00a5db;">
                                    <div class="card-header cards-header-hover" style="background: var(--bs-white);height: 150px;">
                                        <div class="cardheader-text">
                                            <h4 id="heading-card-3" style="color: var(--bs-info);font-weight: bold;">Total</h4>
                                            <p id="cardheader-subtext-3" style="color: var(--bs-info);">loans</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text sub-text-color" style="font-size: 20px;font-weight: bold;">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal fade" id="welcomeMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background: #00cc21;border-radius: 15px;">
                                    <div class="d-xl-flex justify-content-xl-center align-items-xl-center bounce animated">
                                        <div class="d-xl-flex align-items-xl-center" style="margin-left: 10px;background: #ffffff;width: 100%;border-radius: 10px;border: 1px solid rgb(238,238,239);">
                                            <p style="padding: 10px;margin-bottom: 0px;"><?=$toast?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © P2P FinTech (Pty) Ltd 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
    <script src="assets/js/Range-selector---slider.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            var sessionCheck = '<?php echo $_SESSION['Toast']?>';

            if (sessionCheck.length>0){
                let time =  setTimeout(hideModal, 2500);
                $('#welcomeMessage').modal('show');
            }

            function hideModal(){
                $('#welcomeMessage').modal('hide');
            }

            <?php unset($_SESSION['Toast']) ?>
        });
    </script>

    <script>
        document.getElementById('logout').onclick = function(){
            $('#logoutDialog').modal('show');
        }
    </script>
</body>

</html>