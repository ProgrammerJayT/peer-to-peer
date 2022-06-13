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
                if (count($reqData)<1){
                    $reqData = '';
                } else {
                    $reqData = $reqData[0];
                    $loanData = $loan->where('req_id', $reqData->req_id);
                    $loanData = $loanData[0];
                }
            } 

            $this->view('loan/customer',
            ['data'=>$data, 'name' => $fullName, 'request' => $reqData, 'loan' => $loanData]);
        }
    }
}