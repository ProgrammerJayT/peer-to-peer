<?php

class RequestLoan extends Controller
{
    function index(){
        $errors = array();
        $toast = '';

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $request = new Request();

        if ($data = $customer->where('cust_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            if ($reqCheck = $request->where('cust_uid', $data->cust_uid)){
                $reqCheck = $reqCheck[0];

                if ($reqCheck->is_approved == false){
                    $_SESSION['Toast'] = 'You have already applied for a loan';
                }
                else {
                    $_SESSION['Toast'] = 'You have an outstanding loan';
                }


                $this->redirect('CustomerDashboard');
            }

            else {
                if (isset($_POST['loan_amount'])){
                    if (!is_numeric($_POST['loan_amount'])){
                        $errors['amount_error'] = "Enter numeric value";
                    }
                    else{
                        $request = new Request();

                        $req['req_date'] = date("Y/m/d");
                        $req['req_amnt'] = $_POST['loan_amount'];
                        $req['cust_uid'] = $data->cust_uid;

                        $request->insert($req);
                        $_SESSION['Toast'] = 'Request successful';

                        $this->redirect('CustomerDashboard');

                    }
                }
            }

            $this->view('loan/request',
            ['data'=>$data, 'errors'=>$errors, 'toast' => $toast]);
        }
    }
}