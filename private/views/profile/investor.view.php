<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
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
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-info);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fa fa-money"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 10px;">P2P fintech (pty) ltd</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="InvestorDashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link active"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-wpforms"></i><span>Sponsored loans</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="CustomerRequests"><i class="fa fa-hand-pointer-o"></i><span>Sponsor a customer</span></a></li>
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
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown">
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
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$name. ' '. $surname?></span>
                                        <img class="border rounded-circle img-profile" src="<?=$image?>" style="object-fit:cover;"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow">
                                    <img id="profileImage" class="rounded-circle mb-3 mt-4" src="<?=$image?>" width="160" height="160" style="object-fit:cover;">
                                    <div class="mb-3">
                                        <div id="modal-open">
                                            <div class="modal fade" role="dialog" tabindex="-1" id="changeProfileImage" aria-labelledby="exampleModalLabel"> 
                                            <form method="post" enctype="multipart/form-data"><div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Choose picture</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                            <div class="modal-body">
                                                                <input type="file" style="border: 1px solid rgb(235,235,238);border-top-right-radius: 10px;border-bottom-right-radius: 10px;color: var(--bs-info);" 
                                                                name="profile_picture" required="" accept="image/*">
                                                            </div>
                                                            <div class="modal-footer" style="border-width: 0px;">
                                                                <button class="btn" id="updateProfilePicture" type="submit" style="background: var(--bs-gray-900);color: #ffffff;">Upload</button>
                                                            </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#changeProfileImage" style="color: var(--bs-body-bg);font-weight: bold;background: var(--bs-info);">Change profile image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                                    <?php if(count($errors) > 0) : ?>
                                                <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                                                    <strong>Oops! </strong>
                                                    <?php foreach ($errors as $error):?>
                                                    <br> <?=$error?>
                                                    <?php endforeach;?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>

                                                <?php endif;?>

                                                <?php if(count($alerts) > 0) : ?>
                                                <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
                                                    <strong>Yay! </strong>
                                                    <?php foreach ($alerts as $alert):?>
                                                    <br> <?=$alert?>
                                                    <?php endforeach;?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>

                                                <?php endif;?>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3" style="background: var(--bs-info);height:60px;">
                                            <p class="m-0 fw-bold" style="color: rgb(255,255,255);">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label"><strong>Username</strong></label>
                                                            <input class="form-control" value="<?=$username?>" type="text" required="" minlength="8" maxlength="10" placeholder="Username" name="username"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label"><strong>Name</strong></label>
                                                                <input class="form-control" value="<?=$name?>" type="text" required="" placeholder="Name" name="name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label"><strong>Surname</strong></label>
                                                            <input class="form-control" value="<?=$surname?>" type="text" required="" placeholder="Surname" name="surname"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--bs-info);">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3" style="background: var(--bs-info);height:60px;">
                                            <p class="m-0 fw-bold" style="color: rgb(255,255,255);">Contact Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="mb-3"><label class="form-label" for="address">
                                                    <strong>Address</strong></label>
                                                    <input class="form-control" type="text" id="profile_address" value="<?=$address?>" placeholder="Address" name="address"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Phone</strong></label>
                                                        <input class="form-control" type="number" name="phone" value="<?=$phone?>" required="" minlength="10" maxlength="10" placeholder="Phone"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Email</strong></label>
                                                        <input class="form-control" type="email" name="email" value="<?=$email?>" required="" inputmode="email" placeholder="user@address.co.za"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--bs-info);">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        function updateProfileImage(){
            document.getElementById('profileImage').innerHTML = location.reload();
            
            <?php echo 'Something'; ?>
        }
    </script>
</body>

</html>