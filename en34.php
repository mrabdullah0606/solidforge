<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EN34</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Animate.css for animation -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
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
      /* Custom Styling for the Table */
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
    
    <div
      class="container py-5 d-flex flex-column justify-content-center align-items-center min-vh-100"
    >
      <!-- Header Section -->
      <h1 class="text-start mb-4 text-primary fw-bold">EN34 - Gold/Silver</h1>

      <!-- Paragraph Section -->
      <div class="card w-75 mb-4 shadow-sm bg-white">
        <div class="card-body text-center">
          <p class="fs-5">
            The <span class="text-primary">EN-34</span> model is designed for
            jewellery companies that carry out a
            <span class="text-primary">SMALL PRODUCTION</span>, but have a high
            <span class="text-primary">QUALITY REQUIREMENT</span> in the
            finishes.
          </p>
          <p class="fs-5">
            This model is based on the
            <span class="text-primary">SECOND STEP ENERGY</span> system that
            uses small particles up to 0.3mm in diameter as a catalyst for the
            chemical process, pushing them against the parts with an exclusive
            <span class="text-primary">ENERGETIC system</span>, which is what
            gives the system its name.
          </p>
          <p class="fs-5">
            The same machine can work with
            <span class="text-primary">gold</span> of different karatages and
            colors, and also changing the electrolyte with silver and brass,
            which makes it a very
            <span class="text-primary">versatile solution</span> for small
            jewelry companies.
          </p>
          <p class="fs-5">
            The EN-34 machines allow you to process between
            <span class="text-primary">9 and 21 parts</span> simultaneously in
            times ranging from
            <span class="text-primary">one to two hours</span>, depending on the
            capacity of how bulky they are.
          </p>
        </div>
      </div>

      <!-- New Heading -->
      <h2 class="text-center text-primary mb-4 fw-bold">EN-34 Series</h2>

      <!-- Second Paragraph Section -->
      <div class="card w-75 mb-4 shadow-sm bg-white">
        <div class="card-body text-center fs-5">
          The <span class="text-primary">EN-34 series</span> is the third
          machine we have brought to the market, mainly aimed at small
          <span class="text-primary">gold</span> and/or
          <span class="text-primary">silver manufacturers</span>. The work
          process is <span class="text-primary">complex</span> as it requires
          <span class="text-primary">strict control</span> of all the parameters
          that influence the process and which basically are: <br /><br />
          - The <span class="text-primary">movement</span> of the frame where
          the pieces are hung.<br />
          - The type and value of the electrical current supplied, which vary
          significantly from alloy to alloy.<br />
          - The <span class="text-primary">processing time</span>.<br /><br />
          In order to effectively control these parameters and at the same time
          facilitate the operator's work to be automated, we have incorporated
          into the machine a
          <span class="text-primary"
            >CONTROLLER WITH MEMBRANE KEYPAD AND TWO INDICATOR SCREENS</span
          >, as well as the ability to save in memory the work parameters for
          each alloy with which we work.
        </div>
      </div>

      
     
      <!-- Image Section -->
      <div class="d-flex justify-content-center mb-4">
        <div class="position-relative" style="width: 60%;">
          <img src="images/EN-34.jpg" alt="PMG 130 Series"
               class="rounded-3 shadow animate__animated animate__fadeInLeft"
               style="width: 100%; height: auto;">
          <div class="position-absolute bottom-0 start-50 translate-middle-x text-white bg-dark bg-opacity-75 px-3 py-1 rounded-2 mb-2">
            EN-34 
          </div>
        </div>
      </div>
      


      <!-- Technical Characteristics Heading -->
      <h1 class="text-center text-primary mb-4">Technical Characteristics</h1>

      <!-- Table Section -->
      <div class="w-75 mb-4">
        <div class="row table-header">
          <div class="col-lg-4">Technical Specification</div>
          <div class="col-lg-5">Details</div>
        </div>

        <div class="row table-row">
          <div class="col-6 table-data fw-bold">Model</div>
          <div class="col-6 table-data">EN-34</div>
        </div>
        <div class="row table-row">
          <div class="col-6 table-data fw-bold">Installed Power</div>
          <div class="col-6 table-data">340 VA</div>
        </div>
        <div class="row table-row">
          <div class="col-6 table-data fw-bold">Consumption</div>
          <div class="col-6 table-data"></div>
        </div>
        <div class="row table-row">
          <div class="col-6 table-data fw-bold">Supply Weight</div>
          <div class="col-6 table-data">12 Kg</div>
        </div>
        <div class="row table-row">
          <div class="col-6 table-data fw-bold">Measurements / Packaging</div>
          <div class="col-6 table-data">550 x 390 x 380 mm/mm</div>
        </div>
        <div class="row table-row">
          <div class="col-6 table-data fw-bold">Net Weight / Gross Weight</div>
          <div class="col-6 table-data">30 Kg / 40 Kg</div>
        </div>
      </div>
    </div>
     <!-- footer -->
     <?php require_once('footer.php') ?>

  </body>
</html>
