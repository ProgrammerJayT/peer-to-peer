<?php


class WriteFeedback extends Controller{

    public function index () {
        $errors = array();

        $request = new Request();
        $feedback = new Feedback();
        $provider = new Provider();
        $customer = new Customer();
        $service = new Service();

        $my_id = '';

        if ($id_query = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $id_query = $id_query[0];
            $my_id = $id_query->cust_id;

            if ($req = $request->where('req_id', $_GET['id'])){
                $req = $req[0];

                if ($prov = $provider->where('prov_id', $req->prov_id)){
                    $prov = $prov[0];
                }

                if ($serv = $service->where('serv_id', $req->serv_id)){
                    $serv = $serv[0];
                }
            }
        }

        if (isset($_POST['message'])) {

            $data['serv_type'] = $serv->serv_type;
            $data['report_message'] = $_POST['message'];
            $data['cust_id'] = $my_id;
            $data['report_date'] = date("Y-m-d");
            $data['prov_id'] = $prov->prov_id;

            $feedback->insert($data);

            $this->redirect('completedrequests');
        }

        $this->view('feedback/write', ['prov' => $prov, 'serv' => $serv]);
    }

}