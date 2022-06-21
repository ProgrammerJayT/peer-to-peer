<?php

class CustomerLoan extends Controller {
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $request = new Request();
        $loan = new Loan();
        $banking = new Banking();

        if ($data = $customer->where('cust_username', $_SESSION['USER']->auth_username)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name. ' ' .$surname;
            $id = $data->cust_uid;

            if (!$banking->where('auth_id', $_SESSION['USER']->auth_id)){
                
                $pendingRequest = '';
                $loanData = '';
                $offer = '';
                $hasBank = false;

            } else {
                $hasBank = true;

                if ($reqData = $request->where('cust_uid', $id)){
                    foreach ($reqData as $key => $reqValue) {
                        //if request has not yet been approved
                        if ($reqValue->is_approved == false){
                            $pendingRequest = $reqData[$key];
                            $loanData = '';
                            $offer = '';
                        } else {
                            if ($loanCheck = $loan->where('req_id', $reqValue->req_id)){
                                foreach ($loanCheck as $checkKey => $checkValue) {
                                    
                                    if ($checkValue->loan_status == 'pending'){
                                        $offer = $loanCheck;
                                        $pendingRequest = $reqData[$key];
                                        $loanData = '';
                                    } else if ($checkValue->loan_status == 'approved') {
                                        $offer = '';
                                        $loanData = $loanCheck[$checkKey];
                                        $pendingRequest = '';
                                    }
                                }
                            } else {
                                $offer = '';
                            }
                        }
                    }
            
                } else {
                    $pendingRequest = '';
                    $loanData = '';
                    $offer = '';
                }
            }

            $this->view('loan/customer',
            ['data'=>$data, 'name' => $fullName, 'request' => $pendingRequest, 'loan' => $loanData, 'offer' => $offer, 'hasBank' => $hasBank]);
        }
    }
}