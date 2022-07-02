<?php

namespace Toni\ZavrsniProjekat\Controllers;

use Toni\ZavrsniProjekat\Services\Auth\Security;

class Logout {

    public function index() {

        $securityService = new Security();


        \session_unset();
        \session_destroy();
        Header('Location: index.php');
    }
}