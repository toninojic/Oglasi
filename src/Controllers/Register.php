<?php

namespace Toni\ZavrsniProjekat\Controllers;


use Toni\ZavrsniProjekat\Models\Users;
use Toni\ZavrsniProjekat\Services\Auth\Security;


class Register {

    
    public function index() {

        $errors = '';


        include('src/Views/header.php');
        include('src/Views/register.php');
        include('src/Views/footer.php');
    }

    public function storeUser() {

        $securityService = new Security();

        $errors = '';


        if(!$securityService->validatePassword()) {
            
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



}