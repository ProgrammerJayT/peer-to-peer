<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
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
                    <li class="nav-item"><a class="nav-link" href="InvestorProfile"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-wpforms"></i><span>Sponsored loans</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="CustomerRequests"><i class="fa fa-hand-pointer-o"></i><span>Sponsor a customer</span></a></li>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="badge bg-danger badge-counter">0</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header" style="padding-bottom: 5px;padding-top: 5px;">alerts</h6>
                                        <a class="dropdown-item d-flex align-items-center" href="#" style="padding-top: 5px;padding-bottom: 5px;">
                                            <div><span class="small text-gray-500">June 12, 2022</span>
                                                <p>Test notification</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$name?></span>
                                        <img class="border rounded-circle img-profile" src="<?=$image?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>


                <div class="container">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0" style="color: var(--bs-info);">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-xxl-flex flex-column align-items-xxl-center">
                            <div style="width: 100%;height: 100px;background: #f2aa25;border-radius: 20px;padding-left: 10px;">
                                <div style="width: 100%;height: 100px;background: var(--bs-info);border-radius: 20px;">
                                    <div class="text-end" style="width: 100%;padding-top: 10px;padding-right: 20px;color: rgb(255,255,255);">
                                        <h3 class="text-end">My Customers</h3>
                                    </div>
                                    <div style="width: 100%;padding-left: 20px;">
                                        <p class="text-start" style="font-size: 30px;font-weight: bold;color: #ffa500;"><?=$myCustomers?></p>
                                    </div>
                                </div>
                            </div>
                            <lottie-player src="assets/js/100832-connection-people.json" mode="normal" style="width: 80%;" autoplay="" loop=""></lottie-player>
                        </div>
                        <div class="col-md-4 d-xxl-flex flex-column align-items-xxl-center">
                            <div style="border-radius: 20px;padding-left: 10px;background: var(--bs-gray-900);width: 100%;">
                                <div style="width: 100%;height: 100px;background: var(--bs-info);border-radius: 20px;">
                                    <div class="text-end" style="width: 100%;padding-top: 10px;padding-right: 20px;color: rgb(255,255,255);">
                                        <h3 class="text-end">Total Invested</h3>
                                    </div>
                                    <div style="width: 100%;padding-left: 20px;">
                                        <p class="text-start" style="font-size: 30px;font-weight: bold;color: #ffa500;">R<?=$invested?></p>
                                    </div>
                                </div>
                            </div>
                            <lottie-player src="assets/js/90698-online-investment.json" mode="normal" style="width: 80%;" loop="" autoplay=""></lottie-player>
                        </div>
                        <div class="col-md-4 d-xxl-flex flex-column align-items-xxl-center">
                            <div style="background: var(--bs-pink);border-radius: 20px;padding-left: 10px;width: 100%;">
                                <div style="width: 100%;height: 100px;background: var(--bs-info);border-radius: 20px;">
                                    <div class="text-end" style="width: 100%;padding-top: 10px;padding-right: 20px;color: rgb(255,255,255);">
                                        <h3 class="text-end">Profit</h3>
                                    </div>
                                    <div style="width: 100%;padding-left: 20px;">
                                        <p class="text-start" style="font-size: 30px;font-weight: bold;color: #ffa500;">R<?=$profit?></p>
                                    </div>
                                </div>
                            </div>
                            <lottie-player src="assets/js/99581-investment.json" mode="normal" style="width: 80%;" autoplay="" loop=""></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/lottie-player.min.js"></script>
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