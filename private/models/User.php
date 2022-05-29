<?php


class User extends Model{

    public function validate($DATA){

        $auth = new Auth();

        $this->errors = array();

        if($auth->where("auth_username", $_POST['username'])){
            $this->errors['username'] = "Username already exists";
        }

        if($auth->where("auth_email", $_POST['email'])){
            $this->errors['email_exists'] = "Email already exists";
        }

        if(!preg_match('/^[a-zA-Z]+$/', $DATA['name'])){
            $this->errors['name'] = "Non-alpha characters not allowed\n";
        }
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['surname'])){
            $this->errors['surname'] = "Non-alpha characters not allowed\n";
        }
        if(!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Email is not valid";
        }

        $user_type = ['investor', 'customer'];
        if(empty($DATA['user']) || !in_array($DATA['user'], $user_type)){
            $this->errors['user'] = "Select user type!";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}