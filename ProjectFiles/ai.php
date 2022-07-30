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
                <li><a href="../contactus/bootstrap-form.php">Contact Us</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="registration.php">Sign Up</a></li>
                
            </ul>
        </nav>
       
    </header>
    <h1 style="text-align:center;margin-top:50px">Artifial intelligence</h1>
    <iframe style="margin-left:300px;" width="800" height="500" src="https://www.youtube.com/embed/ad79nYk2keg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
        <p style="text-align:center;margin-top:50px"><b>About the course:</b></p>
        <pre>*** AS SEEN ON KICKSTARTER ***

Learn key AI concepts and intuition training to get you quickly up to speed with all things AI. Covering:

How to start building AI with no previous coding experience using Python
How to merge AI with OpenAI Gym to learn as effectively as possible
How to optimize your AI to reach its maximum potential in the real world
Here is what you will get with this course:


1. Complete beginner to expert AI skills – Learn to code self-improving AI for a range of purposes. In fact, we code together with you. Every tutorial starts with a blank page and we write up the code from scratch. This way you can follow along and understand exactly how the code comes together and what each line means.

2. Code templates – Plus, you’ll get downloadable Python code templates for every AI you build in the course. This makes building truly unique AI as simple as changing a few lines of code. If you unleash your imagination, the potential is unlimited.

3. Intuition Tutorials – Where most courses simply bombard you with dense theory and set you on your way, we believe in developing a deep understanding for not only what you’re doing, but why you’re doing it. That’s why we don’t throw complex mathematics at you, but focus on building up your intuition in coding AI making for infinitely better results down the line.

4. Real-world solutions – You’ll achieve your goal in not only 1 game but in 3. Each module is comprised of varying structures and difficulties, meaning you’ll be skilled enough to build AI adaptable to any environment in real life, rather than just passing a glorified memory “test and forget” like most other courses. Practice truly does make perfect.

5. In-course support – We’re fully committed to making this the most accessible and results-driven AI course on the planet. This requires us to be there when you need our help. That’s why we’ve put together a team of professional Data Scientists to support you in your journey, meaning you’ll get a response from us within 48 hours maximum.</pre>

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