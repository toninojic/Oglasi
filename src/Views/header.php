<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet" />
    <title>Oglasi</title>
</head>
<body>
    <div class="header">
        <div class="logo">  
            <h2>Mali Oglasi</h2>
        </div>
        <div class="top-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=about-us">About Us</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <!-- <li><a id="register" href="index.php?page=register">Register</a></li>
                <li><a id="login" href="index.php?page=login">Login</a></li> -->
                <?php
                if($securityService->isLoggedIn()) {
                ?>
                    <li>
                        <a href="index.php?page=post-ad">Post Ad</a>
                    </li>   
                    <li>
                        <a href="index.php?page=logout">Logout</a>
                    </li>                                               
                <?php
                } else {
                ?>
                    <li>                
                        <a id="register" href="index.php?page=register">Register</a>
                    </li>
                    <li>
                        <a id="login" href="index.php?page=login">Login</a>
                    </li>                        
                <?php
                }
                ?> 
            </ul>
        </div>
    </div>