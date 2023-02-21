<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$query = "INSERT INTO information VALUES('', '$Name', '$Email', '$Message')";
mysqli_query($conn, $query);
echo 
"
<script> alert ('data Inserted Successfully');</script>
";
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/11ca887b44.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="header">
      <div class="container">
        <nav>
          <div class="logo lname"><span class="pname">P</span>ooja.</div>
          <ul id="sidemenu">
            <li><a href="#header">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <i class="fas fa-times" onclick="closemenu()"></i>
          </ul>
          <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
          <p>UI/UX Designer</p>
          <h1>
            Hi, I'm <span>Pooja</span><br />
            From India
          </h1>
        </div>
      </div>
    </div>
    <!-- //////// about ///////////////// -->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="about-col-1">
            <img src="images/e267193f-d15c-4e9d-9332-1861a22db3c1.jpg" alt="" />
          </div>
          <div class="about-col-2">
            <h1 class="sub-title pt">About Me</h1>
            <p class="aboutme">

                I am a multidisciplinary designer with a curious mind, 
                I enjoy to meet new people and understand how they are solving problems, this is one of the reasons why I invest my time on meetups from product management to everything related to design (research, design thinking, design system, etc.) and talking to people in general, as always can be an opportunity to learn something new. I see it as a chance to improve myself as a professional and put things in practice when I’m creating my solutions.
            </p>
            <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                <p class="tab-links"  onclick="opentab('experiance')">Experience</p>
                <p class="tab-links"  onclick="opentab('education')">Education</p>
            </div>
            <div class="tab-contents active-tab" id="skills">
                <ul>
                    <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                    <li><span>Web Developement</span><br>Web App Developement</li>
                    <li><span>App Developement</span><br>Building Android/IOS apps</li>
                </ul>
            </div>
            <div class="tab-contents" id="experiance">
                <ul>
                    <li><span>2023 - Current</span><br>Ul Design at Hlafly</li>
                </ul>
            </div>
            <div class="tab-contents" id="education">
                <ul>
                    <li><span>2023</span><br>Appearing 3rd Year at KB College</li>
                    <li><span>2022</span><br>Passed 2nd Year with A+ grade</li>
                    <li><span>2021</span><br>Passed 1st Year with A+ grade</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //////////services/////////////// -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fas fa-crop-alt"></i>
                    <h2>UI/UX</h2>
                    <p>UI refers to the screens, buttons, toggles, icons, and other visual elements that you
                         interact with when using a website, app, or other electronic device. UX refers to the
                          entire interaction you have with a product, including how you feel about the interaction</p>
                        <a href="">Learn More</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-code"></i>
                        <h2>Web Design</h2>
                    <p>Web design is a multi-disciplinary job, where you'd need not only knowledge in design (typography, color theory) but also skills in developing a website (HTML, CSS, JavaScript). Some web designers are also involved in interaction design when they code for animations and interactions using CSS and/or JavaScript.</p>
                        <a href="">Learn More</a>
                </div>
                <div>
                    <i class="fas fa-app-store"></i>
                    <h2>App Design</h2>
                    <p>App design combines the user interface (UI) and user experience (UX). While UI lends itself to the overall style of the app (including the colors, fonts, and general look and feel), UX focuses on the actual functionality and usability. A large number of users abandon an app after using it for the first time.</p>
                        <a href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ///////Portofolio////////// -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/work-1.png" alt="">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>The app connects you to the talented poeple around the world.
                            Download it from play store
                        </p>
                        <a href=""><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-2.png" alt="">
                    <div class="layer">
                        <h3>Musip App</h3>
                        <p>The app connects you to the talented poeple around the world.
                            Download it from play store
                        </p>
                        <a href=""><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png" alt="">
                    <div class="layer">
                        <h3>Onlie Shopping App</h3>
                        <p>The app connects you to the talented poeple around the world.
                            Download it from play store
                        </p>
                        <a href=""><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            <a href="" class="btn">See more</a>
        </div>
    </div>
  
    <!-- //////////contact/////// -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i>poojagauda17@gmail.com</p>
                    <p><i class="fas fa-phone-square-alt"></i>8454834968</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/pooja-gauda-10019021b/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/pooja-gauda-10019021b/"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://www.instagram.com/pooja__gauda/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/pooja-gauda-10019021b/"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <a href="images/Updated Resume (Pooja Gauda).pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
        <form action="" method="POST">
            <input type="text" name="Name" placeholder="Your Name" required>
            <input type="email" name="Email" placeholder="Your Email" required>
            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn2" name="submit">Submit</button>
        </form>
    </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright </p>
        </div>
    </div>
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
        function opentab(tabname) {
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab")
        }
    </script>
    <script>
        var sidemenu= document.getElementById("sidemenu");
        function openmenu(){
            sidemenu.style.right= "0";
        }
        function closemenu(){
            sidemenu.style.right= "-200px";
        }
    </script>
    
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyTX8Y4ZO1JnUOS31nrX_j9USraNuR_LYiPkd0GckO_K7n20PUWMCGfDe-z3en9RhsO9Q/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                msg.innerHTML = "<i class= fa-solid fa-circle-check></i>Successfullly Submitted";
           toast.classList.add('toast');
                setTimeout(function(){
                    msg.innerHTML = ""

                },5000)
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
        });
      </script>
  </body>
</html>
