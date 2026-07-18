<?php require_once('includes/session_init.php'); ?>
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
    
.custom-3shaper-btn {
  background-color: #1B242D;
  color: #fff;
  border: 1px solid #1B242D;
  transition: background-color 0.3s, color 0.3s;
}

.custom-3shaper-btn:hover {
  background-color: #ffffff;
  color: #1B242D;
}
.img-hover-overlay::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 0, 0.3); /* Transparent yellow */
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 1;
}

.img-hover-overlay:hover::after {
  opacity: 1;
}
  .position-relative {
    overflow: hidden;
  }
       
        .navbar{background: #000;}
  </style>
  <!-- <body> -->
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
     <!-- Limited Height Video Background Section -->
     <section class="py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">3Design Gallery</h1>
    <p class="mt-3 mx-auto" style="max-width: 800px;">
      3Design’s Graphical User Interface (GUI) is recognized for its versatility within the jewelry industry. The viewport layout can be customized, tools can be arranged as favorites or kept in a dedicated floating window.
    </p>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <div class="row g-0 justify-content-center">
      <!-- 16 tightly packed image columns -->
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/3design_gallery_bangle.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_bicyclette.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_bomb_ear.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_bracelet.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_celtic_knot.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_gui_3stones.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_cross-x.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_gui_wrap.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_pendant_adv.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_ring_construction.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_ring_diamond.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_ring_fields.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_ring_halo.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_signet_ring.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_watch_diamond.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="position-relative img-hover-overlay">
          <img src="images/gallery_3stonesring-400x284.png" class="img-fluid" alt="Gallery Image">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <div class="text-center mx-auto" style="max-width: 800px;">
      <p class="fs-5 mb-4">
        <strong>3Design software</strong> brings together a set of features dedicated to help users build the most complex designs.
        This is not normal CAD. It is a CAD for the jewellery and watchmaking market, no other CAD can compare to this solution. A demonstration will give you the certainty.
      </p>
      <a href="#" class="btn custom-3shaper-btn">DISCOVER 3SHAPER</a>

    </div>
  </div>
</section>

<section class="py-5" style="background-color: #1B242D;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Side Text -->
      <div class="col-12 col-md-6 text-center text-md-start text-white">
        <h2>Making jewelry has just been made easier with software.</h2>
        <p>Skip all the painful work and free your creativity.</p>
        <p><strong>Register for a 3Design Live Demonstration now to find out more!</strong></p>
      </div>

      <!-- Right Side Button -->
      <div class="col-12 col-md-6 text-center text-md-mid">
        <a href="#" class="btn btn-light">Register Now</a>
      </div>
    </div>
  </div>
</section>








      <!-- footer -->
  <?php require_once('footer.php') ?>

</body>
 </html>