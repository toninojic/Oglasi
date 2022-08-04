<?php


namespace Toni\ZavrsniProjekat\Models;

class Users extends Common {

    public function getByUsernameAndPassword($username, $password) {

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = MD5('$password');";
        
        $result = $this->query($sql);

        return \mysqli_fetch_assoc($result);
    }


    public function getIdByUsername($username) {

        $sql = "SELECT id FROM users WHERE username = '$username'";

        $result = $this->query($sql);
        $id = \mysqli_fetch_assoc($result)['id'];        

        return $id;
    }

    public function insert($data) {

        $fullName = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        $sql = "INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `creation_date`) VALUES (NULL, '$fullName', '$username', '$email', MD5('$password'), current_timestamp());";

        $this->query($sql);

    }

    public function getOneById($id) {

        $sql = "SELECT * FROM `users` WHERE id = '$id';";

        $result = $this->query($sql);

        $user = mysqli_fetch_assoc($result);

        return $user;  

    }

}


