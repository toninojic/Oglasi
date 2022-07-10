<?php


namespace Toni\ZavrsniProjekat\Request;


class RegistrationForm {

    public function validateRegisterForm($data) {

        $data = [
            'fullname' => $_POST['fullName'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'passwordConfirm' => $_POST['passwordConfirm']
        ];



        $emailParsed = explode('@', $data['email']);
        $domainParsed = explode('.', $emailParsed[1]);

        $errors = [];

        if(strlen($data['fullname']) < 3) {
            array_push($errors, "You need to enter fullname with at least 3 letters");
        } 

        if(strlen($data['username']) < 2) {
            array_push($errors, "You need to enter username with at least 4 letters");
        } 

         if(count($domainParsed) != 2) {
            array_push($errors, "Your need to enter valid email");
        }
 
        if(strlen($data['password']) < 5) {
            array_push($errors, "Your passord needs to be at least 5 letters long");
        } 

        if($data['password'] != $data['passwordConfirm']) {
            array_push($errors, "Your password does not match");

        }

        if(empty($errors)) {
            return false;
        } else {
            return $errors;
        }

    }

}