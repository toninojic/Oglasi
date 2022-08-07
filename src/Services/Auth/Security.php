<?php 

namespace Toni\ZavrsniProjekat\Services\Auth;

use Toni\ZavrsniProjekat\Models\Users;
use Toni\ZavrsniProjekat\Models\LoginHistory;



class Security {

    public function login($username, $password) {  

        $usersModel = new Users();
        $loginHistoryModel = new LoginHistory();

        $detectedUser = $usersModel->getByUsernameAndPassword($username, $password);

        // login success
        if(is_array($detectedUser)) {

            $ipAddress = $_SERVER['REMOTE_ADDR'];
            $loginHistoryModel->insert($ipAddress, $detectedUser['id']);

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