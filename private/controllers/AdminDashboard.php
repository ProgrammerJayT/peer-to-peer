<?php

class AdminDashboard extends Controller {

    function index(){

        $auth = new Auth();
        $admin = new Admin();
        $customer = new Customer();
        $investor = new Investor();
        
        $usersData = $auth->findAll();

        $this->view('dashboard/admin', ['usersData' => $usersData]);
    }
}