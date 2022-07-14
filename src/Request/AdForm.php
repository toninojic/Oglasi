<?php


namespace Toni\ZavrsniProjekat\Request;


class AdForm {

    public function validateAdForm($heading , $phoneNumber , $description , $imageSize) {

        $errors = [];

        if(strlen($heading) < 3) {
            array_push($errors, "Your heading must have at least 3 letters");
        } 



        if(strlen($phoneNumber) < 6) {
            array_push($errors, "You need to enter phone number with at least 6 nubmers");
        } 

        if($imageSize > 524288) {
            array_push($errors, "Max file size: 512KB. Your file size: " . round($imageSize / 1024) . "KB");
        }
 
        if(strlen($description) < 5) {
            array_push($errors, "Your description needs to be at least 10 letters long");
        } 


        if(empty($errors)) {
            return false;
        } else {
            return $errors;
        }



    }

}