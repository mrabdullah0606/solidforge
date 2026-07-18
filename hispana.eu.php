<?php require_once('includes/session_init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMG Machines</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
</head>

<body class="bg-light">
    <!-- header -->
    <?php require_once('navbar.php') ?>

    <div class="container py-5 d-flex flex-column justify-content-center align-items-center min-vh-100">
        <!-- Header Section -->
        <h1 class="text-center mb-4 text-primary fw-bold">PMG - Silver/Brass</h1>

        <!-- Combined Paragraph Section -->
        <div class="card w-75 mb-4 shadow-sm">
            <div class="card-body text-center">
                <p class="lead">
                    The <strong>PMG</strong> model identifies machines designed for <strong>HIGH PRODUCTION</strong> 
                    of silver or brass pieces (including complex designs), performing a fine 
                    <strong>ELECTRO-FINISHING</strong> of exteriors in very short times.
                </p>
                <p class="fs-5">
                    <strong>PMG</strong> machines can process <strong>69–129 parts simultaneously</strong> 
                    in under <strong>40 minutes</strong>, depending on part size and bulkiness.
                </p>
                <p class="fs-5">
                    The series ending with <strong>-L</strong> (for <strong>BRASS</strong>) include 
                    a dedicated <strong>ZINC filtering system</strong>, as high zinc concentration 
                    affects bath effectiveness. Machines without this filter are not recommended 
                    for brass processing unless used occasionally for small batches.
                </p>
            </div>
        </div>

        <!-- YouTube Video Embed -->
        <div class="w-75 mb-4">
            <iframe class="w-100 rounded-3 shadow" height="400" src="https://www.youtube.com/embed/ZE9CG16zXO8" 
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
              <img src="images/PMG-130.png" alt="PMG 130 Series" class="rounded-3 shadow animate__animated animate__fadeInLeft" style="width: 100%; height: auto;">
              <div class="position-absolute bottom-0 start-50 translate-middle-x text-white bg-dark bg-opacity-75 px-3 py-1 rounded-2 mb-2">
                PMG 130
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
                <div class="col-6 table-data">PMG 130 / PMG 130-L*</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Installed Power</div>
                <div class="col-6 table-data">11 Amps</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Consumption</div>
                <div class="col-6 table-data">2.2 Kw</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Supply Weight</div>
                <div class="col-6 table-data">110 kg / 127 kg*</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Filter* / Packaging*</div>
                <div class="col-6 table-data">620 x 360 x 700 mm* / 6400 x 4300 x 1820 mm*</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Measurements / Packaging</div>
                <div class="col-6 table-data">1140 x 960 x 1610 mm / 1280 x 1110 x 1820 mm</div>
            </div>
            <div class="row table-row">
                <div class="col-6 table-data fw-bold">Net Weight / Gross Weight</div>
                <div class="col-6 table-data">330 kg / 420 kg</div>
            </div>
        </div>  
    </div>

     <!-- footer -->
     <?php require_once('footer.php') ?>


    <!-- Bootstrap JS -->
   
</body>
</html>
