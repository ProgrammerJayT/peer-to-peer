<?php


class Home extends Controller
{
    function index(){

        $customer = new Customer();

        print_r($customer);
        
        $this->view('home');
    }
}