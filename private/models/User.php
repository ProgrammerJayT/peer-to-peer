<?php


class User extends Model{

    public function validate($DATA){

        $this->errors = array();

        if(!preg_match('/^[a-zA-Z]+$/', $DATA['name'])){
            $this->errors['name'] = "Non-alpha characters not allowed\n";
        }
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['surname'])){
            $this->errors['surname'] = "Non-alpha characters not allowed\n";
        }
        if(!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Email is not valid";
        }

        $user_type = ['provider', 'customer'];
        if(empty($DATA['user']) || !in_array($DATA['user'], $user_type)){
            $this->errors['user'] = "Select user type!";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}