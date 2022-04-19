<?php
include('../auth_session.php');
include('customer_header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Handy Services</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/Side-Swipe-Menu-1.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="../assets/css/login-form-1.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/login-form.css">
    <link rel="stylesheet" href="../assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="../assets/css/MENU-1.css">
    <link rel="stylesheet" href="../assets/css/MENU-2.css">
    <link rel="stylesheet" href="../assets/css/MENU-3.css">
    <link rel="stylesheet" href="../assets/css/menu-cinel-1.css">
    <link rel="stylesheet" href="../assets/css/menu-cinel.css">
    <link rel="stylesheet" href="../assets/css/MENU.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="../assets/css/Profile-Card-1.css">
    <link rel="stylesheet" href="../assets/css/Profile-Card.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/Side-Swipe-Menu.css">
    <link rel="stylesheet" href="../assets/css/Simple-Vertical-Navigation-Menu-v-10.css">
    <link rel="stylesheet" href="../assets/css/Single-Advisor-Profile.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/tabs-Menu.css">
    <link rel="stylesheet" href="../assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Ultimate-Sidebar-Menu.css">
</head>

<body>
<div class="d-xl-flex justify-content-xl-center" style = "margin-top: 25px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="width: 343px;">Service providers</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-self-start"><i class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i><input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field" style="background-color: #eaeaea;width: 80%;height: 38px;padding: 0px;margin-left: 17px;" name="search"></div>
        </div>
        <div class="row">
            <div class="col-md-12"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Request</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    require('../db.php');
                    $sql = "select S.serv_type, S.serv_id, P.prov_fname, P.prov_lname, P.prov_email, P.prov_phone from `service` S Join `provider` P on S.prov_id = P.prov_id;";
                    $result = mysqli_query($con, $sql);

                    if (!$result) {
                        die("Invalid query: " . $con->error);
                    }

                    while ($row = $result->fetch_assoc()) {
                        echo "
    <tr>
        <td>" . $row["prov_fname"] . " " . $row["prov_lname"] . "</td>
        <td>" . $row["serv_type"] . "</td>
        <td>" . $row["prov_email"] . "</td>
        <td>" . $row["prov_phone"] . "</td>
		<td><a href = 'request_form.php?id=$row[serv_id]'>
		<button class='btn btn-primary d-block pulse animated w-80' role='button' style='background: rgb(0,0,0);border-radius: 10px;'>
        RequestCtrl
        </button></a>
        </td>  
    </tr>";
                    }

                    ?>

                    </tbody>
                </table></div>
        </div>
    </div>
</div>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/bs-init.js"></script>
<script src="../assets/js/MENU.js"></script>
<script src="../assets/js/Side-Swipe-Menu-1.js"></script>
<script src="../assets/js/Side-Swipe-Menu.js"></script>
<script src="../assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>