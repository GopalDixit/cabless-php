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


<!-- Carousel Start -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Fetch carousel data
    fetch('http://localhost:4800/api/carousel')
        .then(response => response.json())
        .then(data => {
            const carouselContainer = document.querySelector('.owl-carousel');
            carouselContainer.innerHTML = '';

            data.forEach(item => {
                const carouselItem = document.createElement('div');
                carouselItem.className = 'owl-carousel-item position-relative';
                carouselItem.innerHTML = `
                    <div class="carousel-image-container">
                        <img class="img-fluid carousel-image" src="${item.image}" alt="${item.title}">
                    </div>
                    <div class="position-absolute top-0 start-0 w-10.5 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">${item.subtitle}</h5>
                                    <h1 class="display-3 text-white animated slideInDown mb-4 carousel-title">${item.title}</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">${item.description}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                carouselContainer.appendChild(carouselItem);
            });

            // Initialize Owl Carousel
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: true,
                items: 1
            });
        })
        .catch(error => console.error('Error fetching carousel data:', error));
});
</script>

<style>
.carousel-image-container {
    width: 100px;
    height: 100px;
    overflow: hidden;
}

.carousel-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel-title {
    font-size: 2rem; /* Adjust this value as needed */
    line-height: 1.2;
}
</style>


<style>
.carousel-image-container {
    width: 200px;
    height: 200px;
    overflow: hidden;
}

.carousel-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>


<!-- Carousel End -->


<!-- Service Start -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Fetch services data
    fetch('http://localhost:4800/api/services')
        .then(response => response.json())
        .then(data => {
            const serviceContainer = document.querySelector('.container-xxl.py-5 .row.g-4');
            serviceContainer.innerHTML = '';

            data.forEach(service => {
                const serviceItem = document.createElement('div');
                serviceItem.className = 'col-lg-4 col-md-6 service-item-top wow fadeInUp';
                serviceItem.setAttribute('data-wow-delay', '0.1s');
                serviceItem.innerHTML = `
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="${service.image}" alt="${service.title}">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">${service.title}</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                `;
                serviceContainer.appendChild(serviceItem);
            });
        })
        .catch(error => console.error('Error fetching services data:', error));
});
</script>


<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">About Us</h6>
                <h1 class="mb-4">We Are Trusted Company Since 2010</h1>
                <p class="mb-4">Angel High-Tech Polymers is a 14 years old Proprietorship Firm incorporated on 19-Sep-2010 The major activity of Angel High-Tech Polymers is Services, Sub-classified intoServices to Epoxy, Pu flooring, waterproofing and many more activities related to flooring and coating and is primarily Engaged in the flooring chemical services care and maintenance service activities. Angel High-Tech Polymers is classified as Micro enterprise in the financial year 2023-24. It has its unit situated at Ballbhgarh, Haryana.</p>
                <h1 class="mb-4">Benfite & Features</h1>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Resistant to stains and water</p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Durability</p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Appearance</p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Cost effectiveness</p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Strength</p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Safety</p>
                <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Eco-friendly</p>
                <div class="bg-primary d-flex align-items-center p-4 mt-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                        <h3 class="m-0 text-secondary">+91 8860280982</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-4" style="min-height: 500px;">
                <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/client/15.jpeg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                    <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="img/client/23.jpeg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">14</h2>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">80</h2>
                <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">170</h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">200</h2>
                <p class="text-white mb-0">Compleate Projects</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


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
                    <div class="bg-light p-4">
                        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-water fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Clean Room Flooring</h4>
                        <p>Clean room flooring protection against mild corrosion; and as a decorative waterproof coating for walls, tanks, etc include epoxy, vinyl, or linoleum
                            .</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Support 24/7</p>

                    </div>
                    <div class="bg-light p-4">
                        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-toilet fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Epoxy floorings </h4>
                        <p>Epoxy flooring is a type of synthetic resin floor system that is laid on top of concrete substrates as a form of protection and decoration.</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Support 24/7</p>

                    </div>
                    <div class="bg-light p-4">
                        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-shower fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Epoxy Wall Coatings</h4>
                        <p> Epoxy Wall Coating for protection against mild corrosion; and as a decorative waterproof coating for walls, tanks, etc.
                            .</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Support 24/7</p>

                    </div>
                    <div class="bg-light p-4">
                        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-tint fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">PU Flooring</h4>
                        <p style="text-align: justify;">Polyurethane is thermosetting polymer that has been used for many years as a protective & decorative coat for concrete floors.</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Support 24/7</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



<!-- video -->
<div class="width=100px height=100px align-items-center">
    <video width="35%" height="100%" autoplay muted>
        <source src="/video/whatsapp-video-2024-07-05-at-125702-pm_mDHyZLq1.mp4" type="video/mp4">
        <source src="video/whatsapp-video-2024-07-05-at-125702-pm_mDHyZLq1.mp4" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>
<!-- video -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">We are both very pleased with the end result and the customer experience dealing with your company has been excellent.</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/client/jgjhjgkjhkj.jpeg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Mukul Tomar</h5>

            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">Even though our floors were fitted over two years ago, they still look as superb as when they were first fitted. We are so pleased with the way they still look.</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/client/download (1).jpeg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Reena</h5>

            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">I think it looks amazing in combination with tiles and it’s so much warmer and slip-proof. We are so happy with the floor, it feels so good, looks amazing,</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/client/images (2).jpeg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Vikash</h5>

            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">The people here treat you like they like to be treated. I would highly recommend everyone in the flooring market give the staff at Custom Floors.</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/client/images (3).jpeg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Arvind Singh</h5>

            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<!-- cilent Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">

            <h2 class="mb-5">Trusted By Over 300 Companies for Epoxy Flooring excellent</h2>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">

                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/com/download-removebg-preview (1).png" style="width: 80px; height: 80px;">



            </div>
            <div class="testimonial-item text-center">

                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/com/download__1_-removebg-preview.png" style="width: 80px; height: 80px;">



            </div>
            <div class="testimonial-item text-center">

                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/com/download__2_-removebg-preview.png" style="width: 80px; height: 80px;">



            </div>
            <div class="testimonial-item text-center">

                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/com/download__3_-removebg-preview.png" style="width: 80px; height: 80px;">



            </div>
            <div class="testimonial-item text-center">

                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/com/download__4_-removebg-preview.png" style="width: 80px; height: 80px;">



            </div>

        </div>
    </div>
</div>
</div>
<!-- cilent end -->
<?php
include 'footer.php'; // Include footer file to display copyright and other necessary information.
?>