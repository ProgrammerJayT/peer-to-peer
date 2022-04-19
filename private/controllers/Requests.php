<?php


class Requests extends Controller{

    public function index(){

        $request = new Request();
        $provider = new Provider();
        $customer = new Customer();
        $service = new Service();

        $my_id = '';

        if ($row = $provider->where('prov_email', $_SESSION['USER']->auth_email)){
            $row = $row[0];
            $my_id = $row->prov_id;
        }

        $allService = $service->where('prov_id', $my_id);
        $allRequest = $request->where('prov_id', $my_id);
        $allCustomer = $customer->findAll();

        $this->view('transactions/provider',
            ['allRequest' => $allRequest, 'allCustomer' => $allCustomer, 'allService' => $allService]);
    }
}