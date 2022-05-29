<?php

class CustomerProfile extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name .' '. $surname;
            $email = $data->cust_email;
            $username = $data->cust_username;

            $this->view('profile/customer',
            ['data'=>$data, 'name' => $name, 'surname' => $surname, 'fullName' => $fullName, 'email' => $email, 'username' => $username]);
        }
    }
}