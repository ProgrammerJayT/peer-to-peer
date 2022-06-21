<?php


class Login extends Controller
{
    function index(){
        $errors = array();

        if (isset($_POST['username'])){

            //Instantiate Auth class
            $auth = new Auth();

            if($row = $auth->where('auth_username', $_POST['username'])){
                $row = $row[0];
                //Check if user selected user type [Customer, Admin, Sponsor]
                if ($_POST['user'] == 'administrator'){
                    if($row->auth_type == 'admin'){
                        if (password_verify($_POST['password'], $row->auth_password)){
                            Authentication::authenticate($row, 'Admin');
                            $this->redirect('AdminDashboard');
                        } else {
                            $errors['login_error'] = "Incorrect credentials";
                        }
                    }
                    else {
                        $errors['user_error'] = 'Please select user type';
                    }
                }
                else {
                    if ($_POST['user'] == $row->auth_type){
                        if(password_verify($_POST['password'], $row->auth_password)){
                            $toast = 'Welcome back';
                            Authentication::authenticate($row, $toast);

                            if ($row->is_approved == false){

                                if ($row->uploaded_docs == false){
                                    $this->redirect('UploadDocuments');
                                } else {
                                    $this->redirect('PendingAccount');
                                }

                            } else {
                                if ($row->auth_type == 'customer'){
                                    $this->redirect('CustomerDashboard');
                                }
                                else{
                                    $this->redirect('InvestorDashboard');
                                }
                            }

                        } else {
                            $errors['login_error'] = "Incorrect credentials";
                        }
                    }
                    else {
                        $errors['login_error'] = "Incorrect credentials";
                    }
                }
            }
        }

        $this->view('auth/login', ['errors' => $errors]);
    }
}