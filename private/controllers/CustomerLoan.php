<?php

class CustomerLoan extends Controller {
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $request = new Request();

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name. ' ' .$surname;
            $id = $data->cust_uid;

            if ($loans = $request->where('cust_uid', $id)){
                if (count($loans)<1){
                    $loans = '';
                }
            }

            $this->view('loan/customer',
            ['data'=>$data, 'name' => $fullName, 'loans' => $loans]);
        }
    }
}