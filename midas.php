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
        @media (max-width: 768px) {
    .hero-title {
      font-size: 80px !important;
    }
  }

  @media (max-width: 480px) {
    .hero-title {
      font-size: 60px !important;
    }
  }

  @media (max-width: 360px) {
    .hero-title {
      font-size: 48px !important;
    }
  }

  @media (max-width: 320px) {
    .hero-title {
      font-size: 40px !important;
    }
  }
        
        .navbar{background: #000;}
  </style>
  <!-- <body> -->
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
     <!-- Limited Height Video Background Section -->
<div class="position-relative overflow-hidden" style="height: 140vh;">
  <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1" autoplay muted loop>
    <source src="images/Midas.mp4" type="video/mp4">
  </video>

  <div class="d-flex justify-content-center align-items-center h-100 text-black text-center flex-column">
  <h1 class="hero-title display-1 fw-bold text-center mt-4 mb-2" style="font-size:140px;">Midas</h1>


    <p class="fw-bold fs-2">3D Printable Casting Wax</p>
  </div>
</div>

  <div class="container-fluid py-5" style="background-color: black;">
  <div class=" mx-0 row justify-content-center text-center text-white">
    <div class="col-lg-8">
      <h1 class="display-1 fw-bold">Say yes to wax 3D printing!!</h1>
      <p class="fs-4 mt-3">
      3D print detail that will blow your mind.
      </p>
    </div>
  </div>
</div>

<div class="container-fluid my-5">
  <div class=" mx-0 row gx-3 justify-content-center">
  
    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Zero Expansion</h1>
          <p class="fs-5 mt-3">Print durable, true-to-CAD masters with zero warping, stretching or distortion. 
          Imagine that!</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Find Out More</button>
          <div class="mt-4" style="height: 280px;">
        <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
          <source src="images\Drop-on-Demand-2.mp4" type="video/mp4">
        </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
  <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
    <div>
      <h1 class="display-4 fw-bold">3D Print 100% Wax</h1>
      <p class="fs-5 mt-3">There’s nothing more to say other than we know you’d prefer to investment cast wax.  Wouldn’t you?</p>
    </div>
    <div class="mt-auto">
      <button class="btn btn-light btn-sm px-5 py-2 mb-3">Explore Materials</button>
      <div class="mt-4">
        <img src="images\midas-1.png" alt="Modelworks Image" class="img-fluid rounded">
      </div>
    </div>
  </div>
</div>


    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Featherlite detail</h1>
          <p class="fs-5 mt-3">Produce the most delicate details with ease thanks to our automatic support generator and washable supports.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore Materials</button>
          <div class="mt-4" style="height: 280px;">
        <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
          <source src="images\non-toxic.mp4" type="video/mp4">
        </video>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

<div class="container-fluid"style="background-color: black;">
  <div class="row mx-0 d-flex align-items-center justify-content-center" style="height: 50vh;">
  <div class="col-12 text-white text-center">
  <h1 class="fw-bold display-6">“We depend on Solidscape for our <br>highly detailed and delicate pieces.”</h1>
  <p class="fs-3">Sasha Primak, Sasha Primak Jewelry</p>
</div>
  </div>
</div>
<div class="container-fluid p-0 overflow-hidden position-relative" style="height: 100vh;">
  <img src="images/Solidscape-Midas.avif" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Midas Image">
  
  <!-- Overlay Text -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
    <h2 class="fw-bold display-3">A clean, crisp<br>ash-free burnout</h2>
    <p class="fs-5 mt-3">The benefits of printing<br>100% wax masters.</p>
  </div>
</div>


<div class="container-fluid py-4" style="background-color:#F0F0F0;">
<div class="container py-4 d-flex flex-column justify-content-center align-items-center vh-80 text-center">
    <h1 class="display-3 fw-bold">
    Get in touch!
    </h1>
    <p>Contact Solidscape or your local reseller today</p>

    <div class="col-12 d-flex justify-content-center flex-wrap gap-4 py-4">
      <button class="btn btn-dark btn-sm px-5 py-2">Speak to a solidscape expert</button>
      <button class="btn btn-outline-dark btn-sm px-5 py-2">Find your Reseller</button>
    </div>
  </div>
  </div>

  <!-- footer -->
  <?php require_once('footer.php') ?>
  </body>
   </html>