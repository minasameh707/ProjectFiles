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
    <h1 style="text-align:center;margin-top:50px">Blockchain</h1>
    <iframe style="margin-left:300px;" width="800" height="500" src="https://www.youtube.com/embed/SSo_EIwHSd4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p style="text-align:center;margin-top:50px"><b>About the course:</b></p>
        <pre>*** AS SEEN ON KICKSTARTER ***

Learn key Blockchain concepts, intuition and practical training to get you quickly up to speed with all things Crypto and Blockchain related. Covering:

Module 1: How to build a Blockchain - we'll start at the very beginning
Module 2: How to create a Cryptocurrency - the next step of your journey
Module 3: How to create a Smart Contract - Let's cross the finish line
Here is what you will get with this course:


1. From novice to Blockchain expert: The #1 criteria for success in anything is to be fascinated. If you combine your interest in Blockchain with this training, you’ve got everything you need to become an expert in the field - even if you’re unsure where to begin.  

2. A focus on doing, not just listening: The best way to reinforce a skill is to practice it yourself, and blockchain is no different. Not only we’ll each and every single line of code, but we will also take regular steps back to see the logical flow of our creations. 

3. The guide to intuitive understanding: In this course you will not only develop the required skills and deep knowledge about Blockchain, but you will also get the right tech instincts. Through this intuition you will feel where and how to apply Blockchain in the real world.

4. Real-world applications: The projects you’ll develop provide the perfect starting point to rapidly gain expertise. Everything you build and practice will be an exciting journey with real-world impact. When finished, you’ll be 100% ready to apply your skills to anything Blockchain-related.  

5. In-course support – We’re fully committed to making this the most accessible and results-driven Blockchain course on the planet. This requires us to be there when you need our help. That’s why we’ve put together a team of professional Data Scientists to support you in your journey, meaning you’ll get a response from us within 48 hours maximum.</pre>

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