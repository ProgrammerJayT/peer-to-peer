<?php

class CustomerRequests extends Controller {

    function index() {

        $request = new Request();
        $customer = new Customer();
        $investor = new Investor();
        $loan = new Loan();

        $myInfo = $investor->where('inv_username', $_SESSION['USER']->auth_username);
        $myInfo = $myInfo[0];

        if ($checkLoan = $loan->where('inv_uid', $myInfo->inv_uid)){
            foreach ($checkLoan as $checkKey => $checkValue) {
                if ($checkRequest = $request->where('req_id', $checkValue->req_id)){
                    foreach ($checkRequest as $key => $value) {
                        if ($checkValue->inv_uid != $myInfo->inv_uid){
                            $reqData = $checkRequest;
                            $custData = $customer->where('cust_uid', $value->cust_uid);
                        } else {
                            $reqData = '';
                            $custData = '';
                        }
                    }
                }
            }
        } else {
            if ($reqData = $request->findAll()){
                foreach ($reqData as $reqDataKey => $reqDataValue) {
                    $custData = $customer->where('cust_uid', $reqDataValue->cust_uid);
                }
            } else {
                $reqData = '';
                $custData = '';
            }
        }

        $this->view('loan/applications',
        ['requests' => $reqData, 'customer' => $custData]);
    }
}