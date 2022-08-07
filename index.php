<?php 
session_start();
ini_set('display_errors','On');

// Controllers
use Toni\ZavrsniProjekat\Controllers\AboutUs;
use Toni\ZavrsniProjekat\Controllers\Contact;
use Toni\ZavrsniProjekat\Controllers\Home;
use Toni\ZavrsniProjekat\Controllers\PostAd;
use Toni\ZavrsniProjekat\Controllers\Login;
use Toni\ZavrsniProjekat\Controllers\Logout;
use Toni\ZavrsniProjekat\Controllers\Register;
use Toni\ZavrsniProjekat\Controllers\SingleAd;

// Services
use Toni\ZavrsniProjekat\Services\Auth\Security;

// Exeptions
use Toni\ZavrsniProjekat\Exceptions\DatabaseException;

// Monolog 
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

require 'vendor/autoload.php';


$logger = new Logger('mali_oglasi');
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::ERROR));


try {

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
    
        case "filter":
            $page = new Home();
            $page->filter();
            break;
    
        default:
            $page = new Home();
            $page->index();
    }


} catch(DatabaseException $exception) {

    $logger->emergency($exception->getMessage());
    $page = new Home();
    $page->showDatabaseError($exception->getMessage());      

} catch(\Exception $exception) {

    $logger->error($exception->getMessage());
    $page = new Home();
    $page->showError($exception->getMessage());    

}