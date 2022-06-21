<?php 

class Approve extends Controller {

    function index() {
        $auth = new Auth();

        $id = $_GET['id'];

        $data['is_approved'] = true;

        $auth->update_auth($id, $data);
        $this->redirect('AdminDashboard');
    }
}