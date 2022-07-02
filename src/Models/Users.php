<?php


namespace Toni\ZavrsniProjekat\Models;

class Users extends Common {

    public function getByUsernameAndPassword($username, $password) {

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
        
        $result = $this->query($sql);

        return \mysqli_fetch_assoc($result);
    }

    public function insert($data) {

        $fullName = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        $sql = "INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `creation_date`) VALUES (NULL, '$fullName', '$username', '$email', '$password', current_timestamp());";

        $this->query($sql);
    }

}


