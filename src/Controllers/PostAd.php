<?php


namespace Toni\ZavrsniProjekat\Controllers;


use Toni\ZavrsniProjekat\Services\Auth\Security;


class PostAd {

    public function index() {

        $securityService = new Security();

        $errors = '';


        include('src/Views/header.php');
        include('src/Views/post-ad.php');
        include('src/Views/footer.php');
    }


    public function storeAd() {

        print_r($_POST);

    }
}