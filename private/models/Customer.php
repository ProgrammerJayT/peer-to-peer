<?php

class Customer extends Model {

    public $table = "customer";

    public function __construct(){

    }

    public function delete_customer($id){

        $query = "delete from $this->table where cust_id = :cust_id";
        $data['cust_id'] = $id;

        return $this->query($query, $data);
    }

}