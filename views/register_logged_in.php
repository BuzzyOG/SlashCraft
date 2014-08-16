<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="form-box">
            <a href="">Woah there, it looks like you're already logged in as <?php echo $loggedInDisplayName ?> </a>
            <form method="post" action="login.php">
                <button class="btn btn-info btn-block login" type="submit"  name="register" value="Register" >Return to profile</button>
            </form>
            <form method="post" action="login.php?logout">            
                <button class="btn btn-warning btn-block login" type="submit"  name="register" value="Register" >Logout</button>
            </form>
            <br><a href="login.php">SLASH CRAFT</a>
        </div>
    </div>   
</div>