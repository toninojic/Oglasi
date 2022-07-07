<?php


namespace Toni\ZavrsniProjekat\Request;



class ContactForm {

    public function validateContactForm($data) {
        

        $data = [
            'fullname' => $_POST['fullname'],
            'subject' => $_POST['subject'],
            'message' => $_POST['message']
        ];


        $errors = [];

        if(strlen($data['fullname']) < 3) {
            array_push($errors, "You need to enter fullname with at least 3 letters");
        } 

        if(strlen($data['subject']) < 2) {
            array_push($errors, "You need to enter valid subject");
        } 


        if(strlen($data['message']) < 10) {
            array_push($errors, "You need to enter valid message");
        } 

        if(empty($errors)) {
            return false;
        } else {
            return $errors;
        }
    }


}