<?php

namespace Toni\ZavrsniProjekat\Models;

class LoginHistory extends Common {

    public function insert($ipAddress, $userId) {

        $sql = "INSERT INTO `login_history` (`id`, `user_id`, `login_date`, `login_ip_addres`) VALUES (NULL, '$userId', NULL, '$ipAddress')";

        $this->query($sql);
    }

}