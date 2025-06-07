<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - jzznllvnc.</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./Images/jzznllvnc.png" type="image/png">
</head>
<body class="gallery-page">
    <div class="gallery-container">
        <div class="back-home-button-wrapper">
            <a href="index.php#works" class="btn back-home-btn">← Back to Home</a>
        </div>

        <!-- Landing Page Section -->
        <h2>Landing Page</h2>
        <div class="image-gallery">
            <div class="gallery-item">
                <img src="./Images/landing.png" alt="Landing Page Screenshot">
            </div>
        </div>

        <!-- Admin Panel Section -->
        <h2>Admin Panel</h2>
        <p><i class="fa-solid fa-circle-info"></i> <i>Click on any image to see preview.</i></p>
        <br>
        <div class="image-gallery">
            <div class="gallery-item">
                <img src="./Images/admin-image1.png" alt="Admin Screenshot 1" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/admin-image2.png" alt="Admin Screenshot 2" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/admin-image3.png" alt="Admin Screenshot 3" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/admin-image4.png" alt="Admin Screenshot 4" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/admin-image5.png" alt="Admin Screenshot 5" class="previewable">
            </div>
        </div>

        <!-- Applicant Panel Section -->
        <h2>Applicant Panel</h2>
        <p><i class="fa-solid fa-circle-info"></i> <i>Click on any image to see preview.</i></p>
        <br>
        <div class="image-gallery">
            <div class="gallery-item">
                <img src="./Images/user-image1.png" alt="Applicant Screenshot 1" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/user-image2.png" alt="Applicant Screenshot 2" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/user-image3.png" alt="Applicant Screenshot 3" class="previewable">
            </div>
            <div class="gallery-item">
                <img src="./Images/user-image4.png" alt="Applicant Screenshot 4" class="previewable">
            </div>
        </div>

        <!-- Image Preview Modal -->
        <div id="imgPreviewModal" style="display:none;position:fixed;z-index:1000;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.8);align-items:center;justify-content:center;">
            <span id="closePreview" style="position:absolute;top:30px;right:40px;font-size:2rem;color:#fff;cursor:pointer;">&times;</span>
            <img id="imgPreview" src="" alt="Preview" style="max-width:90vw;max-height:80vh;box-shadow:0 4px 24px #000;">
        </div>
        <script>
            
        // Simple image preview
        document.querySelectorAll('.previewable').forEach(img => {
            img.addEventListener('click', function() {
                document.getElementById('imgPreview').src = this.src;
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
