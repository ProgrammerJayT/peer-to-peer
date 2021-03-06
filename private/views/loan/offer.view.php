<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Peer-to-peer Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/divider-text-middle.css">
</head>

<body style="background: url(&quot;assets/img/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjkxNS10ZWNoaS0wMDIteC5qcGc.jpg&quot;) top / cover no-repeat;">
    <div class="container">
        <div class="row">
            <h1 style="font-weight: bold;color: var(--bs-info);margin-top:20px">Investor</h1>
            <div class="col-md-6 d-xl-flex flex-row" style="width: 50%;margin-top: 50px;">
                <div class="d-xl-flex d-xxl-flex flex-column align-items-xl-center align-items-xxl-center" style="width: 50%;"><img src="assets/img/shin-min-jeong-.jpg" style="width: 100%;border-radius: 1000px;"></div>
                <div class="d-xl-flex flex-column" style="padding-top: 20px;padding-left: 10px;">
                    <div class="d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center">
                        <lottie-player src="assets/js/8860-scan-waiting.json" mode="bounce" style="width: 70%;" autoplay="" loop=""></lottie-player>
                    </div>
                    <h3 style="font-weight: bold;margin-bottom: 0px;"><?=$investor->inv_fname?></h3>
                    <h1 style="font-weight: bold;color: var(--bs-gray-900);"><?=$investor->inv_lname?></h1>
                </div>
            </div>
            <div class="col-md-6" style="width: 50%;border-left-color: var(--bs-gray-300);">
                <div class="d-xl-flex flex-column align-items-xl-end" style="padding-top: 25px;">
                    <p style="color: var(--bs-info);font-weight: bold;margin-bottom: 5px;">Amount payable (Inc. interest)</p>
                    <h1 style="font-weight: bold;color: var(--bs-gray-900);">R<?=$loan->amnt_to_pay?></h1>
                    <p style="color: var(--bs-info);font-weight: bold;margin-bottom: 5px;margin-top: 20px;">Date payable</p>
                    <h1 style="font-weight: bold;color: var(--bs-gray-900);"><?=$loan->payback_date?></h1>
                    <p style="color: var(--bs-info);font-weight: bold;margin-bottom: 5px;margin-top: 20px;">Interest</p>
                    <h1 style="font-weight: bold;color: var(--bs-gray-900);"><?=$loan->loan_interest?>%</h1>
                </div>
                <div class="d-xl-flex flex-column justify-content-xl-center" style="border-left-style: none;">
                <button class="btn btn-primary" onclick=acceptOffer() type="button" style="margin-top: 50px;background: rgb(4,179,0);font-weight: bold;border-radius: 15px;width: 30%;">Accept offer</button>
                    <h2 style="margin-top: 30px;">--Or--</h2>
                    <div style="width: 100%;margin-top: 25px;margin-bottom: 10px;">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Payback period too short</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Interest rate too high</label></div>
                    </div><button class="btn btn-primary" type="button" style="margin-top: 10px;background: rgb(201,0,0);font-weight: bold;border-radius: 15px;width: 30%;margin-bottom: 100px;">Decline offer</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/lottie-player.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
        function acceptOffer() {
            <?php
                $_SESSION['offerDecision'] = 'accepted';
            ?>        
            location.reload();
        }
    </script>
</body>

</html>