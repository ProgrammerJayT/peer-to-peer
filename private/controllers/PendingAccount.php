<?php

class PendingAccount extends Controller {
    function index () {
        
        $this->view('auth/waiting');
    }
}