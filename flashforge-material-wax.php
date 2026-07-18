<?php require_once('includes/session_init.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>flashforge</title>
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
          .bg-section {
      background-size: cover;
      background-position: center;
      min-height: 100vh; /* Adjust to dynamically fit the content */
      overflow: hidden; /* Prevent overflow */
    }

    @media (max-width: 768px) {
      h1, h2, h3 {
        font-size: 1.8rem !important;
      }
      p {
        font-size: 1.2rem !important;
      }
      .container {
        padding-left: 15px;
        padding-right: 15px;
      }
    }

    @media (max-width: 576px) {
      .text-start {
        text-align: center !important;
      }
      .text-end {
        text-align: center !important;
      }
      .fw-bold {
        font-weight: 700 !important;
      }
    }
  </style>
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
   <!-- Section 1 -->
   <!-- Section 1 -->
  <div class="d-flex align-items-center bg-section" style="background-image: url('images/front.png');">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h1 class="fw-bold mb-0 text-white" style="font-size: 2.4rem; line-height: 1.3; letter-spacing: 1px;">
            Special Wax Material for<br>
            Wax 3D Printer
          </h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2 -->
  <div class="d-flex align-items-center bg-section" style="background-image: url('images/front2.png');">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="fw-bold text-dark mb-3" style="font-size: 3rem;">Dimensional Stability</h2>
          <p class="text-black" style="font-size: 1.5rem;">
            <span class="text-primary">1.1 %</span> Volume Shrinkage <span class="text-primary"> ±0.04 mm</span><span class="text-primary">/20 mm</span><br>
            Model Dimensional Accuracy
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 3: Full Background Image with Right-Aligned Text -->
  <div class="d-flex align-items-center bg-section" style="background-image: url('images/front3.png');">
    <div class="container">
      <div class="row justify-content-end"> <!-- Align row to the right -->
        <div class="col-12 col-md-6 text-end ms-auto"> <!-- Align text to the right -->
          <h2 class="fw-bold text-dark mb-2" style="font-size: 2.5rem;">Hands-free Support</h2>
          <h3 class="fw-bold text-dark mb-3" style="font-size: 2.5rem;">Good Thermal Stability</h3>
          <p class="text-black" style="font-size: 1.8rem;">
            <span class="text-primary">100%</span> pure wax support material;<br>
            dissolves completely in solvent mix at <span class="text-primary">43°C</span>.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 4: Full Background Image with Right-Aligned Text -->
  <div class="d-flex align-items-center bg-section" style="background-image: url('images/front4.png');">
    <div class="container">
      <div class="row justify-content-end"> <!-- Align row to the right -->
        <div class="col-12 col-md-6 text-end ms-auto"> <!-- Align text to the right -->
          <h2 class="fw-bold text-white mb-2" style="font-size: 2.5rem;">Oxidation Resistance,</h2>
          <h3 class="fw-bold text-white mb-3" style="font-size: 2.5rem;">Good Thermal Stability</h3>
          <p class="text-white" style="font-size: 2rem;">
            <span class="text-primary">5 years</span> shelf life unopened at room temperature;<br>
            <span class="text-primary">20 days</span> service life after unpacking.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Material Specification Table (Purple) -->
  <div class="container py-5">
    <h2 class="fw-bold text-dark mb-4 text-center" style="font-size: 2.5rem;">Material Specification (Purple)</h2>
    <div class="table-responsive"> <!-- Make the table responsive -->
      <table class="table table-bordered table-striped">
        <thead>
          <tr class="table-secondary">
            <th>Property</th>
            <th>FFWJ1100</th>
            <th>FFWJ1200</th>
            <th>FFMS3100</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Material Name</td><td>FFWJ1100</td><td>FFWJ1200</td><td>FFMS3100</td></tr>
          <tr class="table-secondary"><td>Material Type</td><td>Part material</td><td>Part material</td><td>Support material</td></tr>
          <tr><td>Net Weight</td><td>3.0kg/bottle</td><td>3.0kg/bottle</td><td>3.6kg/bottle</td></tr>
          <tr class="table-secondary"><td>Composition</td><td>100% Wax</td><td>100% Wax</td><td>Wax support material</td></tr>
          <tr><td>Color</td><td>Purple</td><td>Pink</td><td>White</td></tr>
          <tr class="table-secondary"><td>Density @95°C (liquid)</td><td>0.76g/cm³</td><td>0.85g/cm³</td><td>0.85g/cm³</td></tr>
          <tr><td>Melting Point</td><td>68°C</td><td>80°C</td><td>55°C</td></tr>
          <tr class="table-secondary"><td>Softening Point</td><td>63°C</td><td>70°C</td><td>-</td></tr>
          <tr><td>Volumetric Shrinkage</td><td>1.10%</td><td>0.90%</td><td>-</td></tr>
          <tr class="table-secondary"><td>Linear Shrinkage</td><td>0.70%</td><td>0.70%</td><td>-</td></tr>
          <tr><td>Needle Penetration Hardness</td><td>9</td><td>&lt;0.01%</td><td>-</td></tr>
          <tr class="table-secondary"><td>Ash Content</td><td>&lt;0.01%</td><td>7</td><td>-</td></tr>
          <tr><td>Description</td><td>High-precision casting wax</td><td>High-precision dental casting wax material</td><td>Hands-free dissolvable support material</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Material Specification Table (Red) -->
  <div class="container py-4">
  <h2 class="fw-bold text-dark mb-3 text-center" style="font-size: 2rem;">Material Specification (Red)</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-striped mb-3">
      <thead>
        <tr class="table-secondary">
          <th>Property</th>
          <th>FFWJ1200</th>
          <th>FFMS3200</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Material Name</td><td>FFWJ1200</td><td>FFMS3200</td></tr>
        <tr class="table-secondary"><td>Material Type</td><td>Part wax</td><td>Support wax</td></tr>
        <tr><td>Net Weight</td><td>1.5kg/bottle</td><td>1.6kg/bottle</td></tr>
        <tr class="table-secondary"><td>Composition</td><td>100% Wax</td><td>Wax support wax</td></tr>
        <tr><td>Color</td><td>Red</td><td>White</td></tr>
        <tr class="table-secondary"><td>Density @95°C (liquid)</td><td>0.76g/cm³</td><td>0.85g/cm³</td></tr>
        <tr><td>Melting Point</td><td>68°C</td><td>55°C</td></tr>
        <tr class="table-secondary"><td>Softening Point</td><td>63°C</td><td>-</td></tr>
        <tr><td>Volumetric Shrinkage</td><td>1.10%</td><td>-</td></tr>
        <tr class="table-secondary"><td>Linear Shrinkage</td><td>0.70%</td><td>-</td></tr>
        <tr><td>Needle Penetration Hardness</td><td>9</td><td>-</td></tr>
        <tr class="table-secondary"><td>Ash Content</td><td>&lt;0.01%</td><td>-</td></tr>
        <tr><td>Description</td><td>High-precision casting wax</td><td>Hands-free dissolvable support wax</td></tr>
      </tbody>
    </table>
  </div>
</div>

     <!-- footer -->
     <?php require_once('footer.php') ?>

    

  </body>
  </html>