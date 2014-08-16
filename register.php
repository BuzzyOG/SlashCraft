<?php 

include './assets/header.php';

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("You must run PHP on atleast version 5.3.7 to allow for password secuirty.");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");
// load the login class
require_once("classes/Login.php");
// load the registration class
require_once("classes/Registration.php");

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

if ($login->isUserLoggedIn() == true) {
   $navlogin = "Welcome " . $_SESSION['user_name'];
} else {
    $navlogin = "Login / Register";
}


?>
<?php include './assets/navbar.php'; ?>



    <!-- ////////////////////////////////////
        HOMEPAGE HEADER
    ///////////////////////////////////// -->

    <div id="header2">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                    <h1>Home // Register</h1>

                </div>

                <!--<div class="col-md-5">
                    <h1></h1>
                    <img src="" height="300px">
                </div>-->


            </div><!--ROW-->
        </div><!--CONTAINER-->
    </div><!--HEADER-->

    <!-- ////////////////////////////////////
        MAIN BODY ELEMENTS BEGIN
    ///////////////////////////////////// -->

    <!--<div id="faq" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Latest News</h1>
            </div>
        </div>
    </div>-->

<?php

if ($login->isUserLoggedIn() == true) {
   $loggedInDisplayName = $_SESSION['user_name'];
} else {
   $loggedInDisplayName = "THIS SHOUD DISPLAY THE USEERNAME";
}
// Detects if the user is trying to register but is already logged on
if ($login->isUserLoggedIn() == true) {
    // show the register view (with the registration form, and messages/errors)
    include"views/register_logged_in.php";
} else {
    // show the register view (with the registration form, and messages/errors)
    include"views/register_not_logged_in.php";
};



require './assets/footer.php';


