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
    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dropdown.css">
  </head>
  <style>
    .quotebtn:hover{background-color:#F5DD4C; }
     .sectioncontent{
        background-image: url(images/about-banner.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /*background: linear-gradient(to bottom, #121212, #333333);*/
        font-family: Arial, sans-serif;
        background-attachment: fixed;
    }
     nav{background-color: #000;}
   
    .btn:hover svg {
        fill: #000000; /* Hover color */
    }
    .bg-silver{background-color: #949597; color: #fff;border: none;}
    .line-height-30{
        line-height: 30px;
    }
     /* .bg-header{
        background-image: url(images/bg-new.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /*background: linear-gradient(to bottom, #121212, #333333);*/
        color: white;
        font-family: Arial, sans-serif;
        background-size: 100% 100%;
        height: 100vh;
    } */
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
    .withsep::after {
        content: "";
        width: 25px;
        position: absolute;
        height: 72px;
        right: 0;
        top: 33%;
        background: url(images/line-1-0-2-1.png) no-repeat;
    }
    .bg-silver{background-color: #949597; color: #fff;border: none;}
    .bg-yellow{background-color: #F5DD4C;}
    .quotebtn:hover{background-color:#F5DD4C; }
    .border-yellow,.border-start{border-color: #F5DD4C !important;}
    .text-yellow{color: #F5DD4C;}
     /* Ensure dropdown alignment */
        .dropdown-menu {
            min-width: 250px;
        }

        /* Submenu positioning */
        .dropdown-submenu {
            position: relative;
        }

        /* Default: Submenu opens to the right */
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
            display: none;
            position: absolute;
        }

        /* Right arrow for submenu indication */
        .dropdown-submenu > a::after {
            content: " ►"; /* Right arrow */
            float: right;
            font-size: 12px;
        }

        /* On mobile, submenu opens downward instead of right */
        @media (max-width: 991px) {
            .dropdown-submenu .dropdown-menu {
                left: 0;
                position: relative;
            }

            /* Change arrow direction to ▼ for mobile */
            .dropdown-submenu > a::after {
                content: " ▼"; /* Downward arrow */
            }
        }

        .training-section {
            /*background: linear-gradient(135deg, #f8f9fa, #e9ecef);*/
            background-color: #636363;
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
            position: relative;
            z-index: 1; /* Bring the header content above the video and overlay */
        }
        .navbar{background: #000;}
  </style>
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
    <section class="training-section" id="installtion">
        <div class="container">
            <div class="training-content">
                <h2 class="training-title">Solidforge Installation & Training Services</h2>
                <p class="training-desc">
                    Solidforge is committed to providing end-to-end support through our professional Installation and Training Services, 
                    designed to ensure a seamless transition into the world of 3D printing.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 d-flex">
                    <div class="service-card p-4">
                        <h4 class="service-title"><i class="fas fa-cogs service-icon"></i> Installation & Setup</h4>
                        <p class="service-text">
                            Every machine is set up to be fully operational and tailored to meet your specific business or project requirements. 
                            We handle everything from unpacking to full system calibration, ensuring a hassle-free start.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="service-card p-4">
                        <h4 class="service-title"><i class="fas fa-user-graduate service-icon"></i> Expert Training</h4>
                        <p class="service-text">
                            Beyond installation, our comprehensive training programs are customized for different skill levels, 
                            offering both on-site and remote sessions covering essential topics like operation, maintenance, and troubleshooting.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-md-6 d-flex">
                    <div class="service-card p-4">
                        <h4 class="service-title"><i class="fas fa-tools service-icon"></i> Machine Operation</h4>
                        <p class="service-text">
                            Our training sessions cover everything from basic controls to advanced 3D printing techniques. 
                            Whether you're a beginner or an expert, we ensure you're fully equipped with the knowledge to maximize efficiency.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="service-card p-4">
                        <h4 class="service-title"><i class="fas fa-layer-group service-icon"></i> Software</h4>
                        <p class="service-text">
                            Learn how to optimize print quality with the right software settings. 
                            We guide you through best practices to minimize waste and maximize results.
                        </p>
                    </div>
                </div>
            </div>

            <div class="training-content mt-5">
                <p class="training-desc fw-semibold">
                    Whether you are a beginner looking to build foundational skills or an experienced user seeking to refine your techniques, 
                    Solidforge equips your team with the knowledge and confidence needed to fully leverage your 3D printing technology.
                </p>
                <p class="training-desc">
                    Our goal is to empower you to maximize productivity, minimize downtime, and achieve the best possible results from your investment.
                </p>
            </div>
        </div>
    </section>
     <!-- footer -->
     <?php require_once('footer.php') ?>

    

  </body>
  </html>