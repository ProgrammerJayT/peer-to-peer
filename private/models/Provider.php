<?php


class Provider extends Model{

    public $table = "provider";

    public function __construct(){

    }

    public function delete_provider($id){

        $query = "delete from $this->table where prov_id = :prov_id";
        $data['prov_id'] = $id;

        return $this->query($query, $data);
    }
}