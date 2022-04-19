<?php


class AcceptQuotation extends Controller {

    public function index () {
        $request = new Request();

        $data['cust_approved'] = 1;

        $request->accept_quote($_GET['id'], $data);

        $this->redirect('transactions');
    }
}