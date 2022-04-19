<?php


class DeleteService extends Controller {

    public function index () {

        $service = new Service();
        $id = $_GET['id'];

        if ($row = $service->where('serv_id', $id)){
            $row = $row[0];
        }
        $service->delete_service($id);

        $this->view('service/delete', ['rows' => $row]);
    }

}