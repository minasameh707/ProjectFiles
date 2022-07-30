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
    <h1 style="text-align:center;margin-top:50px">Frontend developer</h1>
    <iframe style="margin-left:300px;" width="800" height="500" src="https://www.youtube.com/embed/4wKpHh6tolA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
            <p style="text-align:center;margin-top:50px"><b>About the course:</b></p>
        <pre>If you would like to get started as a front-end web developer, you are going to LOVE this course! Work on projects ranging from a simple HTML page to a complete JavaScript based Google Chrome extension. We will cover the following technologies in this course:

Web development basics with HTML

Cascading Style Sheets (CSS)

JavaScript programming

jQuery JavaScript library

Bootstrap framework

We will work on 3 class projects throughout this course:

Simple text site - We will use what we learned in the HTML sections to create a simple text site. This project will help you learn HTML structure and the essential elements.

Fallout inspired Pip-Boy - We will take what we learned in the CSS and Bootstrap sections of the course to code a Pip-Boy from the game Fallout. This project will help you learn the design elements of modern web development.

Google Chrome extension - We will finish the course by programming a JavaScript based Google Chrome extension. This project will help you understand the logical parts of web development.

This course covers the most popular web development frameworks, and will get you started on your path towards becoming a full-stack web developer!

Still not sold? Check out a few of the awesome reviews this course has received!

"Excellent Course! Highly Recommend It! Such a great hands on experience with this course."

"Very nice course, covers all the stuff you need, good voice and good explanation makes it perfect for people that are new to HTML. Also there's some best practices recommendations which are useful even for advanced developers."

"Excellence in giving the optimal set of tools for web development beginners seeking a well-rounded start for professional web development."

Thank you for taking the time to read this, and we hope to see you in the course! 

Who this course is for:
Anyone who would like to learn front-end web development</pre>

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