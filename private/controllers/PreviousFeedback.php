<?php


class PreviousFeedback extends Controller{

    public function index () {
        $errors = array();

        $service = new Service();
        $feedback = new Feedback();
        $provider = new Provider();
        $customer = new Customer();

        $my_id = '';

        if ($id_query = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $id_query = $id_query[0];
            $my_id = $id_query->cust_id;
        }

        $allFeed = $feedback->where('cust_id', $my_id);
        $allProv = $provider->findAll();
        $allService = $service->findAll();

        $this->view('feedback/customer',
            ['errors' => $errors, 'allFeed' => $allFeed, 'allProv' => $allProv, 'allService' => $allService]);
    }

}