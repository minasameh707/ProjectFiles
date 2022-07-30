<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
	<style>
		body{
			margin:0px;
			padding:0px;
		}
		ul {
    list-style: none;
    margin-right: 20px;
    overflow: hidden;
}
li {
    display: inline;
}
li a{
    color: white;
    padding: 20px 15px;
    transition:  1s;
    text-decoration: none;

}
li a:hover {
    background-color:red;
    transition:  1s;
   

  }
header {
    justify-content: space-between;
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    background-color:rgb(127, 167, 241);
    z-index: 1001;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
}
		.last-footer
{
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: center;
    padding: 5px;
    background-color: blueviolet;

  
}
.last-footer .footer{
    display: block;
    justify-content: space-between;
    align-items: center;
    margin-block: 90px ;
}

.footer li{
    display: block;
    margin-inline: 70px;
    cursor: pointer;
   font-weight: 100;
    overflow: hidden;
}

	</style>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<header>
        <a href="homeindex.php">
            <img src="udemy-2-logo-png-transparent.png"  height="30px" style="margin-left:20px ;margin-top: 10px;">
        </a>

         
        <nav>
            <ul>
                <li><a href="priceindex.php" style="border:solid black;">Hosting plan</a></li>
                <li><a href="homeindex.php#ourcourses-section">Our Courses</a></li>
                <li><a href="homeindex.php#contactus-section">Contact Us</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="registration.php">Sign Up</a></li>
                
            </ul>
        </nav>
       
    </header>
<div class="form" style="margin-top:80px;">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />
<a href="http://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a style="margin-buttom:60px;" href="http://www.allphptricks.com/">AllPHPTricks.com</a>
</div><footer class="last-footer">
    <ul class="footer">
        <li>Terms</li>
        <li>Privacy policy</li>
        <li>Cookie settings</li>
        <li>Sitemap</li>
    </ul>
    <ul class="footer">
        <li>Careers</li>
        <li>Blog</li>
        <li>Help and Support</li>
        <li>Affiliate</li>
    </ul>
    <ul class="footer">
        <li>Udemy Business</li>
        <li>Teach on Udemy</li>
        <li>Get the app</li>
        <li>About us</li>
    </ul>
  </footer>
<?php } ?>


</body>
</html>
