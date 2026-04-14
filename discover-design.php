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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .feature-btn {
    background-color: #F4F4F4;
    border: none;
    width: 100%;
    padding: 12px 20px;
    font-weight: bold;
    transition: background-color 0.3s;
  }

  .feature-btn:hover,
  .feature-btn.active {
    background-color: white;
  }

  .video-background {
    width: 100%;
    height: auto;
    object-fit: cover;
  }
  .container-fluid {
    background-color: #1B242D;
    color: white;
  }

  .container-fluid .btn {
    background-color: #1B242D;
    color: white;
    font-weight: bold;
    border: 2px solid white border 20px;
    transition: background-color 0.3s;
  }

  .btn:hover {
    background-color: white;
    color:#1B242D;
  }
  .custom-btn {
    color: white;
    background-color: transparent;
    border: 1px solid white;
    padding: 8px 20px;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .custom-btn:hover {
    background-color: white;
    color: black;
  }
  


       
        .navbar{background: #000;}
  </style>
  <!-- <body> -->
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
     <!-- Limited Height Video Background Section -->




<div class="container my-5">
  <div class="row" style="min-height: 400px;">
    <!-- Left: Video -->
    <div class="col-md-6">
      <video class="video-background" autoplay muted loop playsinline>
        <source src="images/3design_mascotte_turning_white_ring.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <!-- Right: Centered Text + Buttons -->
    <div class="col-md-6 d-flex align-items-center justify-content-center text-center">
      <div>
        <!-- Horizontal Buttons -->
        <div class="row g-2 mb-3 text-center" role="tablist">
          <div class="col-4">
            <button class="feature-btn active" data-bs-toggle="tab" data-bs-target="#feature1" type="button" role="tab">
              Powerful Parametric
            </button>
          </div>
          <div class="col-4">
            <button class="feature-btn" data-bs-toggle="tab" data-bs-target="#feature2" type="button" role="tab">
              Multi OS <br>Platform
            </button>
          </div>
          <div class="col-4">
            <button class="feature-btn" data-bs-toggle="tab" data-bs-target="#feature3" type="button" role="tab">
              Easy to <br> Use
            </button>
          </div>
        </div>

        <!-- Tab Descriptions -->
        <div class="tab-content py-4 fs-6">
          <div class="tab-pane fade show active" id="feature1" role="tabpanel">
            <p><strong><b>Incredible power</b></strong><br>
            Don’t waste your creativity time! the only genuine <br>parametric solution. Change your designs in one <br>click at anytime though the parametric construction <br>tree
            </p>
          </div>
          <div class="tab-pane fade" id="feature2" role="tabpanel">
            <p><strong><b>Mac or PC?</b></strong><br>
            Unable to decide between a Mac or a PC? Well,<br> there is no need to stress about it as 3Design is <br> compatible with both operating systems. 3D jewelry <br> designers choose their <br>preferred system to fit their style and business model.
            </p>
          </div>
          <div class="tab-pane fade" id="feature3" role="tabpanel">
            <p><strong><b>Artistic approach</b></strong><br>
            Providing an artistic approach to CAD, making it <br>more intui-tive and easier to master. <br>
We are always with you! Offering over 100’s of <br>training videos, classroom training and live technical <br>support world-wide.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid  py-4 text-center">
 
  <h1 class="display-6">Introducing 3Design CAD Jewelry Design <br>Software</h1>
  <p class="lead">Cutting edge 3D software for jewelry design that will keep your business ahead</p>

<div class="row align-items-center justify-content-center"> 
  <!-- Left Text (icon + paragraph) -->
  <div class="col-12 col-md-5 text-start text-white mb-3 mb-md-0">
    <div class="d-flex mb-4">
      <!-- <i class="fas fa-clock fa-2x mt-1 me-3"></i> -->
      <p class="mb-0 offset-md-3">
        <strong> <i class="fas fa-clock fa-2x mt-1 me-3"></i>"3Design thinks like a jeweler"</strong><br>
        Thanks to its visually rendered interface, <br> jewelers feel at ease while using 3Design. 
        You<br> do not need to be an engineer or IT specialist <br>to use this software. 
        All you need is a <br>vision, perseverance, and an idea of how jewelry<br> is put together.
        Design like the artist that you<br> are!
      </p>
    </div>

    <div class="d-flex">
    <p class="mb-0 offset-md-3">
        <strong>  <i class="fas fa-thumbs-up fa-2x mt-1 me-3"></i>
        “Using the modules like your workshop tools”</strong><br>
        3Design thinks like a jeweler! Tucked away in a <br> virtual drawer within the jeweler’s bench you <br> can find all the tools required to create various <br> settings and shaped rings. If you need more, <br> the solid and the sketch modules interact<br>  together building unique items that can be<br>  modified at a later stage.
      </p>
  </div>
  </div>
  

<div class="col-12 col-md-2 d-flex flex-column align-items-center py-4">
  <img src="images/3design_mac_ring_discover.png" class="img-fluid mb-3" alt="3Design CAD Jewelry Design">
  <a href="#" class="btn btn-light">Buy 3DESIGN</a>
</div>


  <div class="col-12 col-md-5 ps-md-5 text-white">

  <!-- First Icon + Text -->
  <div class="d-flex mb-4">
    <p class="mb-0">
      <strong> <i class="fas fa-laptop fa-2x mt-1 me-3"></i>“The only jewelry CAD solution for Mac”</strong><br>
      There is no need to compromise with 3Design. <br>
      Our unique hybrid platform allows you to run <br>
      3Design on Macintosh and Windows. Install on <br>
      both platforms and share files easily between <br>systems.
    </p>
  </div>

  <!-- Second Icon + Text -->
  <div class="d-flex mb-4 py-3">
   <p class="mb-0">
      <strong>   <i class="fas fa-key fa-2x mt-1 me-3"></i>
      “Work in CAD as you would at the bench”</strong><br>
      Within the jeweler’s bench, tools such as <br>custom stone builder, advanced pave and <br>microsetting give you the precision required for <br>each of your designs; allowing you to focus on <br>your creation and let 3Design do the hard <br> work.
    </p>
  </div>
</div>
</div>

</div>

<!-- Section with video on click -->
<section class="position-relative text-center text-white" style="background: url('images/mbr-2-2000x1500.jpg') center center / cover no-repeat; height: 700px;">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 d-flex py-5 align-items-center flex-column">
        <h1 class="fw-bold" style="color: #0B844F;">Introducing 3Design Jewelry CAD Software</h1>
        <p class="mt-3 px-3" style="max-width: 800px;">
          <strong>3DESIGN</strong> uses the latest graphic display technology for a real time realistic design experience. Inspired by video game graphic technology, 3Design uses the latest OpenGL, resulting in fast computations and remarkable visuals.  
          <br>
          <strong>3DESIGN</strong> makes CAD / CAM for jewelry a intense moment of creative pleasure.
        </p>

        <!-- Play Button under text -->
<div class="mt-5 position-relative">
  <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal"
     class="text-danger" style="font-size: 80px;">
    <i class="bi bi-play-circle-fill"></i>
  </a>
</div>


        <!-- Buttons inside the text div -->
        <div class="d-flex gap-5 mt-5 pt-3 flex-wrap justify-content-center">
          <a href="#" class="btn btn-outline-light">Contact a 3DESIGN representative</a>
          <a href="#" class="btn btn-outline-light">Tour 3DESIGN Features</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark border-0">
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
        <iframe id="youtubeVideo"
                  src="https://www.youtube.com/embed/6SPc2iJ1nJ0?rel=0&autoplay=1"
                  title="YouTube video" allowfullscreen allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>



<section class="py-5" style="background-color: #1B242D;">
  <div class="container px-4">
    <div class="d-flex flex-column justify-content-between" style="min-height: 300px;">

      <!-- Top Buttons -->
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-2 mb-4">
  <a href="#" class="btn btn-outline-light rounded-pill fs-4 ms-md-4">Update my 3Design</a>
  <a href="#" class="btn btn-outline-light rounded-pill fs-4">Training</a>
  <a href="#" class="btn btn-outline-light rounded-pill fs-4 me-md-4">What is the 3Design price?</a>
</div>


      <!-- Bottom Text and Button -->
      <div class="row text-white align-items-center mb-2">
        <div class="col-md-8">
          <p class="mb-0 fs-5">
            <strong>3Design CAD software –</strong> Bridging the gap between jewelers <br>and retailers.<br>
            Register for a Live Demonstration to find out more!
          </p>
        </div>
        <div class="col-md-4 text-md mt-3 mt-md-0">
          <a href="#" class="btn btn-outline-light fs-4 rounded-pill">Register Now</a>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- footer -->
  <?php require_once('footer.php') ?>

  <script>
  // Form validation script
  (function () {
    'use strict';
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
  
</>
  </body>
   </html>