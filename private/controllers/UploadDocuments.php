<?php

class UploadDocuments extends Controller {
    function index () {

        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $this->view('upload/documents');
    }
}