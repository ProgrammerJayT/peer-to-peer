$(window).on('load', function() {
    var sessionCheck = "<?php echo $_SESSION['Toast']?>";

        if (sessionCheck.length>0){
            let time =  setTimeout(hideModal, 2500);
            $('#welcomeMessage').modal('show');
        }

        function hideModal(){
            $('#welcomeMessage').modal('hide');
        }

    <?php unset($_SESSION['Toast']) ?>
});