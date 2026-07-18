<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="#">SAAD</a>
        </div>

        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <a href="#" class="resume-btn">
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

            <a href="#">
                <i class="fab fa-linkedin"></i>
            </a>

            <a href="#">
                <i class="fas fa-envelope"></i>
            </a>

            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

    <div class="hero-image">
        <div class="image-box">
            <img src="assets/images/profile.png" alt="Mohd Saad">
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

<!-- Projeect Section -->

<section class="projects" id="projects">
    <div class="section-title">
        <p>MY WORK</p>
        <h2>Featured Projects</h2>
    </div>

    <div class="projects-container">
        <!-- Project 1 -->
        <div class="project-card">
            <div class="project-image">
                <img src="assets/images/smartchef.png" alt="SmartChef">
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
                    <a href="#" class="btn secondary-btn">
                        GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
            <div class="project-image">
                <img src="assets/images/portfolio.png" alt="Portfolio">
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
                </div>

                <div class="project-buttons">
                    <a href="#" class="btn primary-btn">
                        Live Demo
                    </a>
                    <a href="#" class="btn secondary-btn">
                        GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
            <div class="project-image">
                <img src="assets/images/upcoming.png" alt="Upcoming Project">
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

<section id="contact" class="placeholder">

    <h2>Contact</h2>

</section>

<script src="js/script.js"></script>

</body>
</html>