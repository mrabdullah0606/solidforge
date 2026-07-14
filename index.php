<?php require_once('includes/session_init.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Solidforge - Premium 3D Printers & Software</title>
    <meta name="description" content="Solidforge: Your go-to source for premium 3D printers, polishing solutions, and 3D software for manufacturers, designers, and innovators.">
    <meta name="keywords" content="3D Printers, Polishing Solutions, 3D Software, Additive Manufacturing, Flashforge, Solidscape">
    <meta name="author" content="Solidforge">
    <!-- aos animation link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body{
        overflow-x: hidden;
    }
    /* .bg-header{
        background-image: url(images/bg-new.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /*background: linear-gradient(to bottom, #121212, #333333);*/
        /*color: white;
        font-family: Arial, sans-serif;
        background-size: 100% 100%;
        height: 100vh;}*/
     
    .text-warning{
    color: #f7df50 !important;
    }
    .bg-grey{background-color: #3b3b3b;}
    .headercontent{margin-top: 10%;}
    .vh-90{
        height: 90vh;
    }
    .font-1{
        font-family: "Karla", serif;
        font-weight: 800;
    }
    .w-7{
        width: 7%;
    }
  /*  .withsep::after {
        content: "";
        width: 25px;
        position: absolute;
        height: 72px;
        right: 0;
        top: 33%;
        background: url(images/line-1-0-2-1.png) no-repeat;
    }*/
    .bg-silver{background-color: #949597; color: #fff;border: none;}
    .bg-yellow{background-color: #F5DD4C;}
    .quotebtn:hover{background-color:#F5DD4C; }
    .border-yellow,.border-start{border-color: #F5DD4C !important;}
    .text-yellow{color: #F7E04B;}
    .line-height-30{

        .training-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 80px 0;
        }
        .training-content {
            max-width: 900px;
            margin: auto;
            text-align: center;
        }
        .training-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .training-desc {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 40px;
        }
        .service-card {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
        .service-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }
        .service-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .service-text {
            font-size: 1rem;
            color: #555;
        }
        .line-height-30{
            line-height: 30px;
        }

        .second-life-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 80px 0;
        }
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .content-image {
            flex: 1;
            text-align: center;
        }
        .content-image img {
            max-width: 90%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .content-text {
            flex: 1;
            padding: 20px;
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .section-desc {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .feature-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }
        .feature-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .cta-section {
            text-align: center;
            margin-top: 50px;
        }
        .cta-btn {
            background: #007bff;
            color: #fff;
            padding: 12px 25px;
            font-size: 1.2rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease-in-out;
        }
        .cta-btn:hover {
            background: #0056b3;
        }
        .bg-header {
            position: relative;
            width: 100%;
            height: 100vh; /* Make the height full-screen */
            overflow: hidden;
        }

        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Make the video cover the entire container */
            z-index: -1; /* Send the video behind other content */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.5; /* Add a black overlay with opacity */
            z-index: 0;
        }

        header .container {
        .carousel-inner {
            height: 600px; /* Set fixed height */
        }

        .carousel-item {
            height: 100%; /* Ensure each slide takes full height */
        }

        .carousel-item img,
        .carousel-item video {
            height: 100%;
            width: 100%;
            object-fit: cover; /* Crop and fit the video within the container */
        }
  </style>
  <!-- CSS for Dark Overlay -->
<style>
/* Banner Styling */
.welcome-banner {
    position: absolute;
    top: 0; 
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    background: rgba(0, 0, 0, 0.7);  Semi-transparent background 
    color: white;
    text-align: center;
    padding: 15px 20px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 0px;
    z-index: 10;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
.welcome-banner2 {
    position: absolute;
    top: 60px; 
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    background: rgba(59, 59, 59, 0.7);  Semi-transparent background 
    color: white;
    text-align: center;
    padding: 15px 20px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 0px;
    z-index: 10;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
.welcome-banner3 {
    position: absolute;
    top:0; 
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    background: rgba(99, 99, 99, 0.7);  Semi-transparent background 
    color: white;
    text-align: center;
    padding: 15px 20px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 0px;
    z-index: 10;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
.brand-logo {
    position: absolute;
    top: 100px; /* Adjust to be below the banner */
    left: 10px;
    /*transform: translateX(-50%);*/
    z-index: 15; /* Higher than the video, but lower than the banner */
}

.welcome-banner4 {
    position: absolute;
    top: 110px; 
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    background: rgba(34, 34, 34, 0.7);  Semi-transparent background 
    color: white;
    text-align: center;
    padding: 15px 20px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 0px;
    z-index: 10;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
/*.banner-container {
    width: 100%;
    overflow: hidden;
    color: white;
    padding: 10px 0;
    position: relative;
    white-space: nowrap;
    background: rgba(0, 0, 0, 0.7); 
}*/
.scrolling-text {
    display: inline-block;
    white-space: nowrap;
    animation: scrollText 25s linear infinite; /* Slow speed */
}

@keyframes scrollText {
    from {
        transform: translateX(40%);
    }
    to {
        transform: translateX(-100%);
    }
}
/*.welcome-banner p{max-width: 1000px;margin: 0 auto;}*/
/* Fade-in effect */
.fade-in {
    opacity: 1 !important;
}

/* Fade-out effect */
.fade-out {
    opacity: 0 !important;
}

/* Ensure the carousel container is positioned relative */
#promoCarousel {
    position: relative;
}
/* .divider {
    width: 2px;
    height: 75px;
    background-color: #F7E04B;
    transform: skewX(-20deg);
} */
.withsep::after {
    content: "";
    display: inline-block;
    width: 2px;
    height: 95px;
    background-color: #F7E04B;
    transform: skewX(-20deg);
    margin-left: 10px; /* Adjust as needed */
    vertical-align: middle; /* Ensures proper alignment */
}
.fs-12{
    font-size: 12px;
}

</style>
  <body>
    <!-- header -->
    <?php require_once('navbar.php') ?>
   
 
<!-- Bootstrap Carousel -->
<div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Welcome Banner (Fixed on Top of Every Slide) -->
    <div id="welcomeBanner" class="welcome-banner3 banner-container fade-in">
        <!-- <h1 class="fw-bold text-white">Welcome to Solidforge</h1> -->
        <p class="lead text-white scrolling-text mt-2">
           <b>Welcome to Solidforge:</b> Your go-to source for premium 3D printers, polishing solutions, and 3D software. 
            Whether you're a manufacturer, designer, or innovator, we have the tools to help bring 
            your ideas to life with precision and quality.
        </p>
    </div>
    <div class="brand-logo" id="brandLogo">
        <img src="https://flashforge.com/cdn/shop/files/1.png?v=1715335973&width=350" width="250" height="35" alt="brand logo">
    </div>




    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <!-- First Slide -->
        <!-- <div class="carousel-item active">
            <img src="images/industrymachine.jpg" class="d-block w-100" alt="Dummy Banner">
        </div> -->

        <!-- Second Slide (Promotional Video 1) -->
        <div class="carousel-item active" data-bs-slide-to="0">
            <video class="d-block w-100" autoplay muted loop>
                <source src="images/promotion1.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Third Slide (Promotional Video 2) -->
        <div class="carousel-item" data-bs-slide-to="1">
            <video class="d-block w-100" autoplay muted loop>
                <source src="images/promotion2.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


   

    <!-- Manufacturing cards -->
    <!-- <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto py-5">
                <h2 class="mb-5 font-1">Why Additive Manufacturing?</h2>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-6 mx-auto d-flex justify-content-between">
                                <img src="images/icon-1.png" data-aos="flip-left" data-aos-duration="2000" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-1">Reduce Assembly Time</h5>
                                <p class="card-text">Don’t waste time putting products together! Rely on 3D printing to make complex geometries that can be printed as one piece—or consolidated in one build.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-6 mx-auto d-flex justify-content-between">
                                <img src="images/icon-2.png" data-aos="flip-left" data-aos-duration="2000" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-1">Reduce Assembly Time</h5>
                                <p class="card-text">Don’t waste time putting products together! Rely on 3D printing to make complex geometries that can be printed as one piece—or consolidated in one build.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-6 mx-auto d-flex justify-content-between">
                                <img src="images/icon-3.png" data-aos="flip-left" data-aos-duration="2000" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-1">Reduce Assembly Time</h5>
                                <p class="card-text">Don’t waste time putting products together! Rely on 3D printing to make complex geometries that can be printed as one piece—or consolidated in one build.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Rates section -->
    <div class="container-fluid px-0 bg-grey" data-aos="fade" data-aos-duration="1500">
        <div class="col-9 mx-auto">
        <div class="row">
                <div class="col-12 col-lg-3 my-3 position-relative pt-5 pb-4 ps-4">
                    <div class="withsep text-white d-flex justify-content-between">
                        <div class="text-center w-100">
                            <h3 class="font-1 fs-1 fw-semibold mb-1 text-yellow">Jewellery 
                            </h3>
                            <p class="text-yellow fs-12 px-3">Technology that brings your designs to life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 my-3 position-relative pt-5 pb-4 ps-4">
                    <div class="withsep text-white d-flex justify-content-between">
                        <div class="text-center w-100">
                            <h3 class="font-1 fs-1 fw-semibold mb-1 text-yellow">Defense
                            </h3>
                            <p class="text-yellow fs-12 px-3">High-performance solutions for defense applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 my-3 position-relative pt-5 pb-4 ps-4">
                    <div class="withsep text-white d-flex justify-content-between">
                        <div class="text-center w-100 pe-2">
                            <h3 class="font-1 fs-1 fw-semibold mb-1 text-yellow">Dental
                            </h3>
                            <p class="text-yellow fs-12 px-3">Innovate and excel in precision dental solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 my-3 position-relative pt-5 pb-4 ps-4">
                    <div class="withsep text-white d-flex justify-content-between">
                        <div class="text-center w-100">
                            <h3 class="font-1 fs-1 fw-semibold mb-1 text-yellow">Health
                            </h3>
                            <p class="text-yellow fs-12 px-3">Advancing personalized patient care</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Cutting cards -->
    <!-- <div class="container-fluid pt-5 pb-3 bg-body-secondary">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto py-5">
                <h2 class=" font-1">Flashforge Brand</h2>
                <p>Products 3D Printers:</p>
                <div class="row">
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="images/waxjet 510.35.png" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-1">Flashforge 510</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="images/product-2.webp" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-1">Flashforge 400</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="images/product-3.webp" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-1">Flashforge Material Wax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="images/products-4.webp" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-1">Flashforge Software WaxJetPrint</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Our Services cards -->
    <!-- <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto py-5">
                <h2 class="mb-5 font-1">Solidscape Brand</h2>
                <p>Products 3D Printers: </p>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape S3Duo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="Solidscape S325">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape S325</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="Solidscape Muse">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape Muse</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="Solidscape Muse Plus">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape Muse Plus</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="Solidscape Material Midas">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape Material Midas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="Solidscape Material Melt">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape Material Melt</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/product-5.avif" class="w-100" alt="Solidscape Software ModelWorks">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">Solidscape Software ModelWorks</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container-fluid pt-5 pb-3 bg-body-secondary">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto py-5">
                <h2 class=" font-1">GPA INNOVA Brand</h2>
                <div class="row">
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="MURUA Gold">
                            <div class="card-body">
                                <h5 class="card-title font-1">MURUA Gold</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="MURUA Silver">
                            <div class="card-body">
                                <h5 class="card-title font-1">MURUA Silver</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="MURUA Universal">
                            <div class="card-body">
                                <h5 class="card-title font-1">MURUA Universal</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3">
                        <div class="card border-0">
                            <img src="" data-aos="zoom-in" data-aos-duration="2000" class="card-img-top h-50" height="100px" alt="PRO 10 Platinum">
                            <div class="card-body">
                                <h5 class="card-title font-1">PRO 10 Platinum</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Materials cards -->
    <!-- <div class="container-fluid py-5">
        <div class="row">
            <div class="col-11 mx-auto py-5">
                    <h2 class=" font-1">Hispana Brand</h2>
                    <p>Polishing Machine:</p>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="" class="w-100" alt="GPG-10">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">GPG-10</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="" class="w-100" alt="EN-34">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">EN-34</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="" class="w-100" alt="EN-44">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">EN-44</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="" class="w-100" alt="EN-442">
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title font-1">EN-442</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

   

    

    <!-- Testimonials cards -->
    <div class="container-fluid pt-5 pb-3 bg-body-secondary d-none" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col-12 col-lg-11 mx-auto py-5">
                <h2 class=" font-1">Testimonials</h2>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card border-0">
                            <div class="p-5">
                                <div class="col-2 pb-4">
                                    <img src="images/icon-quote.svg" class="card-img-top w-75" alt="...">
                                </div>
                                <p>I like the ease of use in the SolidForge platform, being able to 3D print on-demand orders for the first time, and most of all–being able to scale my business. In the beginning years ago I basically had the change in my pocket and a credit line at my bank so I couldn’t order a ton of things, and you never know what’s going to sell.”</p>
                                <div class="py-4">
                                    <h6 class="card-title fw-semibold text-uppercase">Steven Jaworski</h6>
                                    <p>Owner | Voytek Medical</p>
                                </div>
                                <div class="col-6">
                                    <img src="images/testimonials-voytek-2x.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0">
                            <div class="p-5">
                                <div class="col-2 pb-4">
                                    <img src="images/icon-quote.svg" class="card-img-top w-75" alt="...">
                                </div>
                                <p>I like the ease of use in the SolidForge platform, being able to 3D print on-demand orders for the first time, and most of all–being able to scale my business. In the beginning years ago I basically had the change in my pocket and a credit line at my bank so I couldn’t order a ton of things, and you never know what’s going to sell.”</p>
                                <div class="py-4">
                                    <h6 class="card-title fw-semibold text-uppercase">Steven Jaworski</h6>
                                    <p>Owner | Voytek Medical</p>
                                </div>
                                <div class="col-6">
                                    <img src="images/testimonials-voytek-2x.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0">
                            <div class="p-5">
                                <div class="col-2 pb-4">
                                    <img src="images/icon-quote.svg" class="card-img-top w-75" alt="...">
                                </div>
                                <p>I like the ease of use in the SolidForge platform, being able to 3D print on-demand orders for the first time, and most of all–being able to scale my business. In the beginning years ago I basically had the change in my pocket and a credit line at my bank so I couldn’t order a ton of things, and you never know what’s going to sell.”</p>
                                <div class="py-4">
                                    <h6 class="card-title fw-semibold text-uppercase">Steven Jaworski</h6>
                                    <p>Owner | Voytek Medical</p>
                                </div>
                                <div class="col-6">
                                    <img src="images/testimonials-voytek-2x.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Materials cards -->
    <div class="container-fluid py-5" data-aos="fade-out" data-aos-duration="1500">
        <div class="row">
            <div class="col-11 mx-auto py-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h2 class=" font-1" id="products">Products</h2>
                    <a href="index.php" class="btn btn-warning">View All Products</a>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/cropped-jewellery.jpg" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body px-0">
                                <h6 class="card-title">Bringing SolidForge home, and welcoming Thangs — Marleen Vogelaar and Jules Witte explain more about how and why</h6>
                                <p class="icon-link icon-link-hover mt-3">
                                    Jewellery Manufactuing 
                                    <svg class="bi" aria-hidden="true" viewBox="0 -6.5 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>right-arrow</title> <desc>Created with Sketch.</desc> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-212.000000, -159.000000)" fill="#252528" fill-rule="nonzero"> <g id="square-filled" transform="translate(50.000000, 120.000000)"> <path d="M187.108012,39.2902857 L197.649804,49.7417043 L197.708994,49.7959169 C197.889141,49.9745543 197.986143,50.2044182 198,50.4382227 L198,50.5617773 C197.986143,50.7955818 197.889141,51.0254457 197.708994,51.2040831 L197.6571,51.2479803 L187.108012,61.7097143 C186.717694,62.0967619 186.084865,62.0967619 185.694547,61.7097143 C185.30423,61.3226668 185.30423,60.6951387 185.694547,60.3080911 L194.702666,51.3738496 L162.99947,51.3746291 C162.447478,51.3746291 162,50.9308997 162,50.3835318 C162,49.8361639 162.447478,49.3924345 162.99947,49.3924345 L194.46779,49.3916551 L185.694547,40.6919089 C185.30423,40.3048613 185.30423,39.6773332 185.694547,39.2902857 C186.084865,38.9032381 186.717694,38.9032381 187.108012,39.2902857 Z M197.115357,50.382693 L186.401279,61.0089027 L197.002151,50.5002046 L197.002252,50.4963719 L196.943142,50.442585 L196.882737,50.382693 L197.115357,50.382693 Z" id="right-arrow"> </path> </g> </g> </g> </g></svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/weapon.jpg" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body px-0">
                                <h6 class="card-title">Bringing SolidForge home, and welcoming Thangs — Marleen Vogelaar and Jules Witte explain more about how and why</h6>
                                <p class="icon-link icon-link-hover mt-3">
                                    Defense Tools Manufacturing 
                                    <svg class="bi" aria-hidden="true" viewBox="0 -6.5 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>right-arrow</title> <desc>Created with Sketch.</desc> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-212.000000, -159.000000)" fill="#252528" fill-rule="nonzero"> <g id="square-filled" transform="translate(50.000000, 120.000000)"> <path d="M187.108012,39.2902857 L197.649804,49.7417043 L197.708994,49.7959169 C197.889141,49.9745543 197.986143,50.2044182 198,50.4382227 L198,50.5617773 C197.986143,50.7955818 197.889141,51.0254457 197.708994,51.2040831 L197.6571,51.2479803 L187.108012,61.7097143 C186.717694,62.0967619 186.084865,62.0967619 185.694547,61.7097143 C185.30423,61.3226668 185.30423,60.6951387 185.694547,60.3080911 L194.702666,51.3738496 L162.99947,51.3746291 C162.447478,51.3746291 162,50.9308997 162,50.3835318 C162,49.8361639 162.447478,49.3924345 162.99947,49.3924345 L194.46779,49.3916551 L185.694547,40.6919089 C185.30423,40.3048613 185.30423,39.6773332 185.694547,39.2902857 C186.084865,38.9032381 186.717694,38.9032381 187.108012,39.2902857 Z M197.115357,50.382693 L186.401279,61.0089027 L197.002151,50.5002046 L197.002252,50.4963719 L196.943142,50.442585 L196.882737,50.382693 L197.115357,50.382693 Z" id="right-arrow"> </path> </g> </g> </g> </g></svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/dental.jpg" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body px-0">
                                <h6 class="card-title">Bringing SolidForge home, and welcoming Thangs — Marleen Vogelaar and Jules Witte explain more about how and why</h6>
                                <p class="icon-link icon-link-hover mt-3">
                                    Dental Instruments Manufacting 
                                    <svg class="bi" aria-hidden="true" viewBox="0 -6.5 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>right-arrow</title> <desc>Created with Sketch.</desc> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-212.000000, -159.000000)" fill="#252528" fill-rule="nonzero"> <g id="square-filled" transform="translate(50.000000, 120.000000)"> <path d="M187.108012,39.2902857 L197.649804,49.7417043 L197.708994,49.7959169 C197.889141,49.9745543 197.986143,50.2044182 198,50.4382227 L198,50.5617773 C197.986143,50.7955818 197.889141,51.0254457 197.708994,51.2040831 L197.6571,51.2479803 L187.108012,61.7097143 C186.717694,62.0967619 186.084865,62.0967619 185.694547,61.7097143 C185.30423,61.3226668 185.30423,60.6951387 185.694547,60.3080911 L194.702666,51.3738496 L162.99947,51.3746291 C162.447478,51.3746291 162,50.9308997 162,50.3835318 C162,49.8361639 162.447478,49.3924345 162.99947,49.3924345 L194.46779,49.3916551 L185.694547,40.6919089 C185.30423,40.3048613 185.30423,39.6773332 185.694547,39.2902857 C186.084865,38.9032381 186.717694,38.9032381 187.108012,39.2902857 Z M197.115357,50.382693 L186.401279,61.0089027 L197.002151,50.5002046 L197.002252,50.4963719 L196.943142,50.442585 L196.882737,50.382693 L197.115357,50.382693 Z" id="right-arrow"> </path> </g> </g> </g> </g></svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-bottom border-0 rounded-0">
                            <div class="col-12 mx-auto d-flex justify-content-between">
                                <img src="images/health.jpg" class="w-100" alt="icon-1">
                            </div>
                            <div class="card-body px-0">
                                <h6 class="card-title">Bringing SolidForge home, and welcoming Thangs — Marleen Vogelaar and Jules Witte explain more about how and why</h6>
                                <p class="icon-link icon-link-hover mt-3">
                                    Health Machinery Manifacturing
                                    <svg class="bi" aria-hidden="true" viewBox="0 -6.5 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>right-arrow</title> <desc>Created with Sketch.</desc> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-212.000000, -159.000000)" fill="#252528" fill-rule="nonzero"> <g id="square-filled" transform="translate(50.000000, 120.000000)"> <path d="M187.108012,39.2902857 L197.649804,49.7417043 L197.708994,49.7959169 C197.889141,49.9745543 197.986143,50.2044182 198,50.4382227 L198,50.5617773 C197.986143,50.7955818 197.889141,51.0254457 197.708994,51.2040831 L197.6571,51.2479803 L187.108012,61.7097143 C186.717694,62.0967619 186.084865,62.0967619 185.694547,61.7097143 C185.30423,61.3226668 185.30423,60.6951387 185.694547,60.3080911 L194.702666,51.3738496 L162.99947,51.3746291 C162.447478,51.3746291 162,50.9308997 162,50.3835318 C162,49.8361639 162.447478,49.3924345 162.99947,49.3924345 L194.46779,49.3916551 L185.694547,40.6919089 C185.30423,40.3048613 185.30423,39.6773332 185.694547,39.2902857 C186.084865,38.9032381 186.717694,38.9032381 187.108012,39.2902857 Z M197.115357,50.382693 L186.401279,61.0089027 L197.002151,50.5002046 L197.002252,50.4963719 L196.943142,50.442585 L196.882737,50.382693 L197.115357,50.382693 Z" id="right-arrow"> </path> </g> </g> </g> </g></svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('footer.php') ?>
  </body>
</html>
<script>
// document.addEventListener("DOMContentLoaded", function () {
//     const banner = document.getElementById("welcomeBanner");

//     function toggleBanner() {
//         banner.classList.add("fade-in");
//         setTimeout(() => {
//             banner.classList.remove("fade-in");
//             banner.classList.add("fade-out");
//             setTimeout(() => {
//                 banner.classList.remove("fade-out");
//             }, 2000);
//         }, 4000);
//     }

//     setInterval(toggleBanner, 7000);
//     toggleBanner();
// });
document.addEventListener("DOMContentLoaded", function () {
    const logos = [
        {
            src: "https://flashforge.com/cdn/shop/files/1.png?v=1715335973&width=350",
            width: 250,
            height: 35
        },
        {
            src: "https://solidscape.com/wp-content/uploads/2025/01/solidscape-black.png",
            width: 145, // Set a different width for the second logo
            height: 30  // Set a different height for the second logo
        }
    ];

    const brandLogo = document.querySelector(".brand-logo img"); // Get logo element
    const carousel = document.getElementById("promoCarousel");

    carousel.addEventListener("slide.bs.carousel", function (event) {
        const nextIndex = event.relatedTarget.getAttribute("data-bs-slide-to"); // Get the index of the next slide
        if (logos[nextIndex]) {
            brandLogo.src = logos[nextIndex].src;
            brandLogo.width = logos[nextIndex].width;
            brandLogo.height = logos[nextIndex].height;
        }
    });
});



</script>