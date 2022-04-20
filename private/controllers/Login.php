<?php


class Login extends Controller
{
    function index(){
        $errors = array();

        if (isset($_POST['username'])){

            $auth = new Auth();

            if($row = $auth->where('auth_username', $_POST['username'])){
                $row = $row[0];
        
                print_r($row);

                /*
                if(password_verify($_POST['password'], $row->auth_password)){
                    echo "False";
                }*/
                
                Authentication::authenticate($row);
                $this->redirect('dashboard');
            }
            $errors['login_error'] = "Incorrect credentials";
        }

        //echo view('home');
        $this->view('auth/login', ['errors' => $errors]);
    }
}