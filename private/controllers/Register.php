<?php


class Register extends Controller
{
    function index(){

        $errors = array();

        if(count($_POST) > 0){
            $user = new User();
            $customer = new Customer();
            $provider = new Provider();
            $auth = new Auth();

            if($user->validate($_POST)){
                if($_POST['user'] == 'customer'){
                    $cust['cust_fname'] = $_POST['name'];
                    $cust['cust_lname'] = $_POST['surname'];
                    $cust['cust_address'] = $_POST['address'];
                    $cust['cust_email'] = $_POST['email'];
                    $cust['cust_phone'] = $_POST['phone'];
                    $cust['cust_username'] = $_POST['username'];
                    $cust['cust_id'] = $_POST['id'];
                    
                    //To be set to get gender from ID number
                    $cust['cust_gender'] = "not yet configured";
                    $customer->insert($cust);
                }
                else {
                    $prov['prov_fname'] = $_POST['name'];
                    $prov['prov_lname'] = $_POST['surname'];
                    $prov['prov_phone'] = $_POST['phone'];
                    $prov['prov_email'] = $_POST['email'];
                    $prov['prov_address'] = $_POST['address'];
                    $provider->insert($prov);
                }

                $to_auth['auth_username'] = $_POST['username'];
                $to_auth['auth_email'] = $_POST['email'];
                $to_auth['auth_password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $to_auth['auth_type'] = $_POST['user'];
                $auth->insert($to_auth);

                $auth_obj = (object) $to_auth;
                Authentication::authenticate($auth_obj);
                $this->redirect('dashboard');

            }else{
                $errors = $user->errors;
            }
        }
        $this->view('auth/register', ['errors' => $errors]);
    }
}