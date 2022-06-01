<?php

class CustomerProfile extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $auth = new Auth();
        $errors = array();
        $alerts = array();

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name .' '. $surname;
            $email = $data->cust_email;
            $username = $data->cust_username;
            $id = $data->cust_id;

            if (isset($_POST['username']) &&
            isset($_POST['surname']) &&
            isset($_POST['name'])){
                if ($auth->where('auth_username', $_POST['username']) && $customer->where('cust_fname', $_POST['name'])){
                    $errors['username'] = 'Username already exists';
                }
                else {
                    $authData['auth_username'] = $_POST['username'];
                    $customerData['cust_username'] = $_POST['username'];
                    
                    $auth->update_auth($_SESSION['USER']->auth_email, $authData);
                    $customer->update_customer($id, $customerData);
                    $alerts['username'] = 'Username updated successfully';

                    $data->cust_username = $_POST['username'];
                }
            }

            $this->view('profile/customer',
            ['data'=>$data, 'name' => $name, 'surname' => $surname, 'fullName' => $fullName, 'email' => $email, 'username' => $username, 'errors' => $errors, 'alerts' => $alerts]);
        }
    }
}