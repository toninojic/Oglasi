<?php


namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;
use Toni\ZavrsniProjekat\Models\Ads;

class Home {

    public function index() {

        $securityService = new Security();

        $adsModel = new Ads();

        $ads = $adsModel->get();

        include('src/Views/header.php');
        include('src/Views/home.php');
        include('src/Views/footer.php');
    }
}
