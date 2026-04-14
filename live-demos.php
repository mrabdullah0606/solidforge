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

  .custom-lang-btn {
    background-color: white;
    color: #E52729;
    border: 2px solid #E52729;
    border-radius: 50rem;
    padding: 0.5rem 1rem;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .custom-lang-btn:hover {
    background-color: #E52729;
    color: white;
    text-decoration: none;
  }

       
        .navbar{background: #000;}
  </style>
  <!-- <body> -->
  <body>
      <!-- header -->
      <?php require_once('navbar.php') ?>
     <!-- Installation section -->
     <!-- Limited Height Video Background Section -->
     <section class="py-5 text-center">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center gap-3 mb-3">
      <h1 class="mb-0 fw-bold" style="color: #1B232C;">WABINAR</h1>
      <h1 class="mb-0 fw-bold" style="color: #E52729;">LIVE</h1>
      <div style="width: 40px; height: 40px; border-radius: 50%; background-color: white; display: flex; align-items: center; justify-content: center; border: 2px solid #E52729;">
  <svg width="25" height="25" fill="#E52729" viewBox="0 0 16 16">
    <path d="M6 4.5v7l6-3.5-6-3.5z"/>
  </svg>
</div>

    </div>
    <p class="fw-bold py-5 fs-3" style="color: #E52729;">DIFFERENT DATES, LANGUAGES AND TIME ZONES AVAILABLE!</p>
  </div>
</section>

<section class="py-5 text-center" style="background-color: #1B232C; color: white;">
  <div class="container">
    <div class="row justify-content-center">
      <!-- Member 1 -->
      <div class="col-md-4 mb-4">
        <img src="images\Our_Team_3Design_Emilie.png" alt="Emilie" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Emilie BALSAMO</h5>
        <p>Senior Sales Manager</p>
        <a href="#" class="btn custom-lang-btn mb-2">Francies (CET)</a>
        <div><img src="https://flagcdn.com/fr.svg" alt="France Flag" style="width: 60px;"></div>
      </div>

      <!-- Member 2 -->
      <div class="col-md-4 mb-4">
        <img src="images\Doug-Picture-round.png" alt="Doug" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Doug KERNS</h5>
        <p>Sales Manager</p>
        <a href="#" class="btn custom-lang-btn mb-2">Amercian English</a>
        <div><img src="https://flagcdn.com/us.svg" alt="USA Flag" style="width: 70px;"></div>
      </div>

      <!-- Member 3 -->
      <div class="col-md-4 mb-4">
        <img src="images\PHOTO-POOJA-2.png" alt="Pooja" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h5>Pooja SAHNY</h5>
        <p>Distributor UK</p>
        <a href="#" class="btn custom-lang-btn mb-2">British English</a>
        <div><img src="https://flagcdn.com/gb.svg" alt="UK Flag" style="width: 70px;"></div>
      </div>
    </div>

    <!-- Centered Text Below Members -->
    <div class="mt-5">
      <h5 class="fw-bold">3DESIGN is the CAD software 100% dedicated to jewelers and watchmakers.</h5>
      <p class="mt-2 fs-5">You want to know more about our software solution?</p>
      <p class="mt-2 fs-6">Every month, you have the opportunity to participate in live 3DESIGN demonstrations, all over the world! <br>
Our experts are at your service to answer all your questions about 3DESIGN.</p>
<p class="mt-2"  style="color: #E52729;">Why choose 3DESIGN today?</p>
<p class="mt-2">1. You save time in designing your jewelry (custom-made, collections…). <br>
2. You save storage space in your store. <br>
3. You offer an innovative and different experience to your customers. <br>
4. You are more creative: create, delete, and start over again.</p>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h3>If you have any questions, contact us :</h3>
      <h4 class="mt-2">Contact Me</h4>
      <h4 class="mt-1">Fields marked with an <span class="text-danger">*</span> are required</h4>
    </div>

    <form>
      <div class="mb-3">
        <label for="name" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" style="background-color: #f9f9f9;">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" style="background-color: #f9f9f9;">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label fw-bold">Message <span class="text-danger">*</span></label>
        <textarea class="form-control" id="message" rows="4" style="background-color: #f9f9f9;"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-danger px-4">Submit</button>
      </div>
    </form>
  </div>
</section>





         <!-- footer -->
  <?php require_once('footer.php') ?>

</body>
 </html>