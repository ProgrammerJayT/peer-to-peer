<?php


class EditService extends Controller{

    public function index () {

        $service = new Service();
        $id = $_GET['id'];

        if ($row = $service->where('serv_id', $id)){
            $row = $row[0];
        }

        if (count($_POST) > 0){
            $update['serv_type'] = $_POST['service'];

            $service->update_service($id, $update);
            $this->redirect('services');
        }

        $this->view('service/edit', ['rows' => $row]);
    }
}