<?php


namespace Toni\ZavrsniProjekat\Models;

class Users extends Common {

    public function get() {

        $sql = "SELECT * FROM `users`;";

        $result = $this->query($sql);

        $users = [];
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }

        return $users;
    }

    public function insert($data) {

        $fullName = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        $sql = "INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `creation_date`) VALUES (NULL, '$fullName', '$username', '$email', '$password', current_timestamp());";

        $this->query($sql);
    }

    public function delete($id) {

        $sql = "DELETE FROM `users` WHERE id = $id";

        $this->query($sql);
    }
}


