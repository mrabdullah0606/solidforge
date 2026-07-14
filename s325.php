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

        .spec-table , .spec-table td {
      background-color: #2a2a2a;
      color: white;
      vertical-align: middle;
      border-color:white;
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


        .navbar{background: #000;}
  </style>
  <!-- <body> -->
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->

     <div class="container-fluid">
    <div class="row mx-0 justify-content-center">
<div class="col-12">
  <h1 class="hero-title display-1 fw-bold text-center mt-4 mb-2">S3<span class="text-dark">25</span></h1>
  <p class="hero-subtitle fw-bold text-center mb-4 fs-2">Built for jewelry manufacturing</p>
</div>

<div class="col-12 col-md-10 col-lg-8 mx-auto">
  <img src="images\solidscape-printer-s325.avif" alt="S3Duo" class="img-fluid my-4">
</div>


<div class="col-12 d-flex justify-content-center flex-wrap gap-4 py-4">
  <button class="btn btn-dark btn-sm px-5 py-2">Explore S325</button>
  <button class="btn btn-outline-dark btn-sm px-5 py-2">Specifications</button>
</div>
    </div>
  </div>

  <div class="container-fluid"style="background-color: black;">
  <div class="row mx-0 d-flex align-items-center justify-content-center" style="height: 70vh;">
  <div class="col-12 text-white text-center">
  <h1 class="fw-bold display-1">Design without <br> compromise.</h1>
  <p class="fs-2">Print with precision.</p>
</div>
  </div>
</div>
<div class="container-fluid p-0 overflow-hidden">
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="w-100">
    <source src="images\jewelry.mp4" type="video/mp4">  
  </video>


  <!-- Centered Text Overlay -->
  <!-- <div class="text-white text-center z-1">
    <h1 class="display-3 fw-bold">
    “With Solidscape I am getting exactly what I <br> need. <br>
    It’s precision everytime.”
    </h1>
    <p class="fs-4 mt-3">Thys, Master Jeweller, Nina’s Jewellery</p>
  </div> -->
    </div>

    <div class="container-fluid my-5">
  <div class=" mx-0 row gx-3 justify-content-center">
  
    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Microscopic Precision</h1>
          <p class="fs-5 mt-3">Pavé? No problem!
          Manufacture the most detailed jewelry masters and set stones with micron accuracy.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Speak to an solidscape Expert</button>
          <div class="mt-4">
        <img src="images\ring-2.png" alt="Modelworks Image" class="img-fluid rounded">
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
      <div class="mt-4" style="height: 280px;">
        <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
          <source src="images\Casting.mp4" type="video/mp4">
        </video>
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
          <div class="mt-4">
        <img src="images\ring-3.png" alt="Modelworks Image" class="img-fluid rounded">
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

<div class="container-fluid py-5" style="background-color: black;">
  <div class=" mx-0 row justify-content-center text-center text-white">
    <div class="col-lg-8">
      <h1 class="display-1 fw-bold">3D print in wax</h1>
      <p class="fs-4 mt-3">
      Remove the headache.  Follow the ancient old craft of investment casting in wax.
      </p>
    </div>
  </div>
</div>


<div class="container-fluid my-5">
  <div class=" mx-0 row gx-3 justify-content-center">
  
    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Drop-on-Demand™</h1>
          <p class="fs-5 mt-3">Millions of wax droplets positioned with the highest level of precision bringing you the sharpest and most accurate wax printed masters for investment casting.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Learn more</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images/Drop-on-Demand-2.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Non-toxic Materials</h1>
          <p class="fs-5 mt-3">The benefits of printing 100% wax.

Our materials can be handled glove-free for ease of processing and safe material handling.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore materials</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Casting.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Goodbye Supports!</h1>
          <p class="fs-5 mt-3">Wash away supports within minutes.
          Washable supports presents hands-free post processing and  allows for the finest of details to be printed without risk of damage.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore Materials</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images/non-toxic.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="py-5 text-center py-4" style="background-color: black; color:white;">
  <h2 class=" display-4 fw-bold mb-4">S325 Specs</h2>
  <div class="container">
    <div class="table-responsive">
    <table class="table border-top border-bottom spec-table">
        <thead>
          <tr class="spec-header">
          <th>Product specification</th>
          <th>S325</th>
         <th>S325+</th>
  </tr>
</thead>

        <tbody>
          <tr>
            <td>Layer thickness</td>
            <td>0.001 inch (0.0254 mm)</td>
            <td>0.0015 inch (0.038 mm)</td>
          </tr>
          <tr>
            <td>Build Size</td>
            <td>6 x 6 x 4 inches (152.4 x 152.4 x 101.6 mm)</td>
            <td></td>
          </tr>
          <tr>
            <td>Resolution</td>
            <td colspan="2">5000 X 5000 dots/inch (197 X 197 dots/mm) in X, Y</td>
          </tr>
          <tr>
            <td>Accuracy</td>
            <td colspan="2">±0.005 inch (127 μm) for 1st inch (25.4 mm), ±0.001 inch/inch (25.4 μm) each additional inch X,Y and Z</td>
          </tr>
          <tr>
            <td>Surface Finish</td>
            <td colspan="2">Layer thickness-dependent, up to 32 micro-inches (RMS)</td>
          </tr>
          <tr>
            <td>System Size</td>
            <td colspan="2">21.4 x 18 x 16 inches (558 x 495 x 419 mm)<br>Weight 80lbs (36 Kg)</td>
          </tr>
          <tr>
            <td>Power</td>
            <td colspan="2">100-120 V</td>
          </tr>
          <tr>
            <td>Operating Temperature</td>
            <td colspan="2">60° to 75°F (16° to 24°C)</td>
          </tr>
          <tr>
            <td>Humidity</td>
            <td colspan="2">40-60%</td>
          </tr>
          <tr>
            <td>File compatibility</td>
            <td colspan="2">Stl & Slc</td>
          </tr>
          <tr>
            <td>Warranty</td>
            <td colspan="2">12 months manufacturer’s warranty</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
 </div>
  </div>


  <div class="container py-4 d-flex flex-column justify-content-center align-items-center vh-80 text-center">
    <h1 class="display-3 fw-bold">
    Start 3D printing in wax today!
    </h1>

    <div class="col-12 d-flex justify-content-center flex-wrap gap-4 py-4">
      <button class="btn btn-dark btn-sm px-5 py-2">S325 Brochure</button>
      <button class="btn btn-outline-dark btn-sm px-5 py-2">Find a Reseller</button>
    </div>
  </div>




       <!-- footer -->
       <?php require_once('footer.php') ?>
  </body>
   </html>