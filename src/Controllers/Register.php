<?php

namespace Toni\ZavrsniProjekat\Controllers;


use Toni\ZavrsniProjekat\Models\Users;


class Register {

    
    public function index() {

        $errors = '';


        include('src/Views/header.php');
        include('src/Views/register.php');
        include('src/Views/footer.php');
    }

    public function storeUser() {

        $errors = '';


        if(!$this->validatePassword()) {
            
            $errors = 'You have entered wrong password';

            include('src/Views/header.php');
            include('src/Views/register.php');
            include('src/Views/footer.php');
        } else {

            $userData = [
                'fullname' => $_POST['fullName'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];

            $userModel = new Users();
            $userModel->insert($userData);

            include('src/Views/header.php');
            include('src/Views/register.php');
            include('src/Views/footer.php');
        }
    }


    protected function validatePassword(): bool {

        if(strlen($_POST['password']) < 4) {
            return false ;

        }

        if($_POST['password'] != $_POST['passwordConfirm']) {
            return false;
        }    


        return true;
        
     }
}