<?php


class Service extends Model {

    public $table = "service";

    public function update_service($id, $data){

        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key. "=:". $key. ",";
        }

        $str = trim($str, ",");

        $data['serv_id'] = $id;
        $query = "update $this->table set $str where serv_id = :serv_id";

        return $this->query($query, $data);
    }

    public function delete_service($id){

        $query = "delete from $this->table where serv_id = :serv_id";
        $data['serv_id'] = $id;
        return $this->query($query, $data);
    }
}