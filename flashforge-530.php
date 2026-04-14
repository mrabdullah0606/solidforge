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
        .comparison-container {
        max-width: 1200px;
        margin: auto;
        text-align: center;
      }

      .comparison-header {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 40px;
      }

      .comparison-wrapper {
        display: flex;
        flex-wrap: wrap;
      }

      .comparison-card {
        flex: 1;
        min-height: 700px; /* Ensure the card has a minimum height */
        color: white;
        padding: 40px 30px;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        background-size: cover;
        background-position: center;
        margin: 10px; /* Add spacing between cards */
        transition: clip-path 0.3s ease-in-out;
      }

      /* Left card styling (Gray background) */
      .left-card {
        background: #6d6a6a;
        clip-path: polygon(0 0, 92% 0, 100% 100%, 0% 100%);
        z-index: 1;
        border-radius: 20px 0 0 20px; /* Round the left side */
      }

      /* Right card styling (Black background) */
      .right-card {
        background: #181818;
        color: white;
        clip-path: polygon(8% 0, 100% 0, 100% 100%, 0% 100%);
        margin-left: -10%;
        z-index: 2;
        border-radius: 0 20px 20px 0; /* Round the right side */
      }

      /* Golden text color for the right card list items */
      .right-card .comparison-list li {
        color: white; /* Set text color to white for list items */
      }

      /* Image styling (positioning image below the heading) */
      .comparison-card img {
        width: 90px;
        margin-top: 16px;
      }

      .comparison-title {
        font-size: 1.6rem;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .comparison-list {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
        max-width: 90%;
        font-size: 1.1rem;
      }

      /* Increased line width between list items */
      .comparison-list li {
        margin: 30px 0;
        display: flex;
        justify-content: space-between;
        border-bottom: 3px solid #444; /* Increased border width to 3px */
        padding-bottom: 12px; /* Keep padding to avoid text overlapping */
        line-height: 1.8;
      }

      @media (max-width: 768px) {
        .comparison-wrapper {
          flex-direction: column;
        }
        .right-card {
          margin-left: 0;
          clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }
        .left-card {
          clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        /* Adjust padding on small screens */
        .comparison-card {
          padding: 30px 20px; /* Smaller padding */
          min-height: auto; /* Let content define height */
        }

        /* Adjust text alignment for smaller screens */
        .comparison-list {
          text-align: left;
        }
      }

      .table {
        color: white !important;
        background-color: rgb(25, 25, 25) !important;
      }
      .table-bordered th,
      .table-bordered td {
        border: 1px solid #444 !important;
        background-color: rgb(25, 25, 25);
        color: white;
        min-width: 120px;
      }
      tfoot td {
        background-color: rgb(25, 25, 25) !important;
        color: #665d5d !important;
      }
      .table-responsive {
        overflow-x: auto;
      }
  </style>
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- flashforge 530 -->
     <!-- header -->
         <!-- Hero Section -->
    <section
      class="vh-100 d-flex align-items-start justify-content-center text-white text-center position-relative"
      style="
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
          url('images/page3.png') center center / cover no-repeat;
      "
    >
      <div class="container pt-5">
        <h1 class="display-1 fw-bold text-warning">WJ530</h1>
        <p class="fs-4 fw-light text-light">
          Ultimate Precision, Peak Efficiency
        </p>
      </div>
    </section>

   <!-- Video Hero Section -->
   <section
  class="vh-100 position-relative text-white text-center d-flex justify-content-center align-items-center"
  style="
    background: url('images/page3(1).png') center center / cover no-repeat;
  "
>
  <!-- Watch Video Button -->
  <a
    href="#"
    class="btn btn-outline-warning px-5 py-3 fs-5 fw-semibold position-absolute start-50 translate-middle-x"
    style="bottom: 150px"
    id="watchVideoBtn"
  >
    Watch Video1
  </a>

  <!-- Fullscreen Hidden Video (No Controls) -->
  <video
    id="heroVideo"
    class="d-none position-absolute top-0 start-0 w-100 h-100"
    style="object-fit: cover; z-index: 10;"
    autoplay
    muted
    playsinline
  >
    <source src="images/video530.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
</section>

<script>
  document.getElementById("watchVideoBtn").addEventListener("click", function (e) {
    e.preventDefault();
    const video = document.getElementById("heroVideo");
    video.classList.remove("d-none");
    video.play();
    this.style.display = "none"; // hide button after video starts
  });
</script>




    <!-- Printing Capacity -->
    <section
      class="vh-100 d-flex align-items-start justify-content-center text-white text-center position-relative"
      style="
        background: url('images/page3(2).png') center center / cover no-repeat;
      "
    >
      <div class="container pt-5">
        <h3>Printing Capacity</h3>
        <h1 class="display-3 fw-bold text-white">HIGHER</h1>
        <p class="fs-4 fw-light text-light">
          Each Device Achieves an Average Monthly Output of 12kg
        </p>
      </div>
    </section>

    <!-- Printing Speed -->
    <section
      class="vh-100 d-flex align-items-start justify-content-center text-white text-center position-relative"
      style="
        background: url('images/page3(3).png') center center / cover no-repeat;
      "
    >
      <div class="container pt-5">
        <h3>Printing Speed</h3>
        <h1 class="display-3 fw-bold text-white">FASTER</h1>
        <p class="fs-4 fw-light text-light">
          Achieves a Top Printing Speed of 6.35mm/h
        </p>
      </div>
    </section>

    <!-- Printing Precision -->
    <section
      class="vh-100 d-flex flex-column align-items-center justify-content-start text-white text-center position-relative"
    >
      <div class="container pt-5">
        <h3 class="text-black fw-semibold">Printing Precision</h3>
        <h1 class="display-4 fw-bold text-black">STRONGER</h1>
        <p class="fs-4 fw-light text-black">
          2900x2900x1700 DPI Ultra-High Print Precision Leads the World
        </p>
      </div>

      <!-- Image Section -->
      <div class="w-100 mt-4 px-3">
        <img
          src="images/page3(4).png"
          alt="Precision Image"
          class="img-fluid d-block mx-auto"
          style="max-width: 100%; height: auto"
        />
      </div>
    </section>

    <!-- Cards Section -->
    <section class="py-5 text-white" style="background-color: #000">
      <div class="container">
        <h2 class="display-4 fw-bold mb-3 text-center">
          ULTRA-HIGH PERFORMANCE WAX 3D PRINTER
        </h2>
        <p class="fs-5 text-light mb-5 text-center">
          The WJ 530 is a batch production WaxJet printer designed for jewelry
          manufacturing plants or printing service providers with wax mold
          production needs
        </p>

        <!-- First Row -->
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-md-0">
            <div
              class="card text-white h-100 border-0 bg-transparent text-start"
            >
              <img
                src="images/page3(card1).png"
                class="card-img-top mt-3 mb-3"
                alt="Feature 1"
              />
              <div class="card-body">
                <h5 class="card-title fw-semibold" style="font-size: 1.75rem">
                  Stable & Durable
                </h5>
                <p class="card-text text-lighter" style="font-size: 1.125rem">
                  Patented self-developed wax circulation control system,
                  365*24-hour high-intensity testing, more durable printhead.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="card text-white h-100 border-0 bg-transparent text-start"
            >
              <img
                src="images/page3(card2).png"
                class="card-img-top mt-3 mb-3"
                alt="Feature 2"
              />
              <div class="card-body">
                <h5 class="card-title fw-semibold" style="font-size: 1.75rem">
                  High Wax Material Utilization Rate
                </h5>
                <p class="card-text text-lighter" style="font-size: 1.125rem">
                  Stable output with a wax material utilization rate of 58%-60%,
                  advanced technology and reliable printing improve utilization,
                  reduce waste, and maximize production efficiency.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Second Row -->
        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div
              class="card text-white h-100 border-0 bg-transparent text-start"
            >
              <img
                src="images/page3(card3).png"
                class="card-img-top mt-3 mb-3"
                alt="Feature 3"
              />
              <div class="card-body">
                <h5 class="card-title fw-semibold" style="font-size: 1.75rem">
                  Intelligent Monitoring
                </h5>
                <p class="card-text text-lighter" style="font-size: 1.125rem">
                  Wi-Fi connectivity & 2K HD camera, monitor printing in real
                  time for worry-free production.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="card text-white h-100 border-0 bg-transparent text-start"
            >
              <img
                src="images/page3(card4).png"
                class="card-img-top mt-3 mb-3"
                alt="Feature 4"
              />
              <div class="card-body">
                <h5 class="card-title fw-semibold" style="font-size: 1.75rem">
                  Exceptionally Easy to Electroplate
                </h5>
                <p class="card-text text-lighter" style="font-size: 1.125rem">
                  The red wax mold made from red wax perfectly adheres to
                  electroplated silver coating.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      style="
        font-family: 'Roboto', sans-serif;
        background: url('images/page3(5).png') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 60px 0;
      "
    >
      <div class="comparison-container">
        <div class="comparison-header">Product Upgrade Comparison</div>
        <div class="comparison-wrapper">
          <!-- Left Card (Gray background) -->
          <div class="comparison-card left-card">
            <div class="comparison-title">WaxJet 400</div>
            <img src="images/image.png" alt="WaxJet 400" />
            <ul class="comparison-list">
              <li>Printing Precision(HD):<br />1200X1200X1600 DPI</li>
              <li>Layer Thickness:<br />16μm</li>
              <li>Printing Material:<br />Purple Wax + White Wax</li>
              <li>Layer Printing Time:<br />N/A</li>
              <li>Utilization Rate:<br />40%~45%</li>
            </ul>
          </div>

          <!-- Right Card (Black background) -->
          <div class="comparison-card right-card">
            <div class="comparison-title">WaxJet 530</div>
            <img src="images/image2.png" alt="WaxJet 530" />
            <ul class="comparison-list">
              <li>Printing Precision(HD):<br />2900X2900X1700 DPI</li>
              <li>Layer Thickness:<br />15μm</li>
              <li>Printing Material:<br />Red Wax + White Wax</li>
              <li>Layer Printing Time:<br />8.2~8.5 seconds</li>
              <li>Utilization Rate:<br />58%~60%</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- swiper -->
    <section class="gold-process-slider">
      <link
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
        rel="stylesheet"
      />

      <style>
        .gold-process-slider {
          font-family: "Poppins", sans-serif;
          background-color: #000;
        }

        .gold-process-slider .swiper {
          width: 100%;
          height: 100vh;
        }

        .gold-process-slider .swiper-slide {
          position: relative;
          background-size: cover;
          background-position: center;
        }

        .gold-process-slider .swiper-slide::before {
          content: "";
          position: absolute;
          inset: 0;
          background: rgba(0, 0, 0, 0.6);
          z-index: 1;
        }

        .gold-process-slider .slide-content {
          position: relative;
          z-index: 2;
          height: 100%;
          padding: 4rem;
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap;
          color: #fff;
        }

        .gold-process-slider .text-box h2 {
          font-size: 2rem;
        }

        .gold-process-slider .text-box h1 {
          font-size: 2.5rem;
          font-weight: bold;
          color: #ffe082;
        }

        .gold-process-slider .text-box p {
          font-size: 1.1rem;
        }

        .gold-process-slider .highlight {
          color: #ffe082;
          font-weight: bold;
        }

        .gold-process-slider .gold-image img {
          width: 250px;
          height: auto;
        }

        .gold-process-slider .swiper-pagination {
          position: absolute;
          bottom: 20px;
          width: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .gold-process-slider .swiper-pagination-bullet {
          width: 30px;
          height: 4px;
          border-radius: 0;
          background-color: #fff;
          opacity: 0.4;
          transition: all 0.3s ease;
          margin: 0 5px !important;
        }

        .gold-process-slider .swiper-pagination-bullet-active {
          background-color: #ffe082;
          opacity: 1;
        }

        @media (max-width: 768px) {
          .gold-process-slider .slide-content {
            flex-direction: column;
            text-align: center;
            padding: 2rem;
          }

          .gold-process-slider .gold-image {
            margin-top: 2rem;
          }
        }
      </style>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div
            class="swiper-slide"
            style="background-image: url('images/carosel1.png')"
          >
            <div class="slide-content container">
              <div class="text-box">
                <h2>Process:</h2>
                <h1>Hard Gold Plating + Enameling Technique</h1>
                <p>Weight: <span class="highlight">15.46g</span></p>
                <p>
                  Material Composition:
                  <span class="highlight">0.77g GOLD 14.69g GOLD</span>
                </p>
                <p>
                  Gold Usage in Traditional Process:
                  <span class="highlight">30g</span>
                </p>
                <p>Wax pattern weight: <span class="highlight">0.5g</span></p>
                <p>Printing time: <span class="highlight">30min</span></p>
                <p>Layer thickness: <span class="highlight">0.015</span></p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div
            class="swiper-slide"
            style="background-image: url('images/carosel 2.png')"
          >
            <div class="slide-content container">
              <div class="text-box">
                <h2>Process:</h2>
                <h1>Hard Gold Plating + Enameling Technique</h1>
                <p>Weight: <span class="highlight">0.95g</span></p>
                <p>
                  Material Composition:
                  <span class="highlight">0.95g GOLD</span>
                </p>
                <p>
                  Gold Usage in Traditional Process:
                  <span class="highlight">5g</span>
                </p>
                <p>Wax pattern weight: <span class="highlight">0.1g</span></p>
                <p>Printing time: <span class="highlight">20min</span></p>
                <p>Layer thickness: <span class="highlight">0.015</span></p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div
            class="swiper-slide"
            style="background-image: url('images/carosel3.png')"
          >
            <div class="slide-content container">
              <div class="text-box">
                <h2>Process:</h2>
                <h1>Hard Gold Plating + Enameling Technique</h1>
                <p>Weight: <span class="highlight">0.96g</span></p>
                <p>
                  Material Composition:
                  <span class="highlight">0.96g GOLD</span>
                </p>
                <p>
                  Gold Usage in Traditional Process:
                  <span class="highlight">5g</span>
                </p>
                <p>Wax pattern weight: <span class="highlight">0.1g</span></p>
                <p>Printing time: <span class="highlight">30min</span></p>
                <p>Layer thickness: <span class="highlight">0.013</span></p>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div
            class="swiper-slide"
            style="background-image: url('images/carosel4.png')"
          >
            <div class="slide-content container">
              <div class="text-box">
                <h2>Process:</h2>
                <h1>Hard Gold Plating + Enameling Technique</h1>
                <p>Weight: <span class="highlight">1.1g</span></p>
                <p>
                  Material Composition: <span class="highlight">1.1g GOLD</span>
                </p>
                <p>
                  Gold Usage in Traditional Process:
                  <span class="highlight">5g</span>
                </p>
                <p>Wax pattern weight: <span class="highlight">0.1g</span></p>
                <p>Printing time: <span class="highlight">60min</span></p>
                <p>Layer thickness: <span class="highlight">0.015</span></p>
              </div>
            </div>
          </div>

          <!-- Slide 5 -->
          <div
            class="swiper-slide"
            style="background-image: url('images/carosel5.png')"
          >
            <div class="slide-content container">
              <div class="text-box">
                <h2>Process:</h2>
                <h1>Hard Gold Plating + Enameling Technique</h1>
                <p>Weight: <span class="highlight">27.3g</span></p>
                <p>
                  Material Composition:
                  <span class="highlight">1.37g GOLD 27.53 GOLD</span>
                </p>
                <p>
                  Gold Usage in Traditional Process:
                  <span class="highlight">50g</span>
                </p>
                <p>Wax pattern weight: <span class="highlight">2.7g</span></p>
                <p>Printing time: <span class="highlight">80min</span></p>
                <p>Layer thickness: <span class="highlight">0.015</span></p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script>
        new Swiper(".mySwiper", {
          loop: true,
          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
    </section>

    <section style="background-color: rgb(25, 25, 25); padding: 40px 0">
      <div
        class="container"
        style="
          background-color: rgb(25, 25, 25);
          color: white;
          padding: 30px;
          border-radius: 10px;
        "
      >
        <h4 class="mb-3 text-center">Technical Parameter</h4>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Printing Technology</th>
                <th>Multiple Printing (MJP)</th>
                <th>Material Name</th>
                <th>FFWJ1200</th>
                <th>FFWS3200</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Build Volume</td>
                <td>289*208*100mm</td>
                <td>Material Type</td>
                <td>Part Wax</td>
                <td>Support Wax</td>
              </tr>
              <tr>
                <td>Printhead</td>
                <td>3</td>
                <td>Net Weight</td>
                <td>3.0kg/bottle</td>
                <td>3.4kg/bottle</td>
              </tr>
              <tr>
                <td>Dimensional Accuracy</td>
                <td>20mm±0.04mm</td>
                <td>Composition</td>
                <td>100% wax</td>
                <td>Wax support material</td>
              </tr>
              <tr>
                <td>Resolution</td>
                <td>2900*2900*17000P115um loyenart</td>
                <td>Color</td>
                <td>Red</td>
                <td>White</td>
              </tr>
              <tr>
                <td>Material Utilization Rate</td>
                <td>Material ±55%</td>
                <td>Density (890°C (Liquid))</td>
                <td>0.79</td>
                <td>0.85g</td>
              </tr>
              <tr>
                <td>Printing Speed</td>
                <td>±5.5mm/h, 15um layer</td>
                <td>Melting Point</td>
                <td>68°C</td>
                <td>55°C</td>
              </tr>
              <tr>
                <td>Slicing Software</td>
                <td>WaxJetprint</td>
                <td>Softening Point</td>
                <td>63°C</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Supported File Format</td>
                <td>ati.slc</td>
                <td>Volumetric Shrinkage</td>
                <td>1.1%</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Connectivity</td>
                <td>Network 10/100/1000 Ethernet/USB/WI-F1</td>
                <td>Linear Shrinkage</td>
                <td>0.7%</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Supported Operating System</td>
                <td>Windows 7/Windows 10(64bit)</td>
                <td>Needle Penetration Hardness</td>
                <td>9</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Working Environment</td>
                <td>Temp 18-26°C, Humidity 30-70%</td>
                <td>Ash Content</td>
                <td>&lt;0.01%</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Equipment</td>
                <td>1382*775*1400mm</td>
                <td>Description</td>
                <td>High-precision casting wax</td>
                <td>Hands-free dissolvable support wax</td>
              </tr>
              <tr>
                <td>Dimensions</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Net Weight</td>
                <td>480kg</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Package Size</td>
                <td>1530*900*1837mm</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Gross Weight</td>
                <td>630kg</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5" class="p-2 text-center">
                  <sup>©</sup>Volumetric Shrinkage SM/T 0588–1994;
                  <sup>©</sup>Needle Penetration<br />Hardness GB/T 4995–2010;
                  <sup>©</sup>Ash Content GB/T 14235.3–1993
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </section>


    <section class="container my-5" style="max-width: 800px;">
      <h1 class="mb-4 fw-bold text-center">Contact Us</h1>
    
      <div class="mb-4">
        <h2 class="h5 fw-semibold">Need more information?</h2>
        <p class="text-muted">We will respond within 24 hours.</p>
      </div>
    
      <form>
        <!-- Name & Email Row -->
        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label class="form-label fw-semibold mb-2">Name <span style="color:#ff0000;">*</span></label>
            <input type="text" class="form-control border-0 border-bottom rounded-0" style="background-color:transparent;" required>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold mb-2">E-mail <span style="color:#ff0000;">*</span></label>
            <input type="email" class="form-control border-0 border-bottom rounded-0" style="background-color:transparent;" required>
          </div>
        </div>
    
        <!-- Phone & Country Row -->
        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label class="form-label fw-semibold mb-2">Phone Number <span style="color:#ff0000;">*</span></label>
            <input type="tel" class="form-control border-0 border-bottom rounded-0" style="background-color:transparent;" required>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold mb-2">Country/Region <span style="color:#ff0000;">*</span></label>
            <select class="form-select border-0 border-bottom rounded-0" style="background-color:transparent;" required>
              <option selected disabled>Please Choose A Country/Region</option>
              <!-- Add country options as needed -->
            </select>
          </div>
        </div>
    
        <!-- Company Name -->
        <div class="mb-3">
          <label class="form-label fw-semibold mb-2">Company Name <span style="color:#ff0000;">*</span></label>
          <input type="text" class="form-control border-0 border-bottom rounded-0" style="background-color:transparent;" required>
        </div>
    
        <!-- Message -->
        <div class="mb-4">
          <label class="form-label fw-semibold mb-2">Message <span style="color:#ff0000;">*</span></label>
          <textarea class="form-control border-0 border-bottom rounded-0" rows="4" style="background-color:transparent;" required></textarea>
        </div>
    
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold">
          Submit
        </button>
      </form>
    </section>
     <!-- footer -->
     <?php require_once('footer.php') ?>

    

  </body>
  </html>