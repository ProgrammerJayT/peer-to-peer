<?php

class CustomerLoan extends Controller {
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $request = new Request();
        $loan = new Loan();

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name. ' ' .$surname;
            $id = $data->cust_uid;

            if ($reqData = $request->where('cust_uid', $id)){
                foreach ($reqData as $key => $reqValue) {
                    if ($reqValue->is_approved == true){
                        $loanData = $loan->where('req_id', $reqValue->req_id);
                        foreach ($loanData as $loanKey => $loanValue) {
                            if ($loanValue->loan_status == 'approved'){
                                $loanAmount = $loanValue->amnt_to_pay;
                                $paybackDate = $loanValue->payback_date;
                            } else {
                                $loanAmount = 0;
                                $paybackDate = 'Loan not approved';
                            }
                        }
                    }
                }
        
            } else {
                $reqData = '';
                $loanData = '';
            }

            $this->view('loan/customer',
            ['data'=>$data, 'name' => $fullName, 'request' => $reqData, 'loan' => $loanData]);
        }
    }
}