<?php


class Home extends Controller
{
    function index(){

        $customer = new Customer();

        //$data = $db->query("select * from customer");

        $data = $customer->where('cust_lname', 'Tripathi');
        $this->view('home', ['rows'=>$data]);
    }
}