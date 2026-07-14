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

       
        .navbar{background: #000;}
        .table-row {
            transition: all 0.3s ease;
        }

        .table-row:hover {
            background-color: #f8f9fa;
            transform: scale(1.02);
        }

        .table-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1.25rem;
            font-weight: bold;
        }

        .table-data {
            padding: 0.75rem;
        }
  </style>
  <body class="bg-light">
      <!-- header -->
      <?php require_once('navbar.php') ?>
      <div class="container py-5 d-flex flex-column justify-content-center align-items-center min-vh-100">
        <!-- Header Section -->
        <h1 class="text-center mb-4 text-primary fw-bold">GPG - Gold/Silver</h1>

        <!-- Combined Paragraph Section -->
        <div class="card w-75 mb-4 shadow-sm">
            <div class="card-body text-center">
                <p class="lead">
                    The GP-G model identifies machines specially designed for HIGH PRODUCTION of gold pieces in their different colors and karats, although there is also a version for silver. This model performs a fine ELECTRO-FINISHING of exteriors in longer times than the PMG system, but considerably shorter than in mechanical processes.
                </p>
                <p class="fs-5">
                    GP-G machines allow between 26 and 66 parts to be processed simultaneously in times ranging from one to two hours, depending on the capacity of how bulky they are.
                </p>
            </div>
        </div>

        <!-- YouTube Video Embed -->
        <div class="w-75 mb-4">
            <iframe class="w-100 rounded-3 shadow" height="400" src="https://www.youtube.com/embed/vpadtoh-K9A?autoplay=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>    
        </div>

        <!-- New Heading -->
        <h2 class="text-center text-primary mb-4">PMG 130 / PMG 130-L Series</h2>

        <!-- New Paragraph after Heading -->
        <p class="fs-5 text-center w-75 mb-4">
            The PMG 130 series is an updated version of the first G-SYSTEM machine we brought to market. Despite having a MANUAL DASHBOARD, the work system is very simple, agile, practical, and dynamic, which makes this model still very popular.
        </p>

        <!-- Image Section with Animation from Left and Custom Inline Style for Smaller Size -->
        <div class="d-flex justify-content-center mb-4">
            <div class="position-relative" style="width: 35%;">
              <img src="images/gpg-10.png" alt="PMG 130 Series" class="rounded-3 shadow animate__animated animate__fadeInLeft" style="width: 100%; height: auto;">
              <div class="position-absolute bottom-0 start-50 translate-middle-x text-white bg-dark bg-opacity-75 px-3 py-1 rounded-2 mb-2">
                 GPG-10
              </div>
            </div>
          </div>
          

        <!-- Technical Characteristics Table Section -->
        <h1 class="text-center text-primary mb-4">Technical Characteristics</h1>

        <!-- Table Section -->
        <div class="w-75 mb-4">
            <div class="row table-header">
                <div class="col-lg-4">Technical Specification</div>
                <div class="col-lg-5">Details</div>
            </div>

            <!-- Table Rows -->
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Model</div>
                <div class="col-6 table-data">GP-G10</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Installed Power</div>
                <div class="col-6 table-data">1450 W</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Consumption</div>
                <div class="col-6 table-data"></div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Supply Weight</div>
                <div class="col-6 table-data">60 Kg</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Measurements / Packaging</div>
                <div class="col-6 table-data">885 x 585 x 655 mm/mm</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Net Weight / Gross Weight</div>
                <div class="col-6 table-data">90 kg/kg</div>
            </div>
        </div>  

    </div>

     <!-- footer -->
     <?php require_once('footer.php') ?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  </html>