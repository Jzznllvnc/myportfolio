function showCustomAlert(title, message) {
    const modalOverlay = document.getElementById('customAlertModal');
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalMessage').textContent = message;
    modalOverlay.classList.add('show');
}

document.getElementById('modalCloseButton').addEventListener('click', function() {
    document.getElementById('customAlertModal').classList.remove('show');
});

document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const navLinks = document.querySelectorAll('header nav ul li a');
    const sections = document.querySelectorAll('main section');
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    const themeToggleButton = document.getElementById('themeToggleButton');
    const brandLogo = document.getElementById('brandLogo');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    const themeModeText = document.getElementById('themeModeText');

    const enableDarkMode = () => {
        document.body.classList.add('dark-mode');
        brandLogo.src = './Images/jzznllvnc-dark.png';
        localStorage.setItem('theme', 'dark');
        sunIcon.style.opacity = '0';
        moonIcon.style.opacity = '1';
        themeModeText.textContent = 'Switch to Light Mode';
    };

    const disableDarkMode = () => {
        document.body.classList.remove('dark-mode');
        brandLogo.src = './Images/jzznllvnc.png';
        localStorage.setItem('theme', 'light');
        sunIcon.style.opacity = '1';
        moonIcon.style.opacity = '0';
        themeModeText.textContent = 'Switch to Dark Mode';
    };

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }

    themeToggleButton.addEventListener('click', () => {
        if (document.body.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    });

    const updateActiveNavLink = () => {
        const headerHeight = header.offsetHeight;
        let currentActiveSectionId = 'about';

        for (let i = sections.length - 1; i >= 0; i--) {
            const section = sections[i];
            const sectionTop = section.offsetTop - headerHeight - 50;
            if (window.scrollY >= sectionTop) {
                currentActiveSectionId = section.id;
                break;
            }
        }

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').substring(1) === currentActiveSectionId) {
                link.classList.add('active');
            }
        });
    };

    updateActiveNavLink();

    navLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - header.offsetHeight,
                    behavior: 'smooth'
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            }
        });
    });

    window.addEventListener('scroll', updateActiveNavLink);


    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');
            const submitBtn = contactForm.querySelector('.submit-btn');

            if (nameInput.value.trim() === '') {
                showCustomAlert('Validation Error', 'Please enter your name.');
                nameInput.focus();
                return;
            }
            if (emailInput.value.trim() === '') {
                showCustomAlert('Validation Error', 'Please enter your email address.');
                emailInput.focus();
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                showCustomAlert('Validation Error', 'Please enter a valid email address.');
                emailInput.focus();
                return;
            }
            if (messageInput.value.trim() === '') {
                showCustomAlert('Validation Error', 'Please enter your message.');
                messageInput.focus();
                return;
            }
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';

            const formData = new FormData(contactForm);

            fetch('function/send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    showCustomAlert('Message Sent!', data.message);
                    contactForm.reset();
                } else {
                    showCustomAlert('Error', data.message);
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                showCustomAlert('Error', 'Could not send message. Please try again later.');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Send Message';
            });
        });
    }

    const phoneNumberLink = document.getElementById('phoneNumberLink');
    if (phoneNumberLink) {
        phoneNumberLink.addEventListener('click', function(e) {
            e.preventDefault();
            const phoneNumber = this.getAttribute('data-phone-number');
            if (phoneNumber) {
                showCustomAlert('My Phone Number', phoneNumber);
            }
        });
    }

    const subscribeForm = document.getElementById('subscribeForm');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const emailInput = document.getElementById('subscribeEmail');
            const subscribeButton = document.getElementById('subscribeButton');

            if (emailInput.value.trim() === '') {
                showCustomAlert('Validation Error', 'Please enter your email address.');
                emailInput.focus();
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                showCustomAlert('Validation Error', 'Please enter a valid email address.');
                emailInput.focus();
                return;
            }

            subscribeButton.disabled = true;
            subscribeButton.textContent = 'Submitting...';

            const formData = new FormData(subscribeForm);

            fetch('function/subscribe.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    showCustomAlert('Success!', data.message);
                    subscribeForm.reset();
                } else {
                    showCustomAlert('Error', data.message);
                }
            })
            .catch(error => {
                console.error('There was a problem with the subscribe fetch operation:', error);
                showCustomAlert('Error', 'Could not subscribe. Please try again later.');
            })
            .finally(() => {
                subscribeButton.disabled = false;
                subscribeButton.textContent = 'Connect With Me';
            });
        });
    }
});