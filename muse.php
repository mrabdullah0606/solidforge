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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

<body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
     <div class="container-fluid" style="background-color:black;">
    <div class="row mx-0 justify-content-center">
<div class="col-12 col-md-10 col-lg-8 mx-auto">
  <img src="images\Solidscape-Muse-on-black-1920-72-small.avif" alt="S3Duo" class="img-fluid my-4">
</div>

<div class="col-12 col-md-8 col-lg-6 mx-auto">
  <img src="images\Muse-1536x330.avif" alt="S3Duo" class="img-fluid my-4">
</div>
<div class="col-12 d-flex justify-content-center flex-wrap gap-4 py-4">
<button class="btn btn-light btn-sm px-5 py-2 text-dark">Explore more</button>
<button class="btn btn-sm px-5 py-2 text-white border-white">Specifications</button>
</div>
<div class="col-12 text-white text-center py-5">
  <h1 class="fw-bold display-1">Now it's personal.</h1>
</div>   
    </div>
  </div>
  <div class="container-fluid p-0 overflow-hidden">
  <video autoplay muted loop playsinline class="w-100">
    <source src="images\Muse-overview-mini.mp4" type="video/mp4">  
  </video>
    </div>
    
    <div class="container-fluid my-5">
  <div class=" mx-0 row gx-3 justify-content-center">
  
    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Your workshop companion</h1>
          <p class="fs-5 mt-3">With exceptional print precision and surface quality you can focus on your creativity and let the Muse manufacture your wax casting masters. </p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore More</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Muse-software.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Simple material feed</h1>
          <p class="fs-5 mt-3">Top-up materials via our simple material handling system.

Our wax printing materials Midas and Melt can be handled glove-free.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore materials</button>
          <div class="mt-4"style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Muse-materials.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">No fuss
          setup</h1>
          <p class="fs-5 mt-3">Simple and easy to use. 

Become a wax 3D printing expert overnight and start 3D printing high definition wax masters today.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore Modelworks</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover " autoplay loop muted playsinline>
      <source src="images\Muse-workshop-companion.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-5" style="background-color: black;">
  <div class=" mx-0 row justify-content-center text-center text-white">
    <div class="col-lg-8">
      <h1 class="display-1 fw-bold">Create the impossible.</h1>
    </div>
  </div>
</div>
<div class="container-fluid my-5">
  <div class=" mx-0 row gx-3 justify-content-center">
<div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Precision on tap with SCP™</h1>
          <p class="fs-5 mt-3">Detail that will blow you mind.  The Muse wax printer uses our proprietary SCP™ technology that ensures your casting masters are of the highest quality possible by 3D printing. </p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">More About SCP™</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Muse-scp.mp4" type="video/mp4">
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
          <button class="btn btn-light btn-sm px-5 py-2">Explore materials</button>
          <div class="mt-4"style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Melt-2022-v04.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Drop-on-Demand™</h1>
          <p class="fs-5 mt-3">Millions of wax droplets positioned with the highest level of precision bringing you the sharpest and most accurate wax printed masters for investment casting.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Learn</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover " autoplay loop muted playsinline>
      <source src="images/Drop-on-Demand-2.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid"style="background-color: black;">
  <div class="row mx-0 d-flex align-items-center justify-content-center" style="height: 70vh;">
  <div class="col-12 text-white text-center">
  <h1 class="fw-bold display-1">Made in the USA.</h1>
  <button class="btn btn-light btn-sm px-5 py-2 mt-5 text-dark"><b>A 3D printing  pioneer since 1994</b></button>
</div>
  </div>
</div>
<div class="container-fluid p-0 overflow-hidden">
  <video autoplay muted loop playsinline class="w-100">
    <source src="images\Muse-workshop-companion.mp4" type="video/mp4">  
  </video>



  <div class="container-fluid my-5">
  <div class=" mx-0 row gx-3 justify-content-center">
<div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">On-board monitoring</h1>
          <p class="fs-5 mt-3">Keep a close eye on what is going on on your Muse printer with an on-board camera. </p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Speak to an expert</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Muse-camera.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Affordable
          wax printing</h1>
          <p class="fs-5 mt-3">After more than 30 years supplying jewelry manufacturers worldwide we wanted to bring you an affordable, high detailed printer for your jewelry master patterns.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Watch this video ></button>
          <div class="mt-4"style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover" autoplay loop muted playsinline>
      <source src="images\Muse-overview-mini.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 mb-4">
      <div class="card text-white text-center p-4 w-100 h-100 d-flex flex-column justify-content-between" style="background-color: black;">
        <div>
          <h1 class="display-4 fw-bold">Universal
          connectivity</h1>
          <p class="fs-5 mt-3">Modelworks reads both SLC and STL files in the same build set-up making it simpler for you to connect with multiple CAD design programs.</p>
        </div>
        <div class="mt-auto">
          <button class="btn btn-light btn-sm px-5 py-2">Explore Modelworks</button>
          <div class="mt-4" style="height: 260px;">
    <video class="img-fluid rounded h-100 w-100 object-fit-cover " autoplay loop muted playsinline>
      <source src="images\Modelworks-muse-5.mp4" type="video/mp4">
    </video>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container text-center py-5">
  <h2 class="fw-bold mb-5 display-1">Two models available</h2>
  <div class="row">
    <!-- Muse Box -->
    <div class="col-md-6 mb-4">
      <h4 class="fw-bold display-5">Muse</h4>
      <p class="fs-4">Single print mode option ready <br> for your next design.</p>
      <img src="images\Solidscape-Muse-on-black-1920-72-small.avif" alt="Muse Printer" class="img-fluid my-3" style="max-height: 250px;">
      <div class="d-flex flex-column align-items-center">
        <div>
        <i class="bi bi-gem" style="font-size: 2rem;"></i>
        </div>
        <div><b>StandardMode</b></div>
      </div>
    </div>

    <!-- Muse+ Box -->
    <div class="col-md-6 mb-4">
      <h4 class="fw-bold display-5">Muse+</h4>
      <p class="fs-4">A versatile printer with three <br> powerful print modes:</p>
      <img src="images\Solidscape-Muse-on-black-1920-72-small.avif" alt="Muse+ Printer" class="img-fluid my-3" style="max-height: 250px;">
      <div class="d-flex justify-content-center gap-4">
        <div class="text-center">
        <i class="bi bi-lightning-charge-fill" style="font-size: 2rem;"></i>
          <div><b>SpeedMode</b></div>
        </div>
        <div class="text-center">
        <i class="bi bi-gem" style="font-size: 2rem;"></i>
          <div><b>StandardMode</b></div>
        </div>
        <div class="text-center">
        <i class="bi bi-stars" style="font-size: 2rem;"></i>
          <div><b>CrystalMode</b></div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="bg-black text-white">
    <div class="container">
      <h2 class="text-center display-4 fw-bold mb-4">Muse Specs</h2>

      <div class="table-responsive">
        <table class="table align-middle text-white spec-table">
          <thead>
            <tr class="spec-header">
              <th>Product specification</th>
              <th>Muse</th>
              <th>Muse+</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Print modes</td>
              <td>
                StandardMode<br>
                Layers: 0.001 inch / 25μm
              </td>
              <td>
                StandardMode<br>
                Layers: 0.001 inch / 25μm<br><br>
                SpeedMode<br>
                30% faster than StandardMode<br><br>
                CrystalMode<br>
                Layers: 0.0007 inch / 18μm
              </td>
            </tr>
            <tr>
              <td>Build Size</td>
              <td>
                <strong>Imperial:</strong><br>3 x 3 x 1.88 inches<br><br>
                <strong>Metric:</strong><br>76.2 x 76.2 x 47.7 mm
              </td>
              <td>
                <strong>Imperial:</strong><br>3 x 3 x 1.88 inches<br><br>
                <strong>Metric:</strong><br>76.2 x 76.2 x 47.7 mm
              </td>
            </tr>
            <tr>
              <td>Jet Positioning</td>
              <td colspan="2">254000 DPI (μm)</td>
            </tr>
            <tr>
              <td>Accuracy</td>
              <td colspan="2">
                ±0.005 inch (127 μm) for 1st inch (25.4 mm),<br>
                ±0.001 inch (25.4 μm) each additional inch X, Y and Z
              </td>
            </tr>
            <tr>
              <td>System Size</td>
              <td colspan="2">
                <strong>Imperial:</strong><br>
                20.18 x 16.1 x 14.78 inches<br>
                Weight: 32lbs<br><br>
                <strong>Metric:</strong><br>
                512 x 409 x 375.5 mm<br>
                Weight: 14.6 Kg
              </td>
            </tr>
            <tr>
              <td>Power</td>
              <td colspan="2">100–240 V</td>
            </tr>
            <tr>
              <td>Operating Temperature</td>
              <td colspan="2">60–75ºF (16–24ºC)</td>
            </tr>
            <tr>
              <td>Humidity</td>
              <td colspan="2">40–60%</td>
            </tr>
            <tr>
              <td>File compatibility</td>
              <td colspan="2">Stl & Slc</td>
            </tr>
            <tr>
              <td>Warranty</td>
              <td colspan="2">12 months manufacturer's warranty</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="container py-5 d-flex flex-column justify-content-center align-items-center vh-80 text-center">
    <h1 class="display-5 fw-bold">
    Pocket-sized wax 3D printing on your desktop!
    </h1>

    <div class="col-12 d-flex justify-content-center flex-wrap gap-4 py-4">
      <button class="btn btn-dark btn-sm px-5 py-2">Muse Brochure</button>
      <button class="btn btn-outline-dark btn-sm px-5 py-2">Find a Reseller</button>
    </div>
  </div>



      <!-- footer -->
      <?php require_once('footer.php') ?>
</body>
 </html>