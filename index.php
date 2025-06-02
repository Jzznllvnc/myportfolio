<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - jzznllvnc.</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./Images/jzznllvnc.png" type="image/png">
</head>
<body>

    <div id="customAlertModal" class="modal-overlay">
        <div class="modal-content">
            <h3 id="modalTitle"></h3>
            <p id="modalMessage"></p>
            <button id="modalCloseButton">OK</button>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="header-left">
                <img src="./Images/jzznllvnc.png" alt="Avatar" class="avatar" id="brandLogo">
                <a href="#about" class="logo">jzznllvnc.</a>
            </div>
            <nav>
                <ul>
                    <li><a href="#about" class="active">About</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="theme-toggle-button" id="themeToggleButton">
                <img src="./Images/moon.png" alt="Light Mode" class="theme-icon sun-icon" id="sunIcon">
                <img src="./Images/sun.png" alt="Dark Mode" class="theme-icon moon-icon" id="moonIcon">
                <span id="themeModeText" class="theme-text"></span>
            </div>
        </div>
    </header>

    <main>
        <section id="about" class="fade-in-section hero-section">
            <div class="container">
                <div class="content-wrapper">
                    <div class="hero-text-content">
                        <h1>Building web designs, consistency <span class="purple-highlight">& experience.</span></h1>
                        <p class="lead-description">
                            currently a Fourth-Year IT Student in PH. I see myself focusing on UI/UX Design, Responsive Web Design, and Visual Development. Oh, and I also offer services related to PC (building, troubleshooting, etc.) 😄
                        </p>
                        <div class="email-signup">
                            <form id="subscribeForm">
                                <input type="email" placeholder="Email address" class="email-input" id="subscribeEmail" name="email">
                                <button type="submit" class="connect-button" id="subscribeButton">Connect With Me</button>
                            </form>
                        </div>
                    </div>
                    <div class="profile-photo-wrapper">
                        <img
                            src="./Images/me.jpeg" alt="Your Photo"
                            class="profile-photo"
                            onerror="this.onerror=null;this.src='https://placehold.co/500x700/c8d8e4/2b6777?text=Placeholder';"
                        />
                    </div>
                </div>
            </div>
        </section>

        <section id="works" class="fade-in-section">
            <div class="container">
                <h2>My Works</h2>
                <div class="grid-container">
                    <div class="project-card">
                        <img
                            src="https://placehold.co/400x250/F9FAFB/1A202C?text=Project+1"
                            alt="Project 1"
                            onerror="this.onerror=null;this.src='https://placehold.co/400x250/F9FAFB/1A202C?text=Placeholder';"
                        />
                        <div class="project-info">
                            <h3>Project Title One</h3>
                            <p>
                                Pending Description for my Project 1.
                            </p>
                            <a href="#" target="_blank" rel="noopener noreferrer" class="btn">View Project</a>
                        </div>
                    </div>
                        <div class="project-card">
                            <img
                                src="./Images/techno.png"
                                alt="Project 2"
                                onerror="this.onerror=null;this.src='https://placehold.co/400x250/F9FAFB/1A202C?text=Placeholder';"
                            />
                            <div class="project-info">
                                <h3>RentMySkill</h3>
                                <p>
                                    A technopreneurship business proposal that we did in my third-year, second semester of college.
                                </p>
                                <a href="./documents/technopreneurship.pdf" download="technopreneurship.pdf" class="btn">Download PDF</a>
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

        <section id="services" class="fade-in-section">
            <div class="container">
                <h2>My Services</h2>
                <div class="grid-container">
                    <div class="skill-card">
                        <h3>Frontend Development</h3>
                        <ul>
                            <li>HTML5 & CSS3</li>
                            <li>JavaScript (ES6+)</li>
                            <li>Responsive Design</li>
                        </ul>
                    </div>
                    <div class="skill-card">
                        <h3>Backend Development</h3>
                        <ul>
                            <li>PHP</li>
                            <li>MySQL (Database)</li>
                            <li>RESTful APIs</li>
                            <li>Vanilla JS</li>
                        </ul>
                    </div>
                    <div class="skill-card">
                        <h3>Tools & Technologies</h3>
                        <ul>
                            <li>Git & GitHub</li>
                            <li>VS Code</li>
                            <li>XAMPP</li>
                            <li>Basic UI/UX Principles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="fade-in-section">
            <div class="container">
                <h2>Get in Touch</h2>
                <p>
                    Have a question or want to work together? Feel free to reach out!
                </p>
                <div class="social-links">
                    <a href="#" id="phoneNumberLink" data-phone-number="+639944193805">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.21-2.21a1 1 0 011.03-.24 11.41 11.41 0 003.54.54c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1A17 17 0 013 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1v3.5c0 .55-.45 1-1 1a12.59 12.59 0 00-2.21 2.21L6.62 10.79z"/>
                        </svg>
                        <span>Phone Number</span>
                    </a>
                    <a href="https://www.linkedin.com/in/jazznelle-vince-arambulo-b65714188/" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38.99-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 6.5h-4.96v16h4.96v-16zm7.98 0h-4.96v16h4.96v-8c0-2.657 3.029-3.235 3.029-3.235v-4.765h-3.029z" />
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                    <a href="https://github.com/Jzznllvnc" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.835 2.809 1.305 3.493.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.312.465-2.387 1.235-3.221-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.046.138 3.003.404 2.295-1.552 3.29-1.23 3.29-1.23.645 1.653.24 2.873.105 3.176.77.835 1.235 1.909 1.235 3.221 0 4.609-2.801 5.621-5.476 5.92.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.197-6.095 8.197-11.389 0-6.627-5.372-12-12-12z" />
                        </svg>
                        <span>GitHub</span>
                    </a>
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
                    <button type="submit" class="btn submit-btn">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> jzznllvnc. All rights reserved.</p>
    </footer>

    <button id="scrollToTopBtn" class="scroll-to-top-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 4.81l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M12 4.5a.75.75 0 0 1 .75.75v15a.75.75 0 0 1-1.5 0v-15A.75.75 0 0 1 12 4.5Z" clip-rule="evenodd" />
        </svg>
    </button>

    <script src="script.js"></script>
</body>
</html>