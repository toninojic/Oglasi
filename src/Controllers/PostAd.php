<?php


namespace Toni\ZavrsniProjekat\Controllers;


use Toni\ZavrsniProjekat\Services\Auth\Security;
use Toni\ZavrsniProjekat\Models\Ads;
use Toni\ZavrsniProjekat\Request\AdForm;


class PostAd {

    public function index() {

        $securityService = new Security();

        $errors = '';


        include('src/Views/header.php');
        include('src/Views/post-ad.php');
        include('src/Views/footer.php');
    }


    public function storeAd() {

        $securityService = new Security();

        $adValidation = new AdForm;    

        if(count($_POST) > 0) {

            $errors = $adValidation->validateAdForm($_POST['heading'], $_POST['phoneNumber'], $_POST['description'], $_FILES['myFile']['size']);

            if(!$errors) {
                $username = $_SESSION['username'];
                $heading = $_POST['heading'];
                $phoneNumber = $_POST['phoneNumber'];
                $description = $_POST['description']; 

                if(strlen($_FILES['myFile']['tmp_name']) != 0) {
                    $image = addslashes(file_get_contents($_FILES['myFile']['tmp_name']));
                } else {
                    $image = "";
                }   

                $adModel = new Ads();
                $adModel->store($username, $heading, $phoneNumber, $description ,$image);

            
            } else {
                
                include('src/Views/header.php');
                include('src/Views/post-ad.php');
                include('src/Views/footer.php');
            }
            
        }
    }
}