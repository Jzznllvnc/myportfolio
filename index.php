<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - jzznllvnc.</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/icons/jzznllvnc.png" type="image/png">
</head>
<body>

    <div id="customAlertModal" class="modal-overlay">
        <div class="modal-content">
            <div id="modalIconContainer" style="text-align: center; margin-bottom: 10px;"></div> <h3 id="modalTitle"></h3>
            <p id="modalMessage"></p>
            <button id="modalCloseButton">OK</button>
        </div>
    </div>

    <header id="mainHeader">
        <div class="container">
            <div class="header-left">
                <img src="./assets/icons/jzznllvnc.png" alt="Avatar" class="avatar" id="brandLogo">
                <a href="#about" class="logo">jzznllvnc.</a>
            </div>
            <nav>
                <ul>
                    <li><a href="#about" class="active">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#setup">Setup</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="theme-toggle-button" id="themeToggleButton">
                <img src="./assets/icons/dark.png" alt="Light Mode" class="theme-icon sun-icon" id="sunIcon">
                <img src="./assets/icons/light.png" alt="Dark Mode" class="theme-icon moon-icon" id="moonIcon">
                <span id="themeModeText" class="theme-text"></span>
            </div>
        </div>
    </header>

    <div id="menuBarContainer" class="menu-bar-container">
        <img src="./assets/icons/menu.svg" alt="Menu" class="menu-icon" id="menuBarIcon">
        <div class="dropdown-menu" id="dropdownMenu">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#setup">Setup</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>

    <main>
        <section id="about" class="fade-in-section hero-section">
            <div class="container">
                <div class="content-wrapper">
                    <div class="hero-text-content">
                        <div class="hero-intro">
                            <img src="./assets/images/me.jpeg" alt="Avatar" class="avatar-hero" id="heroAvatar">
                            <p class="greeting">Hi, I'm Jazz 🙌</p>
                        </div>
                        <div class="tagline">
                            <h1>Building web designs, consistency <span class="purple-highlight">& experience.</span></h1>
                        </div>
                        <p class="lead-description">
                            I see myself focusing on UI/UX Design, Responsive Web Design, and Visual Development. Oh, and I also offer services related to PC (building, troubleshooting, etc.)
                        </p>
                        <div class="email-signup">
                            <form id="subscribeForm">
                                <input type="email" placeholder="Email address" class="email-input" id="subscribeEmail" name="email">
                                <button type="submit" class="connect-button" id="subscribeButton"><i class="fa-solid fa-link" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;Connect With Me</button>
                            </form>
                        </div>
                    </div>
                    <img src="./assets/icons/jzznllvnc-dark.png" alt="Brand Logo Background" class="brand-logo-background" id="aboutBrandLogo">
                </div>
            </div>
        </section>

        <section id="projects" class="fade-in-section">
            <div class="container">
                <h2>My Projects</h2>
                <div class="grid-container">
                        <div class="project-card">
                            <img
                                src="./assets/images//hr.gif"
                                alt="Project 1"
                                onerror="this.onerror=null;this.src='https://placehold.co/400x250/F9FAFB/1A202C?text=Placeholder';"
                            />
                            <div class="project-info">
                                <h3>Hospital Management System</h3>
                                <p>
                                    A functional and integration-ready system that we did as a Finals project (third-year). Our group was assigned to manage HR Department.
                                </p>
                                <a href="gallery.php" class="btn">See Gallery</a>
                            </div>
                        </div>
                        <div class="project-card">
                            <img
                                src="./assets/images/techno.png"
                                alt="Project 2"
                                onerror="this.onerror=null;this.src='https://placehold.co/400x250/F9FAFB/1A202C?text=Placeholder';"
                            />
                            <div class="project-info">
                                <h3>RentMySkill</h3>
                                <p>
                                    A technopreneurship business proposal that we did in my third-year, second semester of college.
                                </p>
                                <a href="./assets/documents/technopreneurship.pdf" download="technopreneurship.pdf" class="btn">Download PDF</a>
                            </div>
                        </div>
                    <div class="project-card">
                        <img
                            src="https://placehold.co/400x250/F9FAFB/1A202C?text=Project+3"
                            alt="Project 3"
                            onerror="this.onerror=null;this.src='https://placehold.co/400x250/F9FAFB/1A202C?text=Placeholder';"
                        />
                        <div class="project-info">
                            <h3>Project Title Three</h3>
                            <p>
                                Pending Description for my Project 3.
                            </p>
                            <a href="#" target="_blank" rel="noopener noreferrer" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="setup" class="fade-in-section">
            <div class="container">
                <h2>How I Build</h2>
                <div class="grid-container">
                    <div class="skill-card">
                        <h3>Frontend Craft</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS</li>
                            <li>JavaScript (ES6+)</li>
                        </ul>
                    </div>
                    <div class="skill-card">
                        <h3>Backend Development</h3>
                        <ul>
                            <li>PHP</li>
                            <li>MySQL (Database)</li>
                            <li>APIs</li>
                        </ul>
                    </div>
                    <div class="skill-card">
                        <h3>Trusted Stack</h3>
                        <ul>
                            <li>VS Code (Primary IDE)</li>
                            <li>Git & GitHub (Version Control)</li>
                            <li>XAMPP (Local Environment)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="fade-in-section">
            <div class="container">
                <div class="contact-content-wrapper">
                    <div class="contact-info-column">
                        <h2>Let's Connect</h2>
                        <p>
                            Have a question or want to work together? Feel free to reach out!
                        </p>
                        <div class="social-links">
                            <a href="#" id="phoneNumberLink" data-phone-number="+63 9777323270">
                                <img src="./assets/icons/phone.svg" alt="Call / SMS" class="social-icon" id="callIcon">
                                <span>Call / SMS</span>
                            </a>
                            <a href="https://www.linkedin.com/in/jazznelle-vince-arambulo-b65714188/" target="_blank" rel="noopener noreferrer">
                                <img src="./assets/icons/linkedin.svg" alt="LinkedIn" class="social-icon">
                                <span>LinkedIn</span>
                            </a>
                            <a href="https://github.com/Jzznllvnc" target="_blank" rel="noopener noreferrer">
                                <img src="./assets/icons/github.svg" alt="GitHub" class="social-icon" id="githubIcon">
                                <span>GitHub</span>
                            </a>
                        </div>
                    </div>

                    <form id="contactForm" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Your message..." required></textarea>
                        </div>
                        <button type="submit" class="btn submit-btn"><i class="fa-solid fa-paper-plane" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <span id="year"></span> jzznllvnc. All rights reserved.</p>
    </footer>

    <button id="scrollToTopBtn" class="scroll-to-top-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 4.81l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M12 4.5a.75.75 0 0 1 .75.75v15a.75.75 0 0 1-1.5 0v-15A.75.75 0 0 1 12 4.5Z" clip-rule="evenodd" />
        </svg>
    </button>

    <script src="script.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
    (function() {
        emailjs.init("11OfSjz6umG-r2ps-");
    })();
    </script>
</body>
</html>