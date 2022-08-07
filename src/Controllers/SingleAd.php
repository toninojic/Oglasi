<?php 

namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;
use Toni\ZavrsniProjekat\Models\Ads;

class SingleAd {

    public function index() {

        $securityService = new Security();

        $adsModel = new Ads();
        $ad = $adsModel->getAdById($_GET['id']);

        $ads = $adsModel->getFeaturedAdsByCategory($ad['category_id'], $ad['id']);

        include('src/Views/header.php');
        include('src/Views/single-ad.php');
        include('src/Views/footer.php');
    }

}