<?php
include "header.php"; 
?>

<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0">Angel Hi-Tech Polymers</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                    <i class="fa fa-phone-alt text-primary"></i>
                </div>
                <div class="ms-3">
                    <p class="mb-1 text-white">Emergency 24/7</p>
                    <h5 class="m-0 text-secondary">+91 80101 30315</h5>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4" id="gallery-container">
            <!-- Images will be dynamically inserted here -->
        </div>
    </div>
</div>
<!-- Gallery End -->

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const galleryContainer = document.getElementById('gallery-container');

        const fetchImages = async () => {
            try {
                const response = await fetch('fetch_gallery.php');
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();

                if (Array.isArray(data)) {
                    data.forEach(image => {
                        if (image.imageUrl) {
                            const imageDiv = document.createElement('div');
                            imageDiv.className = 'col-lg-4 col-md-6 service-item-top wow fadeInUp';
                            imageDiv.setAttribute('data-wow-delay', '0.1s');

                            const imgWrapper = document.createElement('div');
                            imgWrapper.className = 'overflow-hidden';

                            const imgElement = document.createElement('img');
                            imgElement.className = 'img-fluid w-100 h-100';
                            imgElement.src = image.imageUrl;
                            imgElement.alt = '';

                            imgWrapper.appendChild(imgElement);

                            const innerDiv = document.createElement('div');
                            innerDiv.className = 'd-flex align-items-center justify-content-between bg-light p-4';

                            imageDiv.appendChild(imgWrapper);
                            imageDiv.appendChild(innerDiv);

                            galleryContainer.appendChild(imageDiv);
                        }
                    });
                } else {
                    console.error('Data format is incorrect');
                }
            } catch (error) {
                console.error('Error fetching images:', error);
            }
        };

        fetchImages();
    });
</script>

<?php
include "footer.php"; // Ensure this includes necessary footer content
?>
