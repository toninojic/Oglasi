<?php


namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;
use Toni\ZavrsniProjekat\Services\Email;
use Toni\ZavrsniProjekat\Request\ContactForm;


class Contact {
    
    public function index() {

        $securityService = new Security();

        include('src/Views/header.php');
        include('src/Views/contact.php');
        include('src/Views/footer.php');
    }


    public function contact() {

        /* $errors = []; */

        $securityService = new Security();

        $contactValidation = new ContactForm();


        if(count($_POST) > 0) {

            $errors = $contactValidation->validateContactForm($_POST['fullname'] , $_POST['subject'] , $_POST['message']);
            
            if(!$errors) {

                $contacData = [
                    'fullname' => $_POST['fullname'],
                    'subject' => $_POST['subject'],
                    'message' => $_POST['message']
                ];
    
                $contactService = new Email;
                $contactService->sendEmail($contacData);
    
                include('src/Views/header.php');
                include('src/Views/email-succes.php');
                include('src/Views/footer.php');  
            } else {
                
                include('src/Views/header.php');
                include('src/Views/contact.php');
                include('src/Views/footer.php'); 
            }
        }
    }
}