function showCustomAlert(title, message, iconHtml = '') {
    const modalOverlay = document.getElementById('customAlertModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');
    const modalIconContainer = document.getElementById('modalIconContainer');

    modalTitle.innerHTML = title;
    modalMessage.innerHTML = message;

    if (modalIconContainer) {
        modalIconContainer.innerHTML = iconHtml;
    }

    modalOverlay.classList.add('show');
}

document.getElementById('modalCloseButton').addEventListener('click', function() {
    document.getElementById('customAlertModal').classList.remove('show');
});

document.addEventListener('DOMContentLoaded', function() {
    const mainHeader = document.getElementById('mainHeader');
    const headerNavLinks = document.querySelectorAll('header nav ul li a');
    const dropdownNavLinks = document.querySelectorAll('#dropdownMenu ul li a');
    const allNavLinks = [...headerNavLinks, ...dropdownNavLinks];
    const sections = document.querySelectorAll('main section');
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    // Removed: themeToggleButton, sunIcon, moonIcon, themeModeText
    const menuBarContainer = document.getElementById('menuBarContainer');
    const menuBarIcon = document.getElementById('menuBarIcon');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // New icon elements (these are now assumed to always point to dark versions)
    const callIcon = document.getElementById('callIcon');
    const githubIcon = document.getElementById('githubIcon');

    let lastScrollY = window.scrollY;

    // Code to update the copyright year dynamically
    var yearSpan = document.getElementById('year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // Removed: enableDarkMode and disableDarkMode functions
    // Removed: savedTheme and themeToggleButton event listener

    const updateActiveNavLink = () => {
        const headerHeight = mainHeader.offsetHeight;
        let currentActiveSectionId = 'about';

        for (let i = sections.length - 1; i >= 0; i--) {
            const section = sections[i];
            const sectionTop = section.offsetTop - headerHeight - 100;
            if (window.scrollY >= sectionTop) {
                currentActiveSectionId = section.id;
                break;
            }
        }

        allNavLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').substring(1) === currentActiveSectionId) {
                link.classList.add('active');
            }
        });
    };

    updateActiveNavLink();

    allNavLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                dropdownMenu.classList.remove('show');

                window.scrollTo({
                    top: targetSection.offsetTop - mainHeader.offsetHeight,
                    behavior: 'smooth'
                });

                allNavLinks.forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            }
        });
    });

    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        const headerHideThreshold = mainHeader.offsetHeight + 50;

        if (currentScrollY > lastScrollY && currentScrollY > headerHideThreshold) {
            mainHeader.classList.add('hidden');
            menuBarContainer.classList.add('show');
        } else {
            mainHeader.classList.remove('hidden');
            menuBarContainer.classList.remove('show');
            dropdownMenu.classList.remove('show');
        }

        if (currentScrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }

        lastScrollY = currentScrollY;
        updateActiveNavLink();
    });

    // Toggle dropdown menu
    menuBarIcon.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
        if (!menuBarContainer.contains(event.target) && dropdownMenu.classList.contains('show')) {
            dropdownMenu.classList.remove('show');
        }
    });

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
                showCustomAlert('Error', 'Please enter your name.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
                nameInput.focus();
                return;
            }
            if (emailInput.value.trim() === '') {
                showCustomAlert('Error', 'Please enter your email address.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
                emailInput.focus();
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                showCustomAlert('Error', 'Please enter a valid address.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
                emailInput.focus();
                return;
            }
            if (messageInput.value.trim() === '') {
                showCustomAlert('Error', 'Please enter your message.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
                messageInput.focus();
                return;
            }
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';

            var templateParams = {
                from_name: nameInput.value,
                from_email: emailInput.value,
                message: messageInput.value
            };

            // Use emailjs.send() for contact form
            emailjs.send('service_4qpgl7h', 'template_41dey72', templateParams)
                .then(function(response) {
                   console.log('SUCCESS!', response.status, response.text);
                   showCustomAlert('Message Sent!', 'Thank you for your message! I will get back to you soon.', '<i class="fa-solid fa-circle-check fa-3x" style="color: #63E6BE;"></i>');
                   contactForm.reset();
                }, function(error) {
                   console.log('FAILED...', error);
                   showCustomAlert('Error', 'Oops! Something went wrong and we couldn\'t send your message.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
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
                const flagIconHtml = '<img src="./assets/icons/ph-flag.png" alt="Philippine Flag" style="width: 2em; height: 1.5em; margin-right: 0.5em; vertical-align: middle;">';
                showCustomAlert('My Phone Number', flagIconHtml + phoneNumber);
            }
        });
    }

    // --- SUBSCRIBE FORM HANDLER ---
    const subscribeForm = document.getElementById('subscribeForm');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const emailInput = document.getElementById('subscribeEmail');
            const subscribeButton = document.getElementById('subscribeButton');

            if (emailInput.value.trim() === '') {
                showCustomAlert('Oops!', 'Please enter your email address.', '<i class="fa-solid fa-face-sad-cry fa-3x" style="color: #74C0FC;"></i>');
                emailInput.focus();
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                showCustomAlert('Error', 'Please enter a valid email address.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
                emailInput.focus();
                return;
            }

            subscribeButton.disabled = true;
            subscribeButton.textContent = 'Submitting...';

            const emailTemplateParams = {
                subscriber_email: emailInput.value
            };

            emailjs.send('service_4qpgl7h', 'template_exn8ctd', emailTemplateParams)
                .then(function(response) {
                    console.log('EmailJS Notification SUCCESS!', response.status, response.text);
                    showCustomAlert('Success!', 'Thank you for connecting! Your email has been received and I\'ve been notified.', '<i class="fa-solid fa-circle-check fa-3x" style="color: #63E6BE;"></i>');
                    subscribeForm.reset();
                }, function(error) {
                    console.error('EmailJS Notification FAILED...', error);
                    showCustomAlert('Error', 'Could not save your email. Please try again later.', '<i class="fa-solid fa-triangle-exclamation fa-3x" style="color: #ff0000;"></i>');
                })
                .finally(() => {
                    subscribeButton.disabled = false;
                    subscribeButton.textContent = 'Connect With Me';
                });
        });
    }
});