<?php


namespace Toni\ZavrsniProjekat\Models;


use Toni\ZavrsniProjekat\Models\Users;
use Toni\ZavrsniProjekat\Models\City;



class Ads extends Common {

    public function store($username, $heading, $phoneNumber, $description, $cityId, $categoryId, $image) {

        $usersModel = new Users();
        $id = $usersModel->getIdByUsername($username);


        if(!empty($image)) {

            $sql = "INSERT INTO `ads` (`id`, `user_id`, `category_id`, `city_id`, `heading`, `phone_number`, `description`, `file`, `creation_date`) VALUES (NULL, '$id', '$categoryId', '$cityId', '$heading', '$phoneNumber', '$description', '$image', current_timestamp());";
    
            $this->query($sql);
        } else {
            
            $sql = "INSERT INTO `ads` (`id`, `user_id`, `category_id`, `city_id`, `heading`, `phone_number`, `description`, `file`, `creation_date`) VALUES (NULL, '$id', '$categoryId', '$cityId', '$heading', '$phoneNumber', '$description', '', current_timestamp());";
    
            $this->query($sql);
        }

    }


    public function get() {
        
        $sql = "SELECT * FROM `ads` WHERE creation_date >= DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY) ORDER BY creation_date DESC;";

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


        $categories = new Categories();
        $category = $categories->getOneById($ad['category_id']);

        $ad['category_id'] = $category['id']; // append new array member
        $ad['category'] = $category['category']; // append new array member

        return $ad;
    }


    public function getActiveAdsByCategory($categoryId) {

        if($categoryId != 0) {
            $sql = "SELECT * FROM `ads` WHERE creation_date >= DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY) AND category_id = '$categoryId' ORDER BY creation_date DESC;";
        } else {
            $sql = "SELECT * FROM `ads` WHERE creation_date >= DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY) ORDER BY creation_date DESC;";            
        }

        $result = $this->query($sql);

        $ads = [];
        while($row = mysqli_fetch_assoc($result)) {
            $ads[] = $row;
        }

        return $ads;
    }   
    
    
    public function getFeaturedAdsByCategory($categoryId, $id) {

        $sql = "SELECT * FROM `ads` WHERE creation_date >= DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY) AND category_id = '$categoryId' AND `id` != '$id' ORDER BY RAND() LIMIT 3;";

        $result = $this->query($sql);

        $ads = [];
        while($row = mysqli_fetch_assoc($result)) {
            $ads[] = $row;
        }

        return $ads;
    }    


}