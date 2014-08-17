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


$loggedNameAndAvatar = "Welcome <b>" . $_SESSION['user_name'] . " </b> <img style='border-radius: 25%;' src='https://minotar.net/avatar/". $_SESSION['user_name'] . "/20'> ";


if ($login->isUserLoggedIn() == true) {
   $navlogin = $loggedNameAndAvatar;
} else {
    $navlogin = " Login / Register";
}


?>
<?php include './assets/navbar.php'; ?>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->

	<div id="header">
		<div class="container">
			<div class="row">

				<div class="col-md-8">

					<h1>Slash Craft</h1>

					<h4>Be apart of the most awesome minigames network in the world today and get rewarded for registering online!</h4>
					<a href="login.php">
						<button href="login" class="btn btn-default button-of-sex outline">Login</button>
					</a>
					<button 
						class="btn btn-default button-of-sex"
						onclick="prompt('Come join us today with the following IP:','play.slashcraft.com')"> 
							play.slashcraft.com
					</button>

					<p>
						<b>249,000</b> Players Joined - 
						<b>1,249</b> Players Online -
						<b>987</b> Registered Users
					</p>

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

	<div id="faq" class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Latest News</h1>
				<dl>
					<dt>Server opening<i>17th August</i></dt>
					<dd>
						It allowance prevailed enjoyment in it. Calling observe for who pressed raising his. Can connection instrument astonished unaffected his motionless preference. Announcing say boy precaution unaffected difficulty alteration him. Above be would at so going heard. Engaged at village at am equally proceed. Settle nay length almost ham direct extent. Agreement for listening remainder get attention law acuteness day. Now whatever surprise resolved elegance indulged own way outlived. 
						<br>
						<a href="s"><b>Read More</b></a>
						<a href="s"><i>DiamondXF</i></a>
					</dd>

					<dt>Welcome<i>11th August</i></dt>
					<dd>
						Six started far placing saw respect females old. Civilly why how end viewing attempt related enquire visitor. Man particular insensible celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh. Is time from them full my gone in went. Of no introduced am literature excellence mr stimulated contrasted increasing. Age sold some full like rich new. Amounted repeated as believed in confined juvenile. 
						<br>
						<a href="s"><b>Read More</b></a>
						<a href="s"><i>DiamondXF</i></a>
					</dd>
				</dl>
			</div>
		</div>
	</div>

	<hr>

	<div id="faq" class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>Twitter Feed</h1>
				<dl>
					<dd>
						We've just release our server, join today with play.slashcraft.com
						<br>
						<a href="s"><b>17th August</b></a>
						<a href="s"><i>@AnotherPerson</i></a>
					</dd>

					<dd>
						Developement has become on our website, come check us out.
						<br>
						<a href="s"><b>11th August</b></a>
						<a href="s"><i>@DiamondXF</i></a>
					</dd>

					<dd>
						Testing has begun, follow us back!
						<br>
						<a href="s"><b>10th August</b></a>
						<a href="s"><i>@AnotherPerson</i></a>
					</dd>
				</dl>
			</div>

			<div class="col-md-4">
				<h1>Latest Memeber</h1>
				<dl>
					<dd>
						We've just release our server, join today with play.slashcraft.com
						<br>
						<a href="s"><b>17th August</b></a>
						<a href="s"><i>@AnotherPerson</i></a>
					</dd>

					<dd>
						Developement has become on our website, come check us out.
						<br>
						<a href="s"><b>11th August</b></a>
						<a href="s"><i>@DiamondXF</i></a>
					</dd>
				</dl>
			</div>

			<div class="col-md-4">
				<h1>Latest Posts</h1>
				<dl>
					<dd>
						The new forums are fantastic, I really love the feature that all...
						<br>
						<a href="s"><b>17th August</b></a>
						<a href="s"><i>Se1by</i></a>
					</dd>

					<dd>
						So I've thought of another idea for a gamemode today guys, basic...
						<br>
						<a href="s"><b>17th August</b></a>
						<a href="s"><i>DiamondXF</i></a>
					</dd>

					<dd>
						Login systems are back online, I hope you like the latest update...
						<br>
						<a href="s"><b>16th August</b></a>
						<a href="s"><i>Se1by</i></a>
					</dd>
				</dl>
			</div>
		</div>
	</div>


	<?php require './assets/footer.php'; ?>