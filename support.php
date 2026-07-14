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
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 80px 0;
        }
        #support{background-color: #eab510;}
        .text-grey{color:#3b3b3b;}
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
          .hero {
            background-color: #F3c533;
            color: #3b3b3b;
            padding: 60px 20px;
            text-align: center;
        }
        body{background-color: #F3c533;}
        .service-box {
            background: #949597;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            color: #fff;
            transition: transform 0.3s ease-in-out;
        }
        .service-box:hover {
            transform: translateY(-5px);
        }
        .quote {
            font-style: italic;
            font-size: 1.2rem;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
         @media (min-width: 1200px) {
            .text-lg-nowrap {
                white-space: nowrap;
            }
        }
  </style>
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
       <header class="hero">
        <h1>Solidforge Support</h1>
        <p class="lead fw-semibold">Comprehensive After-Sales Services to Keep Your Operations Running Smoothly</p>
    </header>

    <div class="container supportbody">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="service-box text-center p-4 d-flex flex-column h-100">
                    <h4 class="text-lg-nowrap">Preventive Maintenance</h4>
                    <p class="fw-semibold">Keep your equipment operating at peak performance with routine maintenance plans, reducing the risk of breakdowns and extending lifespan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-box text-center p-4 d-flex flex-column h-100">
                    <h4>Repair Services</h4>
                    <p class="fw-semibold">Fast and reliable repairs using original parts to ensure optimal functionality and maintain the integrity of your equipment.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-box text-center p-4 d-flex flex-column h-100">
                    <h4>Immediate Assistance</h4>
                    <p class="fw-semibold">Get instant support through online troubleshooting, software updates, and operational guidance to minimize downtime.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-box text-center p-4 d-flex flex-column h-100">
                    <h4>On-Site Support</h4>
                    <p class="fw-semibold">Skilled professionals dispatched to your location for complex issues, detailed diagnostics, and effective solutions.</p>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <p class="fw-semibold">At Solidforge, we are committed to empowering you with expert support to maximize productivity, minimize downtime, and achieve the best results from your investment.</p>
            <p class="quote">“Nobody cares how much you know, until they know how much you care.”<br>— Theodore Roosevelt</p>
        </div>
    </div>
     <!-- support section -->
     <!-- <div class="container-fluid pb-5" id="support" data-aos="zoom-in" data-aos-duration="1500">
        <div class="col-9 mx-auto pt-5">
            <h2 class="text-grey fw-semibold text-center mb-5">Solidforge After-Sales, Preventive Maintenance, Repair, Online Support, and On-Site Support Services</h2>
            <p class="text-grey line-height-30 fw-semibold">At Solidforge, our commitment to customer satisfaction extends well beyond the initial purchase through our comprehensive After-Sales Services. We offer proactive Preventive Maintenance plans designed to keep your 3D printing equipment operating at peak performance, minimizing the risk of unexpected breakdowns and extending the lifespan of your machines. In the event of technical issues, our Repair Services provide fast and reliable solutions, using original parts to ensure optimal functionality and maintain the integrity of your equipment. For immediate assistance, our Online Support is readily available to guide you through troubleshooting steps, software updates, and operational queries, ensuring minimal downtime. When more hands-on attention is needed, we offer On-Site Support, dispatching skilled professionals to your location to address complex issues, perform detailed diagnostics, and implement effective solutions. Whether you need routine maintenance, urgent repairs, or expert guidance, Solidforge is dedicated to providing the technical support and resources necessary to keep your operations running smoothly and efficiently.</p>
            <p class="text-grey fw-semibold line-height-30">At Solidforge, we follow rigorous training at our partners to stay on top of the technology we represent, ensuring we are always one step ahead of the challenges that might arise. Our goal is to empower you to maximize productivity, minimize downtime, and achieve the best possible results from your investment.</p>
        </div>
    </div> -->
     <!-- footer -->
     <?php require_once('footer.php') ?>

    

  </body>
  </html>