<?php


class AddService extends Controller {

    public function index () {
        $errors = array();

        if (count($_POST) > 0){

            $service = new Service();
            $provider = new Provider();

            if($row = $provider->where('prov_email', $_SESSION['USER']->auth_email)){
                $row = $row[0];

                $add['prov_id'] = $row->prov_id;
                $add['serv_type'] = $_POST['service'];

                $service->insert($add);
                $this->redirect('services');
            }
            $errors['message'] = "Something went wrong";
        }
        $this->view('service/add', ['errors' => $errors]);
    }

}