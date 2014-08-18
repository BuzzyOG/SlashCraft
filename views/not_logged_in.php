<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>


<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form method="post" action="myaccount.php" name="loginform">
                <input id="login_input_username" class="login_input" name="user_name" required type="text" placeholder="username">
                <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required placeholder="password">
                <button class="btn btn-info btn-block login" type="submit"  name="login" value="Login">Login</button>
            </form>
            <br><a href="register.php">Register new account</a>
        </div>
    </div>   
</div>




