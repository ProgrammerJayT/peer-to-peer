<?php

class InvestorDashboard extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $investor = new Investor();
        $loan = new Loan();

        if ($data = $investor->where('inv_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $myID = $data->inv_uid;
            $name = $data->inv_fname;
            $surname = $data->inv_lname;
            $fullName = $name. ' ' .$surname;
            $image = $data->profile_picture;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            if ($checkCustomers = $loan->where('inv_uid', $myID)){
                $myCustomers = count($checkCustomers);
            } else {
                $myCustomers = 0;
            }
            
            $this->view('dashboard/investor',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName, 'myCustomers' => $myCustomers, 'image' => $image]);
        }
    }
}