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

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name. ' ' .$surname;
            $myID = $data->cust_uid;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            //Check if customer has made a request
            if ($myRequest = $request->where('cust_uid', $myID)){
                foreach ($myRequest as $key => $reqValue) {
                    if ($reqValue->is_approved == true){
                        $myLoan = $loan->where('req_id', $reqValue->req_id);
                        foreach ($myLoan as $loanKey => $loanValue) {
    
                            $invData = $investor->where('inv_id', $loanValue->inv_id);
    
                            if ($loanValue->loan_status == 'approved'){
                                $myLoanAmount = $loanValue->amnt_to_pay;
                                $paybackDate = $loanValue->payback_date;
                            }
                        }
                    }
                }
            }

            

            $this->view('dashboard/customer',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName, 'offer' => $offer, 'investor' => $invData, 'loanAmount' => $myLoanAmount, 'paybackDate' => $paybackDate]);
        }
    }
}