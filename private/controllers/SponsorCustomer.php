<?php

class SponsorCustomer extends Controller{
    function index(){
        $request = new Request();
        $customer = new Customer();

        $reqData = $request->where('req_id', $_GET['id']);
        $reqData = $reqData[0];

        $custData = $customer->where('cust_uid', $reqData->cust_uid);
        $custData = $custData[0];

        $this->view('loan/sponsor',
        ['request' => $reqData, 'customer' => $custData]);

    }
}