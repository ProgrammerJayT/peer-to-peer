<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sponsor Customer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
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
    <link rel="stylesheet" href="assets/css/Form-Select---Full-Date---Month-Day-Year.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
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
                    <li class="nav-item"><a class="nav-link" href="InvestorDashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="InvestorProfile"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-wpforms"></i><span>Sponsored loans</span></a></li>
                    <li class="nav-item"><a class="nav-link active"><i class="fa fa-hand-pointer-o"></i><span>Sponsor a customer</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
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
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$fullName?></span>
                                        <img class="border rounded-circle img-profile" src="<?=$image?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="InvestorProfile"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="mb-4" style="color: rgb(0,150,255);font-size: 30px;">Customers Loan Applications</h3>
                    <div class="card shadow">
                        <div class="card-header py-3" style="background: var(--bs-info);height: 100px;">
                            <p class="m-0 fw-bold" style="color: rgb(255,255,255);font-size: 20px;">Application Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                        <thead>
                                            <?php
                                                if ($requests != ''){
                                                    echo /** @lang text */
                                                    '
                                                        <tr>
                                                            <th style="color: rgb(0,150,255);">Name</th>
                                                            <th style="color: rgb(0,150,255);">Email Address</th>
                                                            <th style="color: rgb(0,150,255);">Phone</th>
                                                            <th style="color: rgb(0,150,255);">Address</th>
                                                            <th style="color: rgb(0,150,255);">Date</th>
                                                            <th style="color: rgb(0,150,255);">Amount</th>
                                                            <th style="color: rgb(0,150,255);">Action</th>
                                                        </tr>
                                                    ';
                                                }
                                                else {
                                                    echo 'No loan applications available';
                                                }
                                            ?>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if ($requests != ''){
                                                foreach ($requests as $reqKey => $reqVal){
                                                    foreach ($customer as $custKey => $custVal){
                                                        if ($reqVal->is_approved == false
                                                        && $custVal->cust_uid == $reqVal->cust_uid){
                                                            echo /** @lang text */
                                                                '
                                                                    <tr>
                                                                    <td><img class="rounded-circle me-2" width="30" height="30"
                                                                    src="assets/img/avatars/avatar1.jpeg">'.$custVal->cust_fname.' '.$custVal->cust_lname.'</td>
                                                                    <td>'.$custVal->cust_email.'</td>
                                                                    <td>'.$custVal->cust_phone.'</td>
                                                                    <td>'.$custVal->cust_address.'</td>
                                                                    <td>'.$reqVal->req_date.'</td>
                                                                    <td>R'.$reqVal->req_amnt.'</td>
                                                                    <td class="d-xl-flex justify-content-xl-center align-items-xl-center pulse animated">
                                                                        <div><a class="btn btn-sm" href="SponsorCustomer?id='.$reqVal->req_id.'" role="button"
                                                                        style="--bs-success: #00ff57;--bs-success-rgb: 0,255,87;--bs-body-bg: #00ff38;background: var(--bs-info);color: rgb(255,255,255);">Make Offer</a>
                                                                        </div>
                                                                        </td>
                                                                </tr>
                                                            ';
                                                        }
    
                                                    }
                                                }
                                            }
                                        ?>
                                        </tbody>

                                        <tfoot>
                                            <?php
                                                if ($requests != ''){
                                                    echo /** @lang text */
                                                    '
                                                        <tr>
                                                            <th style="color: rgb(0,150,255);">Name</th>
                                                            <th style="color: rgb(0,150,255);">Email Address</th>
                                                            <th style="color: rgb(0,150,255);">Phone</th>
                                                            <th style="color: rgb(0,150,255);">Address</th>
                                                            <th style="color: rgb(0,150,255);">Date</th>
                                                            <th style="color: rgb(0,150,255);">Amount</th>
                                                            <th style="color: rgb(0,150,255);">Action</th>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tfoot>
                                    </table>
                            </div>
                            <?php
                                if ($requests != ''){
                                    echo /** @lang text */
                                        '
                                        <div class="row">
                                            <div class="col-md-6 align-self-center">
                                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 2 of 2</p>
                                            </div>
                                            <div class="col-md-6">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        ';
                                }
                            ?>
                        </div>
                        <div class="modal fade" id="loanTerms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 style="font-size: 25px;font-weight: bold;color: var(--bs-info);">Terms and conditions</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="message-1" required="" name="terms" rows="6" placeholder="Write your terms and conditions here" style="text-align: left;"></textarea></div>
                                        <div class="mb-3">
                                            <p style="color: var(--bs-info);font-size: 20px;font-weight: bold;">Choose payback date</p>
                                        </div>
                                        <div class="d-xxl-flex justify-content-xxl-center mb-3">
                                            <div class="row d-xxl-flex justify-content-xxl-center">
                                                <div class="col-sm-12 d-xxl-flex justify-content-xxl-center">
                                                    <select class="form-select display-inline-block" name="">
                                                        <option value="1" selected="">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                    <select class="form-select display-inline-block">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                    <select class="form-select display-inline-block">
                                                        <option value="2023" selected="">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </form>
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
</body>

</html>