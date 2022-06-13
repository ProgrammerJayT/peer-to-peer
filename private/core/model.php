<?php

class Model extends Database {

    public $errors = array();

    public function __construct(){

        if (!property_exists($this, 'table')){
            $this->table = strtolower(get_class($this));
        }
    }

    public function where($column, $value){

        $column = addslashes($column);

        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [
            'value'=> $value
        ]);
    }

    public function findAll(){

        $query = "select * from $this->table";
        return $this->query($query);
    }

    public function insert($data){

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "insert into $this->table ($columns) values(:$values)";
        return $this->query($query, $data);
    }

    public function update_customer($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['cust_id'] = $id;
        $query = "update $this->table set $str where cust_id = :cust_id";

        return $this->query($query, $data);
    }

    public function accept_request($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['req_id'] = $id;
        $query = "update $this->table set $str where req_id = :req_id";

        return $this->query($query, $data);
    }

    public function update_provider($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['prov_id'] = $id;
        $query = "update $this->table set $str where prov_id = :prov_id";

        return $this->query($query, $data);
    }

    public function accept_quote($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['req_id'] = $id;
        $query = "update $this->table set $str where req_id = :req_id";

        return $this->query($query, $data);
    }

    public function update_investor($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['inv_uid'] = $id;
        $query = "update $this->table set $str where inv_uid = :inv_uid";

        return $this->query($query, $data);
    }

    public function update_auth($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['auth_email'] = $id;
        $query = "update $this->table set $str where auth_email = :auth_email";

        return $this->query($query, $data);
    }
    public function update_loan($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['loan_id'] = $id;
        $query = "update $this->table set $str where loan_id = :loan_id";

        return $this->query($query, $data);
    }
    public function update_request($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['req_id'] = $id;
        $query = "update $this->table set $str where req_id = :req_id";

        return $this->query($query, $data);
    }
}