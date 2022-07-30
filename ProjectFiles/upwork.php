<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

html,body{
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
    
  }

*,*::after,*::before{
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
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
<header>
        <a  href="homeindex.php">
            <img src="udemy-2-logo-png-transparent.png"  height="30px" style="margin-left:20px ;margin-top: 10px;">
        </a>
        <nav>
            <ul>
                <li><a href="priceindex.php" style="border:solid black;">Hosting plan</a></li>
                <li><a href="homeindex.php#ourcourses-section">Our Courses</a></li>
                <li><a href="#contactus-section">Contact Us</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="registration.php">Sign Up</a></li>
                
            </ul>
        </nav>
       
    </header>
    <h1 style="text-align:center;margin-top:50px">Upwork fundamintals</h1>
    <iframe style="margin-left:300px;" width="800" height="500" src="https://www.youtube.com/embed/PTzJlrahqgc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p style="text-align:center;margin-top:50px"><b>About the course:</b></p>
        <p>Hello everyone, welcome to the course, "Winning Upwork".

I started freelancing in 2013 along with my regular 9-5 job. At that time it was nothing but a time pass hobby. In 2016, I started a business and at the end of 2017, it collapsed.

I lost every penny I have ever saved, and on the top, I got a huge debt on me. I was totally broke.

That time I took Upwork seriously, and within 1.5 years I managed to pay all my debts. I can tour twice a year now and live a happy life with my family.

The freelancing business allows me to grow that fast and Upwork has a great contribution to it.

In this course, I will share my experiences, all my techniques and strategies with you I have ever learned.



In this course you will learn:

How to set up your mind for freelancing business (This is something, no one wants to say).

Upwork business, its reality & algorithm.

Understanding the psychology of high-paying clients and how to find them.

How to design a niche-oriented business.</p>

    <footer class="last-footer">
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
</body>
</html>