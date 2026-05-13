<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>

<nav>

    <h2>Ufuk Arda Gülmez </h2>

    <ul>
        <li><a href="#home">Home</a></li>

        <li><a href="#about">About</a></li>

        <li><a href="#projects">Projects</a></li>

        <li><a href="#skills">Skills</a></li>

        <li><a href="#contact">Contact</a></li>

        
    </ul>

    <button id="themeButton">Dark Mode</button>

</nav>

    <section class="hero" id="home">
        <div class="hero-text">
            <h1 id="typing-text"></h1>
            <p>Software Engineering Student</p>
            <br>

<a href="cv.pdf" download class="cv-button">

    Download CV

</a>
        </div>
    </section>
<section class="about hidden" id="about">

    <div class="about-text">
        <img src="images1/profile.jpg" class="profile-image">

        <h2>About Me</h2>

        
            <p>

    Third year Software Engineering student with a strong
    interest in software development and emerging technologies.

    Eager to learn, adapt, and contribute effectively
    to team projects.

</p>
        

    </div>

</section>
<section class="education hidden"   id="education">

    <h2>Education</h2>

    <div class="edu-card">

        <h3>Software Engineering</h3>

        <p>Haliç University</p>

        <p>2022 - Present</p>

    </div>

</section>

<section class="experience hidden" id="experience">

    <h2>Experience</h2>

    <div class="exp-card">

        <h3>Şekerbank T.A.Ş. – Technology Operations Intern</h3>

        <p>08/2025 - 09/2025</p>

        <p>
            Assisted in monitoring and maintaining the bank’s
            technology operations and IT systems.
        </p>

        <p>
            Supported the resolution of technical issues and coordinated
            with IT teams to ensure smooth processes.
        </p>

        <p>
            Gained experience in data management, reporting,
            and operational workflows in a banking environment.
        </p>

        <p>
            Learned to work effectively in a professional team setting
            and follow standard procedures.
        </p>

    </div>


</section>
<section class="projects hidden " id="projects">

    <h2>Projects</h2>

    

    <div class="project-container">

    </div>

</section>
<section class="skills hidden" id="skills">

    <h2>My Skills</h2>

    <div class="skills-container">

        <div class="skill-box">HTML5</div>

        <div class="skill-box">CSS3</div>

        <div class="skill-box">JavaScript</div>

        <div class="skill-box">PHP</div>

        <div class="skill-box">MySQL</div>

        <div class="skill-box">Java</div>

        <div class="skill-box">C++</div>

        <div class="skill-box">GitHub</div>

    </div>

</section>



    

</section>
<section class="contact hidden" id="contact">

    <h2>Contact Me</h2>

    <form id="contactForm" action="save_message.php" method="POST">

        <input type="text" name="name" id="name" placeholder="Your Name">

        <input type="email" name="email" id="email" placeholder="Your Email">

        <textarea name="message" id="message" placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>

    </form>

</section>
<footer>

    <h3>Ufuk Portfolio</h3>

    <p>
        © 2026 All Rights Reserved
    </p>

    <div class="social-links">

    <a href="www.linkedin.com/in/ufuk
arda-gülmez"
       target="_blank">
       LinkedIn
    </a>

    <a href="https://instagram.com/ufukardaglmz"
       target="_blank">
       Instagram
    </a>

    <a href="https://github.com/ufukardaglmz"
       target="_blank">
       GitHub
    </a>

    </div>

</footer>
<script src="script.js?v=2"></script>
</body>
</html>