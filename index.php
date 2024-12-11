<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#Projects">Projects</a></li>
                <li><a href="#Skills">Skills</a></li>
                <li><a href="#contacts">Contacts</a></li>
                
            </ul>
        </nav>
        <section id="My Portfolio">

    <section id="home">
        <div class="main">
            <h1 class="headings">Hello guys, Welcome to My Portfolio!</h1>
            <h2 class="headings">I AM<br> JADE AEDRIAN S. BACTAD<br>21 - ITE - 04</h2>
          
            <button class="btn">
                Get to Know Me More:
                <a href="https://www.facebook.com/jadeaedrian.bactad" target="_blank">Facebook</a>
            </button>
        </div>
    </section>
    <section id="about">
            <h1 class="headings">About Me</h1>
            <div id="pic">
            <img src="Me.jpg" alt="">
            <div id="intro">
                <h2>Jade Aedrian Bactad</h2>
                <p>Hello guys, once again i am Jade Aedrian S. Bactad, 19 Years of age,
                    from Malanay Sta.barbara, Pangasinan. I am Currently 1st year college and studying at
                    Universidad De Dagupan and my Program is Bachelor Of Science in 
                    Information Technology. And my hobby is playing Basketball and 
                    Playing Table Tennis.
                </p>
            </div>
        </div>
    </section>
   

    <section id="Projects">
        <h1 class="headings">Projects</h1>
        <div class="row">
            <div class="box">
                <img src="code.jpg" alt="">
                <h1 class="headings">Studying Code</h1>
                <p>The language code that we are using is PHP and i have 
                    a lot of struggle studying the code that my professor give
                    to us as our actvity but i do my best to run the code on time.</p>
            </div>
            <div class="box">
                <img src="code.jpg" alt="">
                <h1 class="headings">Studying Code</h1>
                <p>The language code that we are using is Java and i have 
                    a lot of strugle studying the code that my professor assign
                    to us as our actvities or laboratory exam.</p>
            </div>
            <div class="box">
                <img src="code.jpg" alt="">
                <h1 class="headings">Studying Code</h1>
                <p>The language code that we are using is Java and i have 
                    a lot of strugle studying the code that my professor assign
                    to us as our actvities or laboratory exam.</p>
            </div>

        </div>
        </div>
        <section id="Skills">
    <h1 class="headings">My Skills</h1>
    <div class="skills-container">
        <div class="skill-box">
            <div class="skill">
                <div class="skill-icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3>Programming</h3>
                <p>Proficient in PHP, Java, and Object-Oriented Programming.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 85%;"></div>
                </div>
                <span class="percentage">85%</span>
            </div>
        </div>
        <div class="skill-box">
            <div class="skill">
                <div class="skill-icon">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3>Database Management</h3>
                <p>Knowledgeable in MySQL and database optimization.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 75%;"></div>
                </div>
                <span class="percentage">75%</span>
            </div>
        </div>
        <div class="skill-box">
            <div class="skill">
                <div class="skill-icon">
                    <i class="fa-solid fa-laptop"></i>
                </div>
                <h3>Web Development</h3>
                <p>Skilled in HTML, CSS, and responsive design.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 90%;"></div>
                </div>
                <span class="percentage">90%</span>
            </div>
        </div>
        <div class="skill-box">
            <div class="skill">
                <div class="skill-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <h3>Problem Solving</h3>
                <p>Strong analytical and algorithmic skills.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 80%;"></div>
                </div>
                <span class="percentage">80%</span>
            </div>
        </div>
    </div>
</section>


    <section id="contacts">
        <h1 class="headings">Contacts</h1>

      <!-- Contact Form -->
      <div class="contact-form">
    <h3>Send Me a Note</h3>
    <form action="process_contact.php" method="POST">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <textarea name="message" placeholder="Tell us more about your needs..." required></textarea>
        <button type="submit" class="btn">Send Message</button>
        <div class="social-icons">
            <a href="https://www.facebook.com/jadeaedrian.bactad"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/jaderiannn_/?igsh=bGRiYTBueWh0cXh0&fbclid=IwY2xjawD1ny9leHRuA2FlbQIxMAABHakXBXHoUuatjMyIqPWYWMqe6_PsnoU2YS0gWNeuFrsV9FUd8psxmQAl_w_aem_a9oe0KKTCPnVBtNg-rJBzg"><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.linkedin.com/in/jadeaedrianbactad/"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </form>
</div>
    </section>
</body>
</html>
