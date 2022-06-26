<?php 
ini_set('display_errors','On');

// Controllers
use Toni\ZavrsniProjekat\Controllers\Home;
use Toni\ZavrsniProjekat\Controllers\AboutUs;
use Toni\ZavrsniProjekat\Controllers\Contact;
use Toni\ZavrsniProjekat\Controllers\Login;
use Toni\ZavrsniProjekat\Controllers\Register;

require 'vendor/autoload.php';


if(empty($_GET['page'])) {
    $_GET['page'] = 'home';
}


switch($_GET['page']) {

    case "about-us":
        $page = new AboutUs();
        $page->index();
        break;

    case "contact":
        $page = new Contact();
        $page->index();
        break;
        
    case "register":
        $page = new Register();
        
        if(count($_POST) == 0) {
            $page->index();
        } else {
            $page->storeUser();
        }
        break;
           
    case "login":
        $page = new Login();
        $page->index();
        break;    

    default:
        $page = new Home();
        $page->index();
}