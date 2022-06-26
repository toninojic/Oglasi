<?php

namespace Toni\ZavrsniProjekat\Controllers;


class Login {
    
    public function index() {
        include ('src/Views/header.php');
        include ('src/Views/login.php');
        include ('src/Views/footer.php');
    }
}

