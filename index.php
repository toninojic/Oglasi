<?php 
session_start();
ini_set('display_errors','On');

// Controllers
use Toni\ZavrsniProjekat\Controllers\Home;
use Toni\ZavrsniProjekat\Controllers\AboutUs;
use Toni\ZavrsniProjekat\Controllers\Contact;
use Toni\ZavrsniProjekat\Controllers\Login;
use Toni\ZavrsniProjekat\Controllers\Register;
use Toni\ZavrsniProjekat\Controllers\PostAd;
use Toni\ZavrsniProjekat\Controllers\SingleAd;
use Toni\ZavrsniProjekat\Controllers\Logout;
use Toni\ZavrsniProjekat\Services\Auth\Security;

require 'vendor/autoload.php';

// this is 
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
        if(count($_POST) == 0) {
            $page->index();
        } else {
            $page->contact();
        }
        break;

    case "post-ad":
        $page = new PostAd();
        if(count($_POST) == 0) {
            $page->index();
        } else {
            $page->storeAd();
        }
        break;
                
        
    case "register":
        $page = new Register();
        
        if(count($_POST) == 0) {
            $page->index();
        } else {
            $page->storeUser();
        }
        break;


    case "single-ad":
        $page = new SingleAd();
        $page->index();
        break;
           
    case "login":
        $page = new Login();
        if(count($_POST) == 0) {
            $page->index();
        } else {
            $page->login();
        }
        break;   
    
    case "logout":
        $page = new Logout();
        $page->index();
        break;

    default:
        $page = new Home();
        $page->index();
}