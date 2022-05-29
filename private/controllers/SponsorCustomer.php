<?php

class SponsorCustomer extends Controller {

    function index() {

        $request = new Request();
        $customer = new Customer();

        $reqData = $request->findAll();
        $custData = $customer->findAll();

        $availableApplications = 0;

        foreach ($reqData as $reqKey => $reqVal){
            if ($reqVal->is_approved == false){
                $availableApplications = $availableApplications + 1;
            }
        }


        $this->view('loan/applications',
        ['requests' => $reqData, 'customer' => $custData, 'available' => $availableApplications]);
    }
}