<?php


namespace Toni\ZavrsniProjekat\Models;


use Toni\ZavrsniProjekat\Models\Users;
use Toni\ZavrsniProjekat\Models\City;



class Ads extends Common {

    public function store($username, $heading, $phoneNumber, $description, $cityId, $image) {

        $usersModel = new Users();
        $id = $usersModel->getIdByUsername($username);

        if(!empty($image)) {

            $sql = "INSERT INTO `ads` (`id`, `user_id`, `city_id`, `heading`, `phone_number`, `description`, `file`, `creation_date`) VALUES (NULL, '$id', '$cityId', '$heading', '$phoneNumber', '$description', '$image', current_timestamp());";
    
            $this->query($sql);
        } else {
            
            $sql = "INSERT INTO `ads` (`id`, `user_id`, `city_id`, `heading`, `phone_number`, `description`, `file`, `creation_date`) VALUES (NULL, '$id', '$cityId', '$heading', '$phoneNumber', '$description', '', current_timestamp());";
    
            $this->query($sql);
        }

    }


    public function get() {
        
        $sql = "SELECT * FROM `ads`;";

        $result = $this->query($sql);
        
        while($row = mysqli_fetch_assoc($result)) {
            $ads[] = $row;
        }

        return $ads;
    }


    public function getAdById($id) {

        $sql = "SELECT * FROM `ads` WHERE id = '$id';";
        
        
        $result = $this->query($sql);

        $ad = mysqli_fetch_assoc($result);

        $users = new Users();
        $user = $users->getOneById($ad['user_id']);

        $ad['user_full_name'] = $user['full_name']; // append new array member


        $city = new City();
        $city = $city->getOneById($ad['city_id']);
        
        $ad['city_name'] = $city['city']; // append new array member

        return $ad;
    }

}