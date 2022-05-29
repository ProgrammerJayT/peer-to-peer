<?php

class CustomerDashboard extends Controller{
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name. ' ' .$surname;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            $this->view('dashboard/customer',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName]);
        }
    }
}