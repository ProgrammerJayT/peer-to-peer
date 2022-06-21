<?php

class AddBank extends Controller {
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $errors = array();
        $banking = new Banking();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (strlen($_POST['acc_num']) < 10) {
                $errors[] = 'Account number must be at least 10 digits';
            } else {

                if ($banking->where('auth_id', $_SESSION['USER']->auth_id)){
                    $errors[] = 'You have already added a bank account';
                } else {
                    $bankData['acc_num'] = $_POST['acc_num'];
                    $bankData['bank'] = $_POST['bank'];
                    $bankData['acc_type'] = $_POST['type'];
                    $bankData['auth_id'] = $_SESSION['USER']->auth_id;
                    
                    $banking->insert($bankData);
    
                    if ($banking->error) {
                        $errors[] = $banking->error;
                    } else {
                        $_SESSION['Toast'] = 'Bank account added successfully';
    
                        if ($_SESSION['USER']->auth_type == 'customer') {
                            $this->redirect('CustomerDashboard');
                        } else {
                            $this->redirect('InvestorDashboard');
                        }
                    }
                }

            }
        }

        $this->view('banking/add', ['errors' => $errors]);
    }
}