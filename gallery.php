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
            <div class="gallery-item"> <img src="./assets/images/landing.png" alt="Landing Page Screenshot">
            </div>
        </div>

        <h2>Admin Panel</h2>
        <p><i class="fa-solid fa-circle-info"></i> <i>Click on any image to see preview.</i></p>
        <br>
        <div class="image-gallery">
            <div class="gallery-item previewable"> <img src="./assets/images/admin-image1.png" alt="Admin Screenshot 1">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Dashboard Overview</span>
                    <p class="overlay-description">A comprehensive view of key recruitment metrics.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/admin-image2.png" alt="Admin Screenshot 2">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Recruitment Management</span>
                    <p class="overlay-description">A key section wherein admin can add job, manage applicant account, offer approval, and manage documents.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/admin-image3.png" alt="Admin Screenshot 3">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Employee Profile Setup</span>
                    <p class="overlay-description">Input integrated applicants who passed the learning management, and their schedule.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/admin-image4.png" alt="Admin Screenshot 4">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Performance Management</span>
                    <p class="overlay-description">Performance metrics of employees for better tracking.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/admin-image5.png" alt="Admin Screenshot 5">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Recognition Management</span>
                    <p class="overlay-description">Applying recoginition to employees who stands out, as well as those who needs improvement.</p>
                </div>
            </div>
        </div>

        <h2>Applicant Panel</h2>
        <p><i class="fa-solid fa-circle-info"></i> <i>Click on any image to see preview.</i></p>
        <br>
        <div class="image-gallery">
            <div class="gallery-item previewable"> <img src="./assets/images/user-image1.png" alt="Applicant Screenshot 1">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Job Posting</span>
                    <p class="overlay-description">Job posting that applicants can choose to apply.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/user-image2.png" alt="Applicant Screenshot 2">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Job Application Form</span>
                    <p class="overlay-description">Intuitive form for submitting applications.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/user-image3.png" alt="Applicant Screenshot 3">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Job Role Information</span>
                    <p class="overlay-description">Detailed descriptions regarding job roles.</p>
                </div>
            </div>
            <div class="gallery-item previewable"> <img src="./assets/images/user-image4.png" alt="Applicant Screenshot 4">
                <div class="gallery-item-overlay">
                    <span class="overlay-title">Application Status</span>
                    <p class="overlay-description">Applicants can view the status of their submitted application.</p>
                </div>
            </div>
        </div>

        <div id="imgPreviewModal" style="display:none;position:fixed;z-index:1000;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.8);align-items:center;justify-content:center;">
            <span id="closePreview" style="position:absolute;top:30px;right:40px;font-size:2rem;color:#fff;cursor:pointer;">&times;</span>
            <img id="imgPreview" src="" alt="Preview" style="max-width:90vw;max-height:80vh;box-shadow:0 4px 24px #000;">
        </div>
        <script>
            
        // Simple image preview
        document.querySelectorAll('.gallery-item.previewable').forEach(item => {
            item.addEventListener('click', function() {
                const imgSrc = this.querySelector('img').src;
                document.getElementById('imgPreview').src = imgSrc;
                document.getElementById('imgPreviewModal').style.display = 'flex';
            });
        });
        document.getElementById('closePreview').onclick = function() {
            document.getElementById('imgPreviewModal').style.display = 'none';
        };
        document.getElementById('imgPreviewModal').onclick = function(e) {
            if (e.target === this) this.style.display = 'none';
        };
        </script>
        </div>
</body>
</html>