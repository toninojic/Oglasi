<?php


namespace Toni\ZavrsniProjekat\Controllers;


use Toni\ZavrsniProjekat\Services\Auth\Security;
use Toni\ZavrsniProjekat\Models\Ads;
use Toni\ZavrsniProjekat\Models\City;
use Toni\ZavrsniProjekat\Models\Categories;
use Toni\ZavrsniProjekat\Request\AdForm;


class PostAd {

    public function index() {

        $securityService = new Security();
        $cityModel = new City();
        $categoriesModel = new Categories();

        $errors = '';

        include('src/Views/header.php');
        include('src/Views/post-ad.php');
        include('src/Views/footer.php');
    }


    public function storeAd() {

        $securityService = new Security();

        $adValidation = new AdForm(); 
        $cityModel = new City();
        $categoriesModel = new Categories();


        if(count($_POST) > 0) {

            $errors = $adValidation->validateAdForm($_POST['heading'], $_POST['phoneNumber'], $_POST['description'], $_FILES['file']['size']);


            if(!$errors) {
                $username = $_SESSION['username'];
                $heading = $_POST['heading'];
                $phoneNumber = $_POST['phoneNumber'];
                $description = $_POST['description'];
                $categoryId = $_POST['category']; 
                $cityId = $_POST['city']; 

                if(!empty($_FILES['file']['tmp_name']))  {
                    $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                } else {
                    $image = "";
                }   

                $adModel = new Ads();
                $adModel->store($username, $heading, $phoneNumber, $description, $categoryId, $cityId, $image);

                Header('Location: index.php'); // do redirect
            } else {
                
                include('src/Views/header.php');
                include('src/Views/post-ad.php');
                include('src/Views/footer.php');
            }
            
        }
    }
}