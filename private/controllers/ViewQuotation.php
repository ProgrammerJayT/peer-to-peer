<?php


class ViewQuotation extends Controller {

    public function index () {

        $request = new Request();
        $service = new Service();
        $customer = new Customer();
        $provider = new Provider();

        if ($allReq = $request->where('req_id', $_GET['id'])){
            $allReq = $allReq[0];

            //Get service type
            if ($allService = $service->where('serv_id', $allReq->serv_id)){
                $allService = $allService[0];
            }

            //Get customer information
            if ($allCustomer = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
                $allCustomer = $allCustomer[0];
            }

            //Get provider information
            if ($allProvider = $provider->where('prov_id', $allReq->prov_id)){
                $allProvider = $allProvider[0];
            }
        }

        $this->view('quotation/customer',
            ['allReq' => $allReq, 'allService' => $allService, 'allCustomer' => $allCustomer, 'allProvider' => $allProvider]);
    }

}