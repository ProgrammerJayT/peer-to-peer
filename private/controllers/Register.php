<?php


class Register extends Controller
{
    function index(){

        $errors = array();

        if(count($_POST) > 0){
            $user = new User();
            $customer = new Customer();
            $investor = new Investor;
            $auth = new Auth();

            if($user->validate($_POST)){

                $gender = '';
                $genderPos = $_POST['id'];

                if ($genderPos[6] <=4){
                    $gender = 'female';
                } else {
                    $gender = 'male';
                }

                if($_POST['user'] == 'customer'){

                    $cust['cust_fname'] = $_POST['name'];
                    $cust['cust_lname'] = $_POST['surname'];
                    $cust['cust_address'] = $_POST['address'];
                    $cust['cust_email'] = $_POST['email'];
                    $cust['cust_phone'] = $_POST['phone'];
                    $cust['cust_username'] = $_POST['username'];
                    $cust['cust_id'] = $_POST['id'];
                    $cust['cust_gender'] = $gender;
                    $customer->insert($cust);
                }
                else {
                    $inv['inv_fname'] = $_POST['name'];
                    $inv['inv_lname'] = $_POST['surname'];
                    $inv['inv_phone'] = $_POST['phone'];
                    $inv['inv_email'] = $_POST['email'];
                    $inv['inv_address'] = $_POST['address'];
                    $inv['inv_username'] = $_POST['username'];
                    $inv['inv_id'] = $_POST['id'];
                    $inv['inv_gender'] = $gender;
                    $investor->insert($inv);
                }

                $to_auth['auth_username'] = $_POST['username'];
                $to_auth['auth_email'] = $_POST['email'];
                $to_auth['auth_password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $to_auth['auth_type'] = $_POST['user'];
                $auth->insert($to_auth);

                $toast = 'Welcome';

                $auth_obj = (object) $to_auth;
                Authentication::authenticate($auth_obj, $toast);

                if ($_POST['user'] == 'customer'){
                    $this->redirect('CustomerDashboard');
                }

                if ($_POST['user'] == 'investor'){
                    $this->redirect('InvestorDashboard');
                }

            }
            else{
                $errors = $user->errors;
            }
        }
        $this->view('auth/register', ['errors' => $errors]);
    }
}