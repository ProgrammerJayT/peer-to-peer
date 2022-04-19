<?php


class Login extends Controller
{
    function index(){
        $errors = array();

        if (count($_POST) > 0){

            $auth = new Auth();

            if($row = $auth->where('auth_email', $_POST['email'])){
                $row = $row[0];

                if(password_verify($_POST['password'], $row->auth_password)){
                    echo "False";
                    Authentication::authenticate($row);
                    $this->redirect('dashboard');
                }
            }
            $errors['login_error'] = "Incorrect credentials";
        }

        //echo view('home');
        $this->view('auth/login', ['errors' => $errors]);
    }
}