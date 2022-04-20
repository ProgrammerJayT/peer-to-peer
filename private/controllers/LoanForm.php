<?php

class LoanForm extends Controller {


    public function index () {

        $service = new Service();
        $provider = new Provider();
        $customer = new Customer();
        $request = new Request();

        $customer_id = '';

        if ($row = $service->where('serv_id', $_GET['id'])){
            $row = $row[0];

            if ($row1 = $provider->where('prov_id', $row->prov_id)){
                $row1 = $row1[0];
            }
        }

        if ($row2 = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $row2 = $row2[0];
            $customer_id = $row2->cust_id;
        }

        if (isset($_POST['amount'])){

            $data['prov_id'] = $row1->prov_id;
            $data['cust_id'] = $customer_id;
            $data['req_additional'] = $_POST['message'];
            $data['req_date'] = $_POST['date'];
            $data['req_time'] = $_POST['time'];
            $data['serv_id'] = $row->serv_id;

            $request->insert($data);
            $this->redirect('dashboard');
        }

        $this->view('loan/form', ['rows' => $row, 'rows1' => $row1]);
    }
}