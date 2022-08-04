<?php

namespace Toni\ZavrsniProjekat\Models;


class City extends Common {

    public function getAll() {

        $sql = "SELECT * FROM `city`;";

        $result = $this->query($sql);

        $users = [];
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }

        return $users;
    }


    public function getOneById($id) {

        $sql = "SELECT * FROM `city` WHERE id = '$id';";

        $result = $this->query($sql);

        $user = mysqli_fetch_assoc($result);

        return $user;  
    }
}