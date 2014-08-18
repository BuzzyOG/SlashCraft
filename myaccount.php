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

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

if ($login->isUserLoggedIn() == true) {
   $navlogin = "Welcome " . $_SESSION['user_name'];
   $loginH1DisplayTag = $_SESSION['user_name'] ."'s Profile Page";
} else {
    $navlogin = "Login / Register";
    $loginH1DisplayTag  = "Account Login";
}



$uuidLength = $_SESSION['user_uuid'];
if (strlen($uuidLength) > 0) {
    $isVerified = true;
} else {
    $isVerified = false;
}

if ($isVerified == true) {
    $VerifiedBoxDisplay = array(
    "btn-success verified",
    "verified");
} else {
    $VerifiedBoxDisplay = array(
    "btn-danger notverified",
    "verified");
}

?>
<?php include './assets/navbar.php'; ?>



    <!-- ////////////////////////////////////
        HOMEPAGE HEADER
    ///////////////////////////////////// -->

    <div id="header2">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <h1>Home // <?php echo $loginH1DisplayTag; ?></h1>

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

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("views/logged_in.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

 require './assets/footer.php'; ?>