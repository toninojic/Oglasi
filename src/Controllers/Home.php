<?php


namespace Toni\ZavrsniProjekat\Controllers;

class Home {

    public function index() {

        include('src/Views/header.php');
        include('src/Views/home.php');
        include('src/Views/footer.php');
    }
}
