<?php

namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;

class AboutUs {

    public function index() {

        $securityService = new Security();

        include('src/Views/header.php');
        include('src/Views/about-us.php');
        include('src/Views/footer.php');
    }

}