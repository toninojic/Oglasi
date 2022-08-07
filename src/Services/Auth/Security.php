<?php 

namespace Toni\ZavrsniProjekat\Services\Auth;

use Toni\ZavrsniProjekat\Models\Users;


class Security {

    public function login($username, $password) {
        
        $usersModel = new Users();

        if(is_array($usersModel->getByUsernameAndPassword($username, $password))) {
            return true;
        }

        return false;        
    }

    public function isLoggedIn() {

        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            return true;
        } else {
            return false;
        }

    }   

}