<?php

class InvestorProfile extends Controller {
    function index() {

        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $investor = new Investor();
        $auth = new Auth();
        $errors = array();
        $alerts = array();

        if ($data = $investor->where('inv_email', $_SESSION['USER']->auth_email)){
            $data = $data[0];

            $id = $data->inv_uid;
            $name = $data->inv_fname;
            $surname = $data->inv_lname;
            $fullName = $name. ' ' .$surname;
            $imageURI = $data->profile_picture;
            $email = $data->inv_email;
            $phone = $data->inv_phone;
            $address = $data->inv_address;
            $username = $data->inv_username;

            if (!isset($_SESSION['Toast'])){
                $toast = 'Session not set';
            }
            else {
                $toast = $_SESSION['Toast'];
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['surname'])){
                    if ($auth->where('auth_username', $_POST['username'])){
                        $errors['username'] = 'Username already exists';
                    }
                    else {
                        //Update investor in Authentication
                        $authData['auth_username'] = $_POST['username'];

                        //Update investor details
                        $investorData['inv_username'] = $_POST['username'];
                        $investorData['inv_fname'] = $_POST['name'];
                        $investorData['inv_lname'] = $_POST['surname'];
                        
                        $auth->update_auth($_SESSION['USER']->auth_email, $authData);
                        $investor->update_investor($id, $investorData);
                        $alerts['username'] = 'Username updated successfully';
    
                        $username = $_POST['username'];
                        $name = $_POST['name'];
                        $surname = $_POST['surname'];
                        $fullName = $name. ' ' .$surname;
                    }
                }

                if (isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])){

                    if ($investor->where('inv_email', $_POST['email'])){
                        $errors['email'] = 'Email already exists';
                    } else if (strlen($_POST['phone']) != 10){
                        $errors['phone'] = 'Phone number must be 10 digits';
                    } else {
                        //Update investor in Authentication
                        $authData['auth_email'] = $_POST['email'];
                        
                        //Update investor details
                        $investorData['inv_email'] = $_POST['email'];
                        $investorData['inv_phone'] = $_POST['phone'];
                        $investorData['inv_address'] = $_POST['address'];

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
                        $imagePath = 'assets/img/avatars/investor/'.$id;

                        if (!file_exists($imagePath)){
                            mkdir($imagePath, 0777, true);
                        }
                        
                        $image = $imagePath . '/' . $imageName;
                        
                        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $image)){
                            $investorData['profile_picture'] = $image;
                            $investor->update_investor($id, $investorData);
                            $imageURI = $image;
                            $alerts['profile_picture'] = 'Profile picture updated successfully';
                        }
                        else {
                            $errors['profile_picture'] = 'Error uploading image';
                        }
                    }
                }
            }

            $this->view('profile/investor',
            ['image'=>$imageURI, 'toast'=>$toast, 'name' => $name, 'surname' => $surname, 'errors' => $errors, 'alerts' => $alerts, 'email' => $email, 'phone' => $phone, 'address' => $address, 'username' => $username]);
        }
    }
}