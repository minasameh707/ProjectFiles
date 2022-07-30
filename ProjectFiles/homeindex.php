<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>udemy</title>
    <link href="style.css" rel="stylesheet">
</head>
<body div="landing-page">
    <header>
        <a  href="homeindex.php">
            <img src="udemy-2-logo-png-transparent.png"  height="30px" style="margin-left:20px ;margin-top: 10px;">
        </a>

         <form> 
            <label for="search">search courses : </label> 
<input name="search" type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>
        <nav>
            <ul>
                <li><a href="priceindex.php" style="border:solid black;">Hosting plan</a></li>
                <li><a href="#ourcourses-section">Our Courses</a></li>
                <li><a href="#contactus-section">Contact Us</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="registration.php">Sign Up</a></li>
                
            </ul>
        </nav>
       
    </header>
    <?php include "automatic image slider 201021.php"; ?>
    
    <section id="ourcourses-section" class="web-section">
      <h1 style="margin:10px;position:relative;text-align: center;">OUR COURSES</h1>
        <div class="web-wrapper">
            <div class="web-container">
                <a href="socialmedia.php" class="project">
                    <figure>
                        <img src="pexels-pixabay-147413.jpg" alt="social media marketing" title="social media marketing">
                        <figcaption>
                            <div>
                                <h3>social media marketing</h3>
                                <p>enroll course >></p>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a href="ethicalhacking.php" class="project">
                    <figure>
                        <img src="pexels-tima-miroshnichenko-5380651.jpg" alt="ethical hacking" title="ethical hacking">
                        <figcaption>
                            <div>
                                <h3>ethical hacking</h3>
                                <p>enroll course >></p>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a href="blockchain.php" class="project">
                    <figure>
                        <img src="pexels-pixabay-315788.jpg" alt="blockchain" title="blockchain">
                        <figcaption>
                            <div>
                                <h3>blockchain</h3>
                                <p>enroll course >></p>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a href="frontend.php" class="project">
                    <figure>
                        <img src="pexels-pixabay-270404.jpg" alt="frontend developer" title="frontend developer">
                        <figcaption>
                            <div>
                                <h3>frontend developer</h3>
                                <p>enroll course >></p>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a href="upwork.php" class="project">
                    <figure>
                        <img src="pexels-olha-ruskykh-7504860.jpg" alt="upwork fundamentals" title="upwork fundamentals">
                        <figcaption>
                            <div>
                                <h3>upwork fundamentals</h3>
                                <p>enroll course >></p>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a href="ai.php" class="project">
                    <figure>
                        <img src="pexels-kindel-media-8566473.jpg" alt="artifial intelligence" title="artifial intelligence">
                        <figcaption>
                            <div>
                                <h3>artifial intelligence</h3>
                                <p>enroll course >></p>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </section>
    <?php include("quotes.php"); ?>

     
    
    <section class="instructor">
    <div class="right-instructor"> 
      <h1>Become an instructor</h1>
      <p>Instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
      <button class="button-instructor">Become an instructor!!</button>
    </div>
    <div class="left-instructor">
      <img src="instructor-1x-v3.jpg" alt="">
    </div>
    
    </section>
    
  <section id="contactus-section">
  
</section>

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

  <script src="app.js"></script>
  <script src="ajax.js"></script>
  
</body>
</html>