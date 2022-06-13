<?php

class SponsorCustomer extends Controller{
    function index(){
        $request = new Request();
        $customer = new Customer();
        $investor = new Investor();
        $loan = new Loan();

        $myDetails = $investor->where('inv_username', $_SESSION['USER']->auth_username);
        $myDetails = $myDetails[0];

        $reqData = $request->where('req_id', $_GET['id']);
        $reqData = $reqData[0];

        $custData = $customer->where('cust_uid', $reqData->cust_uid);
        $custData = $custData[0];

        $fullName = $custData->cust_fname . ' ' . $custData->cust_lname;
        $email = $custData->cust_email;
        $address = $custData->cust_address;
        $phone = $custData->cust_phone;
        $gender = $custData->cust_gender;
        $reqAmount = $reqData->req_amnt;

        if (isset($_POST['interest']) && isset($_POST['date'])){
            $loanData['loan_interest'] = $_POST['interest'];
            $loanData['loan_date'] = date("Y/m/d");
            $loanData['amnt_to_pay'] = $reqAmount + ($reqAmount * $_POST['interest'] / 100);
            $loanData['req_id'] = $_GET['id'];
            $loanData['inv_uid'] = $myDetails->inv_uid;
            $loanData['payback_date'] = $_POST['date'];

            $loan->insert($loanData);

            $this->redirect('CustomerRequests');
        }

        $this->view('loan/sponsor',
        ['request' => $reqData, 'customer' => $custData, 'fullName' => $fullName, 
        'reqAmount' => $reqAmount, 'email' => $email, 'address' => $address, 'phone' => $phone, 'gender' => $gender]);

    }
}