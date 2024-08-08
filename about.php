<?php
include 'header.php';

// Function to fetch data from the API
function fetchData($url) {
    $response = file_get_contents($url);
    if ($response === FALSE) {
        // Handle error
        return [];
    }
    return json_decode($response, true);
}

// Fetch content from the API
$apiUrl = 'http://localhost:4800/api/content/content';
$contentData = fetchData($apiUrl);
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
    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase"><?php echo htmlspecialchars($contentData['subtitle']); ?></h6>
                <h1 class="mb-4"><?php echo htmlspecialchars($contentData['description']); ?></h1>
                <p class="mb-4"><?php echo htmlspecialchars($contentData['description']); ?></p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i><?php echo htmlspecialchars($contentData['feature1']); ?></p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i><?php echo htmlspecialchars($contentData['feature2']); ?></p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i><?php echo htmlspecialchars($contentData['feature3']); ?></p>
                <div class="bg-primary d-flex align-items-center p-4 mt-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                        <h3 class="m-0 text-secondary">+91 80101 30315</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-4" style="min-height: 500px;">
                <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo htmlspecialchars($contentData['image1']); ?>" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                    <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="<?php echo htmlspecialchars($contentData['image2']); ?>" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php if (isset($contentData['services']) && is_array($contentData['services'])): ?>
                <?php foreach ($contentData['services'] as $service): ?>
                    <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="<?php echo htmlspecialchars($service['image']); ?>" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0"><?php echo htmlspecialchars($service['name']); ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No services found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo htmlspecialchars($contentData['yearsExperience']); ?></h2>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo htmlspecialchars($contentData['expertTechnicians']); ?></h2>
                <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo htmlspecialchars($contentData['satisfiedClients']); ?></h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo htmlspecialchars($contentData['completedProjects']); ?></h2>
                <p class="text-white mb-0">Completed Projects</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Technicians</h6>
            <h1 class="mb-5">Our Expert Technicians</h1>
        </div>
        <div class="row g-4">
            <?php if (isset($contentData['team']) && is_array($contentData['team'])): ?>
                <?php foreach ($contentData['team'] as $member): ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="<?php echo htmlspecialchars($member['image']); ?>" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h5 class="fw-bold mb-0"><?php echo htmlspecialchars($member['name']); ?></h5>
                                    <small><?php echo htmlspecialchars($member['designation']); ?></small>
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href="<?php echo htmlspecialchars($member['facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="<?php echo htmlspecialchars($member['twitter']); ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href="<?php echo htmlspecialchars($member['instagram']); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No team members found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Team End -->


<?php
include 'footer.php'; // Include footer file to display copyright and other necessary information.
?>
