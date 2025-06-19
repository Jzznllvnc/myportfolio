<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - jzznllvnc.</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/icons/jzznllvnc.png" type="image/png">
</head>
<body class="gallery-page">
    <div class="gallery-container">
        <div class="back-home-button-wrapper">
            <a href="index.php#works" class="btn back-home-btn">← Back to Home</a>
        </div>

        <h2>Landing Page</h2>
        <div class="image-gallery">
            <div class="gallery-item">
                <img src="./assets/images/landing.png" alt="Landing Page Screenshot">
            </div>
        </div>

        <h2>Admin Panel</h2>
        <p><i class="fa-solid fa-circle-info"></i> <i>Click on any image to see preview.</i></p>
        <br>
        <div class="image-gallery">
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/admin-image1.png" alt="Admin Screenshot 1">
                    <div class="image-description-overlay">
                        <h3>Admin Dashboard</h3>
                        <p>Overview of key metrics and quick access to management tools.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/admin-image2.png" alt="Admin Screenshot 2">
                    <div class="image-description-overlay">
                        <h3>Recruitment Management</h3>
                        <p>Manage applicant accounts, roles, and permissions efficiently.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/admin-image3.png" alt="Admin Screenshot 3">
                    <div class="image-description-overlay">
                        <h3>Employee Profile Setup</h3>
                        <p>Manage and view detailed profiles, application, and statuses of candidates.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/admin-image4.png" alt="Admin Screenshot 4">
                    <div class="image-description-overlay">
                        <h3>Employee Performance Metrics</h3>
                        <p>Access detailed reports and analytical insights for better decision-making.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/admin-image5.png" alt="Admin Screenshot 5">
                    <div class="image-description-overlay">
                        <h3>Recognition Management</h3>
                        <p>Providing recognition awards and certificates for employees.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Applicant Panel</h2>
        <p><i class="fa-solid fa-circle-info"></i> <i>Click on any image to see preview.</i></p>
        <br>
        <div class="image-gallery">
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/user-image1.png" alt="Applicant Screenshot 1">
                    <div class="image-description-overlay">
                        <h3>Job Posting</h3>
                        <p>Interested applicants can select their preferred job position and roles.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/user-image2.png" alt="Applicant Screenshot 2">
                    <div class="image-description-overlay">
                        <h3>Job Posting form</h3>
                        <p>Browse and apply for available job openings.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/user-image3.png" alt="Applicant Screenshot 3">
                    <div class="image-description-overlay">
                        <h3>Job Role Details</h3>
                        <p>Applicants can view important details regarding job role, responsibilities, qualifications.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item-content previewable">
                    <img src="./assets/images/user-image4.png" alt="Applicant Screenshot 4">
                    <div class="image-description-overlay">
                        <h3>Application Status</h3>
                        <p>Section where applicants can view the status of their submitted application.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="imgPreviewModal" style="display:none;position:fixed;z-index:1000;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.8);align-items:center;justify-content:center;">
            <span id="closePreview" style="position:absolute;top:30px;right:40px;font-size:2rem;color:#fff;cursor:pointer;">&times;</span>
            <img id="imgPreview" src="" alt="Preview" style="max-width:90vw;max-height:80vh;box-shadow:0 4px 24px #000;">
        </div>
        <script>
            
        document.querySelectorAll('.gallery-item-content.previewable').forEach(item => {
            item.addEventListener('click', function() {
                const imgElement = this.querySelector('img');
                if (imgElement) {
                    document.getElementById('imgPreview').src = imgElement.src;
                    document.getElementById('imgPreviewModal').style.display = 'flex';
                }
            });
        });
        document.getElementById('closePreview').onclick = function() {
            document.getElementById('imgPreviewModal').style.display = 'none';
        };
        document.getElementById('imgPreviewModal').onclick = function(e) {
            if (e.target === this) this.style.display = 'none';
        };

        if (window.matchMedia("(max-width: 767px)").matches) {
            const observerOptions = {
                root: null,
                rootMargin: '-10% 0px -10% 0px',
                threshold: 0.7
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    const overlay = entry.target.querySelector('.image-description-overlay');
                    if (overlay) {
                        if (entry.isIntersecting) {
                            if (overlay.showTimeout) {
                                clearTimeout(overlay.showTimeout);
                            }
                            overlay.classList.add('show-briefly');
                            overlay.showTimeout = setTimeout(() => {
                                overlay.classList.remove('show-briefly');
                                overlay.showTimeout = null;
                            }, 3000);
                        } else {
                            if (overlay.showTimeout) {
                                clearTimeout(overlay.showTimeout);
                                overlay.showTimeout = null;
                            }
                            overlay.classList.remove('show-briefly');
                        }
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.gallery-item-content').forEach(item => {
                observer.observe(item);
            });
        }
        
        </script>
        </div>
</body>
</html>