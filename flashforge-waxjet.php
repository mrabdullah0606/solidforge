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

        

        header .container {
            position: relative;
            z-index: 1; /* Bring the header content above the video and overlay */
        }
        .navbar{background: #000;}
           .circle-item {
      position: relative;
      padding-left: 30px;
      margin-bottom: 15px;
    }

    .circle-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 10px;
      height: 10px;
      border: 2px solid blue;
      border-radius: 50%;
    }

    @media (max-width: 576px) {
      h1, h2, h3, h4, p {
        font-size: calc(1rem + 0.5vw) !important;
      }

      .fs-1, .fs-2, .fs-3, .fs-4, .fs-5 {
        font-size: calc(0.9rem + 0.5vw) !important;
      }

      .btn {
        font-size: 0.9rem !important;
        padding: 0.75rem 1rem !important;
      }

      .container {
        padding-left: 1rem;
        padding-right: 1rem;
      }

      .circle-item {
        font-size: 1rem !important;
      }
    }
  </style>
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
   <!-- Section 1 -->
  <div class="d-flex align-items-center" style="background: url('images/page2.png') no-repeat center center / cover; height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2 class="fw-bold text-white mb-1 fs-1 fs-md-2">WaxJetPrint</h2>
          <p class="text-white mb-4 fs-3 fs-md-4">An all-in-one software suitable for additive manufacturing</p>
          <div class="d-grid gap-2">
            <a href="#" class="btn btn-outline-light py-3 px-2 fs-5 rounded-5 w-75">Windows Download</a>
            <a href="#" class="btn btn-outline-light py-3 px-3 fs-5 rounded-5">Operating Training Video</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2 -->
  <div style="background: url('images/page2(1).png') no-repeat center center / cover; min-height: 100vh;">
    <div class="container min-vh-100 pt-5">
      <div class="text-center w-100">
        <h1 class="fw-bold mb-5 text-white fs-3 fs-md-2">Fully-automatic Equipment Connection<br />and Configuration</h1>
        <div class="row g-4 justify-content-center">
          <div class="col-md-4">
            <div class="bg-transparent text-white p-4 rounded shadow text-center">
              <div class="mb-3"><img src="images/icon1.png" alt="Icon" class="w-25" /></div>
              <h4>One-stop setting of processing parameters</h4>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-transparent text-white p-4 rounded shadow text-center">
              <div class="mb-3"><img src="images/iconpath.png" alt="Icon" class="w-25" /></div>
              <h4>Real-time equipment status check</h4>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-transparent text-white p-4 rounded shadow text-center">
              <div class="mb-3">
                <i class="bi bi-pencil-square fs-1"></i>
                <img src="images/icon2.png" alt="Icon" class="w-25" />
              </div>
              <h4>Equipment name customizable</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 3 -->
  <div class="d-flex align-items-center" style="background-image: url('images/page2(2).png'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-white">
          <h1 class="fw-bold mb-4 fs-3 fs-md-2">Diagnosis and Restoration for<br />Jewelry Designs</h1>
          <ul class="list-unstyled fs-4 fs-md-5">
            <li class="circle-item">Automatic analysis</li>
            <li class="circle-item">Manual editing functions</li>
            <li class="circle-item">Automatically identify the locations of various defects</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 4 -->
  <div class="d-flex align-items-center" style="background-image: url('images/page2(3).png'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 text-black" >
          <h1 class="fw-bold mb-4 fs-3 fs-md-2">Powerful AI stacking and layout<br />ability saving time and effort</h1>
          <ul class="list-unstyled fs-4 fs-md-5">
            <li class="circle-item">Place models as selected</li>
            <li class="circle-item">Efficient 3D stacking of models</li>
            <li class="circle-item">AI iterative algorithms</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 5 -->
  <div class="d-flex align-items-center" style="background-image: url('images/page2(4).png'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-white">
          <h1 class="fw-bold mb-4 fs-3 fs-md-2">Production scheduling and<br />reporting system improving<br />data-driven business growth</h1>
          <ul class="list-unstyled fs-5 fs-md-6">
            <li class="circle-item">Real-time query of current scheduling and completion records</li>
            <li class="circle-item">One-click access to production reports</li>
            <li class="circle-item">Production records within half a year can be checked by time period</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 6 (Final CTA) -->
  <div class="d-flex align-items-center" style="background-image: url('images/page2(5).png'); background-size: cover; background-position: center; height: 70vh;">
    <div class="container text-center gap-6">
      <h1 class="text-white fw-bold mb-5 fs-3 fs-md-2" style="margin-top: -50px;">Digital Mass Production Workshop<br />Solution for Jewelry</h1>
      <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-4 mb-3">
          <a href="#" class="btn btn-outline-light py-3 px-5 fs-5 rounded-5 w-100">Jewelry Industry</a>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <a href="#" class="btn btn-outline-light py-3 px-5 fs-5 rounded-5 w-100">Waxjet-510</a>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <a href="#" class="btn btn-outline-light py-3 px-5 fs-5 rounded-5 w-100">Waxjet400</a>
        </div>
      </div>
    </div>
  </div>
     <!-- footer -->
     <?php require_once('footer.php') ?>

    

  </body>
  </html>