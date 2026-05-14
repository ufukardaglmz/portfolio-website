<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
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

<button id="themeButton">

    Dark Mode

</button>

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

Third year Software Engineering student with a strong interest in software development, backend systems, and emerging technologies. Passionate about creating responsive and user-friendly web applications while continuously improving technical and problem-solving skills.

Experienced in working with technologies such as HTML, CSS, JavaScript, PHP, MySQL, Java, and C++. Interested in both frontend and backend development, with a focus on building clean, functional, and modern applications.

A fast learner who adapts quickly to new environments and enjoys collaborating in team projects. Seeking opportunities to gain industry experience, contribute effectively to innovative projects, and further develop professional software engineering skills.

</p>
        

    </div>

</section>
<section class="education hidden"   id="education">

    <h2>
    <i class="fa-solid fa-graduation-cap"></i>
    Education
</h2>

    <div class="edu-card">

        <h3>Software Engineering</h3>

        <p>Haliç University</p>

        <p>2022 - Present</p>

    </div>

</section>

<section class="experience hidden" id="experience">

    <h2>
    <i class="fa-solid fa-briefcase"></i>
    Experience
</h2>

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
    <div class="exp-card">

    <h3>Özdilek Park H&M – Part-Time Sales Assistant</h3>

    <p>01/2024 - Present</p>

    <p>
        Assisted customers with purchases, providing friendly and efficient service.
    </p>

    <p>
        Developed communication, teamwork, and problem-solving skills in a fast-paced retail environment.
    </p>

    <p>
        Handled transactions and basic administrative tasks accurately and efficiently.
    </p>

    </div>


</section>
<section class="projects hidden " id="projects">

    <h2>
    <i class="fa-solid fa-code"></i>
    Projects
</h2>

    

    <div class="project-container">

    </div>

</section>
<section class="skills hidden" id="skills">

    <h2>
    <i class="fa-solid fa-laptop-code"></i>
    My Skills
</h2>

<div class="skills-container">

    <div class="skill-box">
        <i class="fa-brands fa-html5"></i>
        <span>HTML5</span>

        <div class="progress-bar">
            <div class="progress html"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-brands fa-css3-alt"></i>
        <span>CSS3</span>

        <div class="progress-bar">
            <div class="progress css"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-brands fa-js"></i>
        <span>JavaScript</span>

        <div class="progress-bar">
            <div class="progress js"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-brands fa-php"></i>
        <span>PHP</span>

        <div class="progress-bar">
            <div class="progress php"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-solid fa-database"></i>
        <span>MySQL</span>

        <div class="progress-bar">
            <div class="progress mysql"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-brands fa-java"></i>
        <span>Java</span>

        <div class="progress-bar">
            <div class="progress java"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-solid fa-code"></i>
        <span>C++</span>

        <div class="progress-bar">
            <div class="progress cpp"></div>
        </div>
    </div>

    <div class="skill-box">
        <i class="fa-brands fa-github"></i>
        <span>GitHub</span>

        <div class="progress-bar">
            <div class="progress github"></div>
        </div>
    </div>

</div>
    </div>

</section>



    

</section>
<?php

if(isset($_GET['success'])){

    echo "<p class='success-message'>
    Message sent successfully!
    </p>";

}

?>
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
arda-gülmez" target="_blank">
    <i class="fa-brands fa-linkedin"></i>
    LinkedIn
</a>

<a href="https://instagram.com/ufukardaglmz" target="_blank">
    <i class="fa-brands fa-instagram"></i>
    Instagram
</a>

<a href="https://github.com/ufukardaglmz" target="_blank">
    <i class="fa-brands fa-github"></i>
    GitHub
</a>
    </div>

</footer>
<script src="script.js?v=2"></script>
<script>

const sections = document.querySelectorAll("section");

const navLinks = document.querySelectorAll("nav ul li a");

window.addEventListener("scroll", () => {

    let current = "";

    sections.forEach(section => {

        const sectionTop = section.offsetTop - 150;

        const sectionHeight = section.clientHeight;

        if(window.scrollY >= sectionTop){

            current = section.getAttribute("id");

        }

    });

    navLinks.forEach(link => {

        link.classList.remove("active");

        if(link.getAttribute("href") === "#" + current){

            link.classList.add("active");

        }

    });

});

</script>
</body>
</html>