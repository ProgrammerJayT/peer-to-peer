<?php


class RequestCtrl extends Controller {

    public function index () {

        $service = new Service();
        $provider = new Provider();

        $row = $service->findAll();
        $row1 = $provider->findAll();

        $this->view('service/request', ['rows' => $row, 'rows1' => $row1]);
    }
}