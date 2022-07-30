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
    <h1 style="text-align:center;margin-top:50px">Ethical hacking</h1>
    <iframe style="margin-left:300px;" width="800" height="500" src="https://www.youtube.com/embed/XLvPpirlmEs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    <p style="text-align:center;margin-top:50px"><b>About the course:</b></p>
        <pre>Welcome this comprehensive Ethical Hacking course! This course assumes you have NO prior knowledge and by the end of it you'll be able to hack systems like black-hat hackers and secure them like security experts!

This course is highly practical but it won't neglect the theory; we'll start with ethical hacking basics, breakdown the different penetration testing fields and install the needed software (on Windows, Linux and Mac OS X), then we'll dive and start hacking straight away. You'll learn everything by example, by analysing and exploiting different systems such as networks, servers, clients, websites .....etc. We'll never have any boring dry theoretical lectures.

The course is divided into a number of sections, each section covers a penetration testing / hacking field, in each of these sections you'll first learn how the target system works, the weaknesses of this system, and how to practically exploit theses weaknesses to hack this system.

By the end of the course you will have a strong foundation in most hacking or penetration testing fields and you'll also learn how to detect, prevent and secure systems and yourself from the discussed attacks. 



The course is divided into four main sections:   

1. Network Hacking - This section will teach you how to test the security of both wired & wireless networks. First, you will learn network basics, how they work, and how devices communicate with each other. Then it will branch into three sub sections:   

Pre-connection attacks: in this subsection you'll learn a number of attacks that can be executed without connecting to the target network and without the need to know the network password; you'll learn how to gather information about the networks around you, discover connected devices, and control connections (deny/allow devices from connecting to networks).

Gaining Access: Now that you gathered information about the networks around you, in this subsection you will learn how to crack the key and get the password to your target network whether it uses WEP, WPA or even WPA2.

Post Connection attacks: Now that you have the key, you can connect to the target network, in this subsection you will learn a number of powerful techniques that allow you to gather comprehensive information about the connected devices, see anything they do on the internet (such as login information, passwords, visited urls, images, videos ....etc), redirect requests, inject evil code in loaded pages and much more! All of these attacks work against both wireless and wired networks. You will also learn how to create a fake WiFi network, attract users to connect to it and use all of the above techniques against the connected clients.



2. Gaining Access - In this section you will learn two main approaches to gain full control or hack computer systems:

Server Side Attacks:  In this subsection you will learn how to gain full access to computer systems without user interaction. You will learn how to gather useful information about a target computer system such as its operating system, open ports, installed services, then use this information to discover weaknesses and vulnerabilities and exploit them to gain full control over the target. Finally you will learn how to automatically scan servers for vulnerabilities and generate different types of reports with your discoveries.

Client Side Attacks - If the target system does not contain any weaknesses then the only way to hack it is by interacting with the users, in this subsection you'll learn how to get the target user to install a backdoor on their system without even realising, this is done by hijacking software updates or backdooring downloads on the fly. This subsection also teaches you how to use social engineering to hack secure systems, so you'll learn how to gather comprehensive information about system users such as their social accounts, friends, their mails.....etc, you'll learn how to create trojans by backdooring normal files (such as an image or a pdf) and use the gathered information to spoof emails so they appear as if they're sent from the target's friend, boss or any email account they're likely to interact with, to social engineer them into running your trojan.



3. Post Exploitation - In this section you will learn how to interact with the systems you compromised so far. You’ll learn how to access the file system (read/write/upload/execute), maintain your access, spy on the target (capture key strikes, turn on the webcam, take screenshots....etc) and even use the target computer as a pivot to hack other systems.

4. Website / Web Application Hacking - In this section you will learn how websites work, how to gather information about a target website (such as website owner, server location, used technologies ....etc) and how to discover and exploit the following dangerous vulnerabilities to hack websites:

File Upload.

Code Execution.

Local File Inclusion.

Remote File Inclusion.

SQL Injection.

Cross Site Scripting (XSS).



At the end of each section you will learn how to detect, prevent and secure systems and yourself from the discussed attacks. 

All the techniques in this course are practical and work against real systems, you'll understand the whole mechanism of each technique first, then you'll learn how to use it to hack the target system. By the end of the course you'll be able to modify these techniques to launch more powerful attacks, and adopt them to suit different situations and different scenarios.

With this course you'll get 24/7 support, so if you have any questions you can post them in the Q&A section and we'll respond to you within 15 hours.

   

Notes:

This course is created for educational purposes only, all the attacks are launched in my own lab or against systems that I have permission to test.

This course is totally a product of Zaid Sabih & zSecurity and no other organisation is associated with it or a certification exam. Although, you will receive a Course Completion Certification from Udemy, apart from that NO OTHER ORGANISATION IS INVOLVED.</pre>

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