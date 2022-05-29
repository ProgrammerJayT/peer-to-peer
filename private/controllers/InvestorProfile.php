<?php

class InvestorProfile extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $investor = new Investor();

        if ($data = $investor->where('inv_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->inv_fname;
            $surname = $data->inv_lname;
            $fullName = $name. ' ' .$surname;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            $this->view('profile/investor',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName]);
        }
    }
}