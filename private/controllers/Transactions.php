<?php


class Transactions extends Controller {

    public function index() {
        $request = new Request();
        $customer = new Customer();
        $provider = new Provider();
        $service = new Service();
        $errors = array();

        if ($id_query = $customer->where('cust_email', $_SESSION['USER']->auth_email)) {
            $id_query = $id_query[0];

            $my_id = $id_query->cust_id;
            $allRequest = $request->where('cust_id', $my_id);
        }

        $provData = $provider->findAll();
        $allService = $service->findAll();

        $this->view('transactions/customer',
            ['errors' => $errors, 'allRequest' => $allRequest, 'provData' => $provData, 'allService' => $allService]);
    }
}