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

            $profit = 0;
            $invested = 0;
            $myCustomers = 0;

            if ($checkCustomers = $loan->where('inv_uid', $myID)){
                $myCustomers = count($checkCustomers);

                foreach ($checkCustomers as $key => $value) {
                    $profit += $value->amnt_to_pay;
                    $invested = $value->amnt_to_pay / (($value->loan_interest / 100) + 1);
                }
            }
            
            $this->view('dashboard/investor',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName, 'myCustomers' => $myCustomers, 'image' => $image, 'profit' => $profit, 'invested' => $invested]);
        }
    }
}