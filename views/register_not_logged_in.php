<?php
    // show potential errors / feedback (from registration object)
    if (isset($registration)) {
        if ($registration->errors) {
            foreach ($registration->errors as $error) {
                echo $error;
            }
        }
        if ($registration->messages) {
            foreach ($registration->messages as $message) {
                echo $message;
            }
        }
    }
?>



<div class="container">
    <div class="login-container">
        <div class="row">
            <div =
                <div id="output"></div>
                <div class="form-box">
                    <form method="post" action="register.php" name="registerform">
                        <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="minecraft username" />
                        <input id="login_input_email" class="login_input" type="email" name="user_email" required autocomplete="off" placeholder="email address" />
                        <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="password"/>
                        <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="confirm password" />
                        <button class="btn btn-info btn-block login" type="submit"  name="register" value="Register" >Register</button>
                    </form>
                    <br><a href="login.php">Username must be an active Minecraft username as you will need to confirm it.</a><br>
                    <br><a href="login.php">Password must be a minimum of 6 charters long and contain atleast one letter</a>
                    <br><a href="login.php">Already have an account?</a>
                </div>
    </div>   
</div>