<?php

class EndRegister extends Controller {
    function index () {

        if (!isset($_SESSION['USER'])){
            $this->redirect('Login');
        }

        $auth = new Auth();

        if ($data = $auth->where('auth_username', $_SESSION['USER']->auth_username)){
            $data = $data[0];

            $id = $data->auth_id;
            $pushData['uploaded_docs'] = true;

            $auth->update_auth($id, $pushData);
        }

        
        $this->view('auth/waiting');
    }
}