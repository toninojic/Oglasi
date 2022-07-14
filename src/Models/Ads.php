<?php


namespace Toni\ZavrsniProjekat\Models;


use Toni\ZavrsniProjekat\Models\Users;


class Ads extends Common {
    
    public function store($username, $heading , $phoneNumber , $description , $image) {

        $usersModel = new Users();
        $id = $usersModel->getIdByUsername($username);

        if(!empty($image)) {

            $sql = "INSERT INTO `ads` (`id`, `user_id`, `heading`, `phone_nubmer`, `description`, `file`, `creation_date`) VALUES (NULL, '$id', '$heading', '$phoneNumber', '$description', '$image', current_timestamp());";
    
            $this->query($sql);
        } else {
            
            $sql = "INSERT INTO `ads` (`id`, `user_id`, `heading`, `phone_nubmer`, `description`, `file`, `creation_date`) VALUES (NULL, '$id', '$heading', '$phoneNumber', '$description', '', current_timestamp());";
    
            $this->query($sql);
        }

 
    }
}