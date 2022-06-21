<?php

class CustomerProfile extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $customer = new Customer();
        $auth = new Auth();
        $errors = array();
        $alerts = array();

        if ($data = $customer->where('cust_username', $_SESSION['USER']->auth_username)){
            $data = $data[0];

            $name = $data->cust_fname;
            $surname = $data->cust_lname;
            $fullName = $name .' '. $surname;
            $email = $data->cust_email;
            $username = $data->cust_username;
            $id = $data->cust_id;
            $image = $data->profile_picture;
            $address = $data->cust_address;
            $phone = $data->cust_phone;

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['surname'])){
                    if ($auth->where('auth_username', $_POST['username'])){
                        $errors['username'] = 'Username already exists';
                    }
                    else {
                        //Update investor in Authentication
                        $authData['auth_username'] = $_POST['username'];

                        //Update investor details
                        $customerData['cust_username'] = $_POST['username'];
                        $customerData['cust_fname'] = $_POST['name'];
                        $customerData['cust_lname'] = $_POST['surname'];
                        
                        $auth->update_auth($_SESSION['USER']->auth_id, $authData);
                        $customer->update_customer($id, $customerData);
                        $alerts['username'] = 'Username updated successfully';
    
                        $username = $_POST['username'];
                        $name = $_POST['name'];
                        $surname = $_POST['surname'];
                        $fullName = $name. ' ' .$surname;
                    }
                }

                if (isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])){

                    if ($customer->where('cust_email', $_POST['email'])){
                        $errors['email'] = 'Email already exists';
                    } else if (strlen($_POST['phone']) != 10){
                        $errors['phone'] = 'Phone number must be 10 digits';
                    } else {
                        //Update investor in Authentication
                        $authData['auth_email'] = $_POST['email'];
                        
                        //Update investor details
                        $customerData['cust_email'] = $_POST['email'];
                        $customerData['cust_phone'] = $_POST['phone'];
                        $customerData['cust_address'] = $_POST['address'];
                        
                        $auth->update_auth($_SESSION['USER']->auth_id, $authData);
                        $customer->update_customer($id, $customerData);
                        $alerts['Contacts'] = 'Contacts updated successfully';

                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                    }
                }
                
                if (isset($_FILES['profile_picture']['name']) && $_FILES['profile_picture']['name'] != ''){

                    $imageTypes = array('jpeg', 'png', 'jpg');

                    $imageExtension = explode('/', $_FILES['profile_picture']['type']);
                    $imageExtension = $imageExtension[1];

                    if (!in_array($imageExtension, $imageTypes)){
                        $errors['profile_picture'] = 'Invalid image type';
                    }
                    else {
                        $imageName = 'image.' . $imageExtension;
                        $imagePath = 'assets/img/avatars/customer/'.$id;

                        if (!file_exists($imagePath)){
                            mkdir($imagePath, 0777, true);
                        }
                        
                        $image = $imagePath . '/' . $imageName;
                        
                        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $image)){
                            $customerData['profile_picture'] = $image;
                            $customer->update_investor($id, $customerData);
                            $imageURI = $image;
                            $alerts['profile_picture'] = 'Profile picture updated successfully';
                        }
                        else {
                            $errors['profile_picture'] = 'Error uploading image';
                        }
                    }
                }
            }

            $this->view('profile/customer',
            ['data'=>$data, 'name' => $name, 'surname' => $surname, 'fullName' => $fullName, 'email' => $email, 
            'username' => $username, 'errors' => $errors, 'alerts' => $alerts, 'image' => $image, 'address' => $address, 'phone' => $phone]);
        }
    }
}