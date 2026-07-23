<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="# ">SAAD</a>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#certifications">Certifications</a></li>
            <li><a href="#contact">Contact</a></li>
            
        </ul>
        <a href="resume/resume.pdf" class="resume-btn">
            Resume
        </a>
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
</header>
<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <p class="small-text">
            HELLO, I'M
        </p>
     <h1>
         <span>Mohd Saad</span>
    </h1>
        <h2>
            Building Modern Web Experiences
            with Clean Design & Scalable Code
        </h2>
        <p class="hero-description">
            I'm a B.Tech Information Technology student passionate about
            Full Stack Development, Data Structures & Algorithms,
            and creating modern web applications that solve real-world problems.
        </p>
        <div class="hero-buttons">
            <a href="#projects" class="btn primary-btn">
                View Projects
            </a>
            <a href="#contact" class="btn secondary-btn">
                Contact Me
            </a>
        </div>
        <div class="social-icons">
            <a href="https://github.com/Saad-Sid85">
                <i class="fab fa-github"></i>
            </a>
          <a href="https://www.linkedin.com/in/mohd-saad-71b25a402/" target="_blank">
    <i class="fab fa-linkedin"></i>
</a>
           <a href="mailto:saadsiddiqui1905@gmail.com">
    <i class="fas fa-envelope"></i>
</a>
         <a href="https://www.instagram.com/solivagant_s._/" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-instagram"></i>
</a>
        </div>
    </div>
    <div class="hero-image">
        <div class="image-box">
            <img src="assests/images/profile.png">
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="about">
    <div class="section-title">
        <p>GET TO KNOW ME</p>
        <h2>About Me</h2>
    </div>
    <div class="about-container">
        <div class="about-text">
            <h3>
                Passionate About Building Modern Web Applications
            </h3>
            <p>
                I'm Mohd Saad, a B.Tech Information Technology student with a
                strong interest in Full Stack Development and Data Structures &
                Algorithms. I enjoy transforming ideas into functional,
                responsive, and user-friendly web applications while
                continuously improving my technical skills.
            </p>
            <p>
                Alongside web development, I actively solve coding problems on
                LeetCode and constantly explore new technologies to become a
                better software developer.
            </p>
            <a href="assets/resume/resume.pdf" class="btn primary-btn">
                Download Resume
            </a>
        </div>
        <div class="about-cards">
            <div class="card">
                <i class="fa-solid fa-code"></i>
                <h4>Full Stack</h4>
                <p>Building responsive and scalable web applications.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-laptop-code"></i>
                <h4>DSA</h4>
                <p>Consistently solving problems to improve logic.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-lightbulb"></i>
                <h4>Problem Solver</h4>
                <p>I enjoy solving real-world programming challenges.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-book-open"></i>
                <h4>Continuous Learner</h4>
                <p>Always learning new technologies and frameworks.</p>
            </div>
        </div>
    </div>
</section>
<!--==================== SKILLS ====================-->
<section class="skills" id="skills">
    <div class="section-title">
        <p>WHAT I KNOW</p>
        <h2>My Skills</h2>
    </div>
    <div class="skills-container">
        <!-- Frontend -->
        <div class="skill-card">
            <div class="skill-title">
                <i class="fa-solid fa-code"></i>
                <h3>Frontend Development</h3>
            </div>
            <div class="skill-list">
                <div class="skill-item">
                    <i class="fa-brands fa-html5"></i>
                    <span>HTML5</span>
                </div>
                <div class="skill-item">
                    <i class="fa-brands fa-css3-alt"></i>
                    <span>CSS3</span>
                </div>
                <div class="skill-item">
                    <i class="fa-brands fa-js"></i>
                    <span>JavaScript</span>
                </div>
            </div>
        </div>
        <!-- Backend -->
        <div class="skill-card">
            <div class="skill-title">
                <i class="fa-solid fa-server"></i>
                <h3>Backend Development</h3>
            </div>
            <div class="skill-list">
                <div class="skill-item">
                    <i class="fa-brands fa-php"></i>
                    <span>PHP</span>
                </div>
                <div class="skill-item">
                    <i class="fa-solid fa-database"></i>
                    <span>MySQL</span>
                </div>
            </div>
        </div>
        <!-- Programming -->
        <div class="skill-card">
            <div class="skill-title">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Programming</h3>
            </div>
            <div class="skill-list">
                <div class="skill-item">
                    <i class="fa-solid fa-code"></i>
                    <span>C++</span>
                </div>
                <div class="skill-item">
                    <i class="fa-brands fa-python"></i>
                    <span>Python</span>
                </div>
            </div>
        </div>
        <!-- Tools -->
        <div class="skill-card">
            <div class="skill-title">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Tools & Technologies</h3>
            </div>
            <div class="skill-list">
                <div class="skill-item">
                    <i class="fa-brands fa-git-alt"></i>
                    <span>Git</span>
                </div>
                <div class="skill-item">
                    <i class="fa-brands fa-github"></i>
                    <span>GitHub</span>
                </div>
                <div class="skill-item">
                    <i class="fa-solid fa-code"></i>
                    <span>VS Code</span>
                </div>
                <div class="skill-item">
                    <i class="fa-solid fa-server"></i>
                    <span>XAMPP</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Section -->
<section class="projects" id="projects">
    <div class="section-title">
        <p>MY WORK</p>
        <h2>Featured Projects</h2>
    </div>
    <div class="projects-container">
        <!-- Project 1 -->
        <div class="project-card">
            <div class="project-image">
                <img src="assests/images/smartchef.png" alt="SmartChef">
            </div>
            <div class="project-content">
                <h3>SmartChef - AI Recipe Generator</h3>
                <p>
                    A full-stack web application that recommends recipes
                    based on available ingredients using AI concepts.
                    Includes user authentication, profile management,
                    and MySQL database integration.
                </p>
                <div class="project-tech">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                </div>
                <div class="project-buttons">
                    <a href="#" class="btn primary-btn">
                        Live Demo
                    </a>
                    <a href="https://github.com/Saad-Sid85/SmartChef-AI-Powered-Recipe-Generator" class="btn secondary-btn">
                        GitHub
                    </a>
                </div>
            </div>
        </div>
        <!-- Project 2 -->
        <div class="project-card">
            <div class="project-image">
                <img src="assests/images/portfolio.png" alt="Portfolio">
            </div>
            <div class="project-content">
                <h3>Personal Portfolio</h3>
                <p>
                    A responsive developer portfolio built with
                    HTML, CSS, JavaScript, PHP and MySQL featuring
                    an admin dashboard, project management, and
                    modern UI animations.
                </p>
                <div class="project-tech">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                </div>
                <div class="project-buttons">
                    <a href="#" class="btn primary-btn">
                        Live Demo
                    </a>
                    <a href="https://github.com/Saad-Sid85/saad-portfolio" class="btn secondary-btn">
                        GitHub
                    </a>
                </div>
            </div>
        </div>
        <!-- Project 3 -->
        <div class="project-card">
            <div class="project-image">
                <img src="assests/images/upcoming.png" alt="Upcoming Project">
            </div>
            <div class="project-content">
                <h3>Upcoming Project</h3>
                <p>
                    More exciting projects are currently under
                    development and will be added soon as I continue
                    learning Full Stack Development and building
                    real-world applications.
                </p>
                <div class="project-tech">
                    <span>Coming Soon</span>
                </div>
                <div class="project-buttons">
                    <a href="#" class="btn primary-btn">
                        Preview
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements & Certifications Section -->

<section id="certifications" class="certification-section">
    <p class="section-subtitle"> MY ACCOMPLISHMENTS</p>
    <h2 class="section-title">Achievements & Certifications</h2>
    <div class="certification-wrapper">
        <!-- Certificate 1 -->
        <div class="certificate-card">
            <div class="certificate-logo">
                <img src="assests/logo/ntpc.png" alt="NTPC Logo">
            </div>
            <div class="certificate-details">
                <h3>NTPC Electro Quiz - Regional Round</h3>
                <p class="certificate-provider">
                    Issued by: NTPC Limited
                </p>
                <p class="certificate-date">
                    Date: 29 November 2025
                </p>
                <p>
                    Represented my college in the NTPC Electro Quiz
                    Regional Round and participated as a college representative.
                </p>
                <a href="assests/certificates/ntpc.pdf"
                onclick="openCertificate('assests/certificates/ntpc.pdf')"
                class="view-certificate">
                    View Certificate
                </a>
            </div>
        </div>
        <!-- Certificate 2 -->
        <div class="certificate-card">
            <div class="certificate-logo">
                <img src="assests/logo/be10x.png" alt="Be10X Logo">
            </div>
            <div class="certificate-details">
                <h3>AI Tools Workshop</h3>
                <p class="certificate-provider">
                    Issued by: Be10X
                </p>
                <p class="certificate-date">
                    Date: 17 May 2026
                </p>
                <p>
                    Learned about AI productivity tools, automation,
                    and practical applications of artificial intelligence
                    in daily workflows.
                </p>
                <a href="assests/certificates/be10x.pdf"
                onclick="openCertificate('assests/certificates/be10x.pdf')"
                class="view-certificate">
                    View Certificate
                </a>
            </div>
        </div>
        <!-- Certificate 3 -->
        <div class="certificate-card">
            <div class="certificate-logo">
                <img src="assests/logo/nasscom.png" alt="NASSCOM Logo">
            </div>
            <div class="certificate-details">
                <h3>AI - Data Engineering Analyst</h3>
                <p class="certificate-provider">
                    Issued by: NASSCOM
                </p>
                <p class="certificate-date">
                    Date: 21 June 2026
                </p>
                <p>
                    Developed understanding of AI concepts,
                    data engineering practices, and analytical skills
                    required in modern technology roles.
                </p>
                <a href="assests/certificates/nasscom.pdf"
                onclick="openCertificate('assests/certificates/nasscom.pdf')"
                class="view-certificate">
                    View Certificate
                </a>
            </div>
        </div>
        <!-- Certificate 4 -->
        <div class="certificate-card">
            <div class="certificate-logo">
                <img src="assests/logo/forage.png" alt="TATA Logo">
            </div>
            <div class="certificate-details">
                <h3>
                    Cyber Security Analyst Job Simulation
                </h3>
                <p class="certificate-provider">
                    Issued by: Forage
                </p>
                <p class="certificate-date">
                    Date: 24 June 2026
                </p>
                <p>
                    Completed a cybersecurity analyst simulation
                    involving practical tasks and real-world security
                    problem-solving scenarios.
                </p>
                <a href="assests/certificates/forage.pdf"
                onclick="openCertificate('assests/certificates/ntpc.pdf')"
                class="view-certificate">
                    View Certificate
                </a>
            </div>
        </div>
        <!-- Certificate 5 -->
        <div class="certificate-card">
            <div class="certificate-logo">
                <img src="assests/logo/simplilearn.png" 
                alt="Simplilearn Logo">
            </div>
            <div class="certificate-details">
                <h3>
                    Get Started with Databricks for Generative AI
                </h3>
                <p class="certificate-provider">
                    Issued by: Simplilearn
                </p>
                <p class="certificate-date">
                    Date: 16 July 2026
                </p>
                <p>
                    Learned fundamentals of Databricks,
                    Generative AI concepts, and their applications
                    in modern data and AI workflows.
                </p>
                <a href="assests/certificates/simplilearn.pdf"
                onclick="openCertificate('assests/certificates/simplilearn.pdf')"
                class="view-certificate">
                    View Certificate
                </a>
            </div>
        </div>
    </div>
</section>
<!--==================== CONTACT ====================-->
<section class="contact" id="contact">
    <div class="section-title">
        <p>GET IN TOUCH</p>
        <h2>Contact Me</h2>
    </div>
    <div class="contact-container">
        <!-- Left Side -->
        <div class="contact-info">
            <h3>Let's Work Together</h3>
            <p>
                I'm always open to discussing new opportunities,
                innovative projects, internships, freelance work,
                or simply connecting with fellow developers.
                Feel free to reach out anytime.
            </p>
            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div> 
                    <h4>Email</h4>
                    <p>saadsiddiqui1905@gmail.com</p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <h4>Phone</h4>
                    <p>+91 8528979105</p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <h4>Location</h4>
                    <p>Barabanki, Uttar Pradesh, India</p>
                </div>
            </div>
            <div class="contact-social">
                <a href="https://github.com/Saad-Sid85" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/mohd-saad-71b25a402/ target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/solivagant_s._/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <!-- Right Side -->
         
        <div class="contact-form">
            <form id = "contactForm" action="php/contact.php" method="POST">
                <div class="input-box">
                    <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        required>
                </div>
                <div class="input-box">
                    <input
                        type="email"
                        name="email"
                        placeholder="Your Email"
                        required>
                </div>
                <div class="input-box">
                    <input
                        type="text"
                        name="subject"
                        placeholder="Subject"
                        required>
                </div>
                <div class="input-box">
                    <textarea
                        name="message"
                        rows="7"
                        placeholder="Write your message..."
                        required>
                    </textarea>
                </div>
                <button type="submit" class="btn primary-btn" id ="submitBtn">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
<script src="js/script.js"></script>
<!-- Scroll To Top Button -->
<button id="scrollTopBtn">
    <i class="fa-solid fa-arrow-up"></i>
</button>
<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <h2>SAAD</h2>
            <p>
                Passionate Full Stack Developer focused on creating
                modern, responsive and user-friendly web applications
                and solving real world problems usign the DSA.
            </p>
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h3>Connect</h3>
            <div class="footer-icons">
                <a href="https://github.com/Saad-Sid85" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
           <a href="https://www.linkedin.com/in/mohd-saad-71b25a402/" target="_blank">
    <i class="fab fa-linkedin"></i>
</a>
                <a href="https://www.instagram.com/solivagant_s._/" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-instagram"></i>
</a>
               <a href="mailto:saadsiddiqui1905@gmail.com">
    <i class="fas fa-envelope"></i>
</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>
            © 2026 Mohd Saad. All Rights Reserved.
        </p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(isset($_GET['status'])){
$status = $_GET['status'];
?>
<script>
document.addEventListener("DOMContentLoaded",()=>{
<?php
switch($status){
case "success":
?>
Swal.fire({
icon:"success",
title:"Message Sent!",
text:"Thank you for contacting me.",
confirmButtonColor:"#000"
});
<?php
break;
case "error":
?>
Swal.fire({
icon:"error",
title:"Oops!",
text:"Something went wrong.",
confirmButtonColor:"#000"
});
<?php
break;
case "empty":
?>
Swal.fire({
icon:"warning",
title:"Missing Fields",
text:"Please fill all the fields.",
confirmButtonColor:"#000"
});
<?php
break;
case "invalidemail":
?>
Swal.fire({
icon:"warning",
title:"Invalid Email",
text:"Please enter a valid email address.",
confirmButtonColor:"#000"
});
<?php
break;
}
?>
});
</script>
<?php
}
?>
<script>
if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.pathname);
}
</script>
<script>
const form = document.getElementById("contactForm");
const btn = document.getElementById("submitBtn");
if(form){
    form.addEventListener("submit", function(){
        btn.disabled = true;
        btn.innerHTML = `
            <i class="fa-solid fa-spinner fa-spin"></i>
            Sending...
        `;
    });
}
</script>
<!-- Certificate Modal -->

<div id="certificateModal" class="certificate-modal">


    <div class="certificate-modal-content">


        <span class="close-certificate"
        onclick="closeCertificate()">

            &times;

        </span>


        <iframe id="certificateFrame"
        src="">
        </iframe>


    </div>


</div>
</body>
</html>