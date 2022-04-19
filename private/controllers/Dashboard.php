<?php


class Dashboard extends Controller
{
    function index(){

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $provider = new Provider();

        if ($_SESSION['USER']->auth_type == 'customer'){
            $data = $customer->where('cust_email', $_SESSION['USER']->auth_email);
            $data = $data[0];

            $this->view('dashboard/customer', ['rows'=>$data]);
        }

        if ($_SESSION['USER']->auth_type == 'provider'){
            $data = $provider->where('prov_email', $_SESSION['USER']->auth_email);
            $data = $data[0];

            $this->view('dashboard/provider', ['rows'=>$data]);
        }
    }
}