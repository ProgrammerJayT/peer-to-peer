<?php 

class ManageCustomers extends Controller {
    function index () {

        $auth = new Auth();

        $usersData = $auth->findAll();

        $this->view('manage/customer', ['usersData' => $usersData]);
    }
}