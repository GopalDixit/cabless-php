<?php
include 'header.php';

// Fetch data from API
$apiUrl = 'https://adminpanel-fback.onrender.com/api/services';
$response = file_get_contents($apiUrl);
$services = json_decode($response, true);
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
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-fluid py-5 px-4 px-lg-0">
    <div class="row g-0">
        <div class="col-lg-3 d-none d-lg-flex">
            <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">14 Years Experience</h1>
            </div>
        </div>
        <div class="col-md-12 col-lg-9">
            <div class="ms-lg-5 ps-lg-5">
                <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                    <?php foreach ($services as $service): ?>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <!-- <i class="fa <?= htmlspecialchars($service['icon']) ?> fa-2x text-primary"></i> -->
                                <i class="fa <?= $service['icon'] ?> fa-2x text-primary"></i>

                            </div>
                            <h4 class="mb-3"><?= htmlspecialchars($service['title']) ?></h4>
                            <p><?= htmlspecialchars($service['description']) ?></p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Support 24/7</p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
            <!-- Your testimonial items go here -->
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php
include 'footer.php';
?>
