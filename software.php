<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

    /* .product-image {
      max-width: 100%;
      height: auto;
    }
    .btn-custom {
      margin: 10px 5px;
    }

    .hero-title {
    font-size: 8rem; 
    font-weight: 700;
  }

  .hero-subtitle {
    font-size: 3rem; 
    font-weight: 600;
  } */

    .spec-table , .spec-table td {
      background-color: #2a2a2a;
      color: white;
      vertical-align: middle;
      border:white;
    }
    .spec-table td, .spec-table th {
    border-left: none !important;
    border-right: none !important;
  }
    .spec-table tr:hover td {
      background-color: #3a3a3a;
    }
    .spec-header {
      background-color: #c0c0c0;
      color: black;
    }
    .spec-header th {
  background-color: #B8B8B8;
  color: black;
}

.btn-light:hover {
    background-color: #B8B8B8;
    color: #000;
  }
  .hover-shadow:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

        .navbar{background: #000;}
  </style>
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
     <div class="container-fluid p-0">
  <div class="w-100 position-relative" style="height: 100vh; overflow: hidden;">
    <video class="w-100 h-100 object-fit-cover" autoplay muted loop>
      <source src="images/Modelworks-rotate.mp4" type="video/mp4">
    </video>
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">
      <h1 class="display-1 fw-bolder">Modelworks</h1>
      <p class="lead display-6 fw-bold">Simple print setup software</p>
      <p class="small fw-bold fs-5">* Modelworks update coming soon *</p>
      <button class="btn btn-light text-dark hover-shadow mt-3">Explore Modelworks</button>
    </div>
  </div>
</div>



<div class="container-fluid p-0 bg-black text-white py-4">
  <!-- First Section: Text Block -->
  <div class="d-flex flex-column justify-content-center align-items-center w-100" style="height: 50vh;">
    <h1 class="display-1 fw-bolder text-center">From design to print <br> in seconds</h1>
    <p class="lead text-center">Quickly set-up jobs for daytime or overnight printing.</p>
  </div>

  <!-- Second Section: Video Block -->
  <div class="d-flex justify-content-center align-items-center w-50" style="height: 70vh; margin: 0 auto;">
  <video class="w-100 h-100 object-fit-cover" autoplay muted loop>
    <source src="images\Modelworks-rotate-2.mp4" type="video/mp4">
  </video>
</div>
</div>

<div class="container-fluid py-4" style="background-color:#F0F0F0;">
<div class="container py-4 d-flex flex-column justify-content-center align-items-center vh-80 text-center">
    <h1 class="display-6 fw-semibold">
    “My designs are a true nightmare to support, and that is the most amazing thing about Solidscape. I am free to design what is in my head without fear of supports damaging the surfaces.“
    </h1>
    <p>T.S. Wittelsbach, House of Wittelsbach</p>
  </div>
  </div>


  <div class="container-fluid p-0 bg-dark text-white py-4">

  <div class="d-flex justify-content-center w-100 py-4">
    <h1 class="display-4 text-center">Computer Requirements</h1>
  </div>

  <div class="container mt-1">
    <div class="table-responsive">
      <table class="table table-bordered border-0 border-top w-50 mx-auto">
        <thead>
          <tr style="background-color:#F0F0F0;">
            <td><b>Processor:</b></td>
            <td>OpenGL 2.0 or later, 64 MB</td>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-light">
            <td><b>Memory:</b></td>
            <td>8 GB</td>
          </tr>
          <tr class="bg-white">
            <td><b>Graphics:</b></td>
            <td>OpenGL 2.0 or later, 64 MB</td>
          </tr>
          <tr class="bg-light">
            <td><b>Mouse:</b></td>
            <td>3 button with scroll wheel / trackpad recommended</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



<div class="container-fluid py-4" style="background-color:#F0F0F0;">
<div class="container py-4 d-flex flex-column justify-content-center text-black align-items-center vh-80 text-center">
    <h1 class="display-6 fw-bold">
    Modelworks is included for free with every Solidscape printer
    </h1>
    <p>Unlimited installations with all future updates included.</p>

    <div class="col-12 d-flex justify-content-center flex-wrap gap-4 py-4">
      <button class="btn btn-dark btn-sm px-5 py-2">Request More Option</button>
    </div>
  </div>
  </div>




      <!-- footer -->
  <?php require_once('footer.php') ?>
  </body>
   </html>