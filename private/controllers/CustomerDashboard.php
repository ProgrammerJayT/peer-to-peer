<?php

class CustomerDashboard extends Controller{
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $request = new Request();
        $loan = new Loan();
        $investor = new Investor();
        $banking = new Banking();

        if ($data = $customer->where('cust_username', $_SESSION['USER']->auth_username)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name. ' ' .$surname;
            $myID = $data->cust_uid;
            $image = $data->profile_picture;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            if ($banking->where('auth_id', $_SESSION['USER']->auth_id)){
                $hasBank = true;
            }
            else {
                $hasBank = false;
            }

            //Check if customer has made a request
            if ($myRequest = $request->where('cust_uid', $myID)){
                foreach ($myRequest as $requestKey => $reqValue) {
                    if ($myLoan = $loan->where('req_id', $reqValue->req_id)){
                        $offer = $loan->where('loan_status', 'pending');
                        if ($approvedLoan = $loan->where('loan_status', 'approved')){
                            $approvedLoan = $approvedLoan[0];
                        }
                        foreach ($myLoan as $loanKey => $loanValue) {
                            $invData = $investor->where('inv_uid', $loanValue->inv_uid);
                        }
                    } else{
                        $offer = '';
                        $invData = '';
                        $approvedLoan = '';
                    }
                }
            } else {
                $offer = '';
                $invData = '';
                $approvedLoan = '';
            }

            $this->view('dashboard/customer',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName, 'offer' => $offer, 'investor' => $invData, 'loan' => $approvedLoan, 'hasBank' => $hasBank, 'image' => $image]);
        } else {
            print_r('Customer not found');
        }
    }
}