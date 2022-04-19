<?php


class Services extends Controller {

    public function index () {

        $service = new Service();
        $provider = new Provider();

        if ($row = $provider->where('prov_email', $_SESSION['USER']->auth_email)){
            $row = $row[0];
            $id = $row->prov_id;

            unset($row);

            $row = $service->where('prov_id', $id);
            $this->view('service/services', ['rows' => $row]);
        }
    }
}