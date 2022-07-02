<?php


namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;

class Home {

    public function index() {

        $securityService = new Security();

        include('src/Views/header.php');
        include('src/Views/home.php');
        include('src/Views/footer.php');
    }
}
