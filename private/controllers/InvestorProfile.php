<?php

class InvestorProfile extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $investor = new Investor();
        $auth = new Auth();
        $errors = array();
        $alerts = array();

        if ($data = $investor->where('inv_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $id = $data->inv_uid;
            $name = $data->inv_fname;
            $surname = $data->inv_lname;
            $fullName = $name. ' ' .$surname;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            if (isset($_POST['username'])){
                if ($auth->where('auth_username', $_POST['username'])){
                    $errors['username'] = 'Username already exists';
                }
                else {
                    $authData['auth_username'] = $_POST['username'];
                    $investorData['inv_username'] = $_POST['username'];
                    
                    $auth->update_auth($_SESSION['USER']->auth_email, $authData);
                    $investor->update_investor($id, $investorData);
                    $alerts['username'] = 'Username updated successfully';

                    $data->inv_username = $_POST['username'];
                }
            }

            $this->view('profile/investor',
            ['data'=>$data, 'toast'=>$toast, 'name' => $fullName, 'errors' => $errors, 'alerts' => $alerts]);
        }
    }
}