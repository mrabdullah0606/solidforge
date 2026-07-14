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
    <h1 class="display-4 fw-bold">3Design Jewelry Design Software <br>Top Features</h1>
    <p class="lead mt-3">In over 20 years of development, 3Design has provided jewelers with additional jewelry design <br>tools to enhance their skills.</p>
  </div>
</section>


<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">
      <!-- Column 1 -->
      <div class="col-md-3 mb-4">
        <div class="ratio ratio-16x9 mb-3">
          <iframe src="https://www.youtube.com/embed/zNqE8aaMRXc" title="YouTube video" allowfullscreen></iframe>
        </div>
        <h5 class="fw-bold">New design interface for V9</h5>
        <em>“When beauty means efficiency”</em>
        <p class="mt-2">The viewport has been extended to the full screen, and new transparent windows maximize the workspace and facilitate your jewelry designs.A brand new quick access toolbar allows you to easily drag & drop your favorite tools and find them faster whichever module you are in.</p>
      </div>

      <!-- Column 2 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
          <iframe src="https://www.youtube.com/embed/yCIH6vpSJ3E?autoplay=1" title="Bypass Builder" allowfullscreen></iframe>
        </div>
        <h5 class="fw-bold">Advanced bypass builder</h5>
        <em>“Custom crossover designs, instantly”</em>
        <p class="mt-2">Easily adjust the parameters of the rails and obtain automatically a swept bypass shank. Various profiles for 3D wedding bands and ring designs. Use the curved and bending feature wrap your shank around the center stone setting.</p>
      </div>

      <!-- Column 3 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
          <iframe src="https://www.youtube.com/embed/V589srHx6RA?controls=0" title="Reporting Features" allowfullscreen></iframe>
        </div>
        <h5 class="fw-bold">Complete reporting features</h5>
        <em>“Material cost report, blue prints, be a pro”</em>
        <p class="mt-2">Report features have been completely revamped for the V9. You can customize your reports and add calculated cost per material.used in all your jewelry designs of 3D halo rings, signet rings and more. Add company logo to your report, name and website. Each report can be adjusted to show as many information as you require</p>
      </div>

      <!-- Column 4 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
          <iframe src="https://www.youtube.com/embed/i59tZTLayfc?controls=0" title="Honeycomb Modeling" allowfullscreen></iframe>
        </div>
        <h5 class="fw-bold">Baguettes honeycomb modeling</h5>
        <em>“Wider controls in the creation of ajours”</em>
        <p class="mt-2">With the use of the retopology feature you can directly set the baguette shapes to apply on your 3D halo rings and wedding band designs.This feature can also be applied from 3Shaper basic tools and on the honeycomb designs to perfect the overall aspect of the ajour shapes.</p>
      </div>
    </div>
  </div>
</section>






<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">
      <!-- Column 1 -->
      <!-- Column 1 -->
<div class="col-md-3 mb-4">
  <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/yCIH6vpSJ3E?controls=0&modestbranding=1&rel=0&showinfo=0" title="Bypass Builder" allowfullscreen></iframe>
  </div>
  <h5 class="fw-bold">Twist & torsades</h5>
  <em>“Multipipe tool got some additional strength”</em>
  <p class="mt-2">The 3Design jewelry design software can twist from a single curve a given profile and dynamically change the number of layers, the direction, number of twists and even the overall distance from the curve. In a few adjustments you can obtain beautiful ropes you can add within your 3D wedding bands and halo rings.</p>
</div>

<!-- Column 2 -->
<div class="col-md-3 mb-4">
  <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/co8iLT_0Qyo?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video" allowfullscreen></iframe>
  </div>
  <h5 class="fw-bold">Freeform deformations</h5>
  <em>“Choose from a large selection of distortions”</em>
  <p class="mt-2">From a deformation envelope built automatically around your selected jewelry design, you can Sub-Divide the built mesh then, using basic 3Shaper tools, transform the mesh and adjust the distortions as desired. Envelope modifications bring unlimited capabilities to transform any 3D stone or ring.</p>
</div>


      <!-- Column 3 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
      <iframe src="https://www.youtube.com/embed/Uls4yGzqEf0" title="Video 3" allowfullscreen></iframe>

        </div>
        <h5 class="fw-bold">Material creation</h5>
        <em>“Easily create your own materials”</em>
        <p class="mt-2">Introduce materials creation in 3Design from your own information or from the presets! you can define and redefine the characteristics of a given 3D stone or any material by assigning its density and reflection for real time renderings. Materials information can then be retrieved for reporting.</p>
      </div>

      <!-- Column 4 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
      <iframe src="https://www.youtube.com/embed/H1i1VXZKR84" title="Video 4" allowfullscreen></iframe>

        </div>
        <h5 class="fw-bold">Parametric 3D bracelet builder</h5>
        <em>“Build bracelets and incorporate texts”</em>
        <p class="mt-2">From features already in place in 3Design such as the ring size builder you can re-apply a series of other features together to other 3D jewels for further construction and customize a completely new process built-in for your own repetitive tasks. Thanks to the parametric construction this is easy.</p>
      </div>
    </div>
  </div>
</section>



<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">
      <!-- Column 1 -->
<div class="col-md-3 mb-4">
  <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/SOx1qTN8xlA?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 1" allowfullscreen></iframe>
  </div>
  <h5 class="fw-bold">Circular duplications</h5>
  <em>“Easy duplication tools to quickly build”</em>
  <p class="mt-2">The duplication tools of 3Design bring a wide panel of possibilities for your jewelry designs with the linear duplication in colomns and rows, but also with the circular and spherical duplication building quick and parametric copies of your 3D stones wherever you want them to be.</p>
</div>

<!-- Column 2 -->
<div class="col-md-3 mb-4">
  <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/kLWiKuANnJo?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 2" allowfullscreen></iframe>
  </div>
  <h5 class="fw-bold">Cathedral shank</h5>
  <em>“Custom crossover designs instantly”</em>
  <p class="mt-2">Thanks to the parametric finger size feature, 3D signet rings, halo rings and wedding bands can be easily associated to one unique finger parameter which later on allows users to apply unlimited modifications so the construction follows every single step made within the original design.</p>
</div>


      <!-- Column 3 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
      <iframe src="https://www.youtube.com/embed/0ktZ-H5UQbc?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 3" allowfullscreen></iframe>

        </div>
        <h5 class="fw-bold">Quick cluster setting</h5>
        <em>“Duplicate items to create new ones”</em>
        <p class="mt-2">3D stones and belts are easily built with the 3Design jewelry design software associated tools. Adding prongs follows easily the process with the 3D stones positions as references for the pave prongs. Offset on borders can easily be adjusted for a desired visual look.</p>
      </div>

      <!-- Column 4 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
      <iframe src="https://www.youtube.com/embed/kG3MLCsQsmY?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 4" allowfullscreen></iframe>

        </div>
        <h5 class="fw-bold">Belts & claws</h5>
        <em>“Two tools operating independantly”</em>
        <p class="mt-2">Quick creations of 3D stone belts & claws which can be associated with each other to create a perfect parametric link between them and insure the creation of associative 3D halo rings, 3D wedding bands and pendants. Direct controls on screen from handles insure accuracy and perfect shape.</p>
      </div>
    </div>
  </div>
</section>



<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">
      <!-- Column 1 -->
<div class="col-md-3 mb-4">
<div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/thDD2xO1IHo?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 1" allowfullscreen></iframe>
</div>

  <h5 class="fw-bold">Honeycomb ajour</h5>
  <em>“Jeweled pattern for underside of rings”</em>
  <p class="mt-2">The honeycomb tool allows beautiful result under gallery and inside shank ajours styles. The 3D Ring scooping tool comes as a perfect complement to remove the material within the shank and build the inner cap. With the pave and jewelling tools then we can ajour.</p>
</div>

<!-- Column 2 -->
<div class="col-md-3 mb-4">
<div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/38QmevhNTHw?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 2" allowfullscreen></iframe>
</div>
  <h5 class="fw-bold">3D Halo ring <br>construction</h5>
  <em>“Parametric design can be saved as symbols”</em>
  <p class="mt-2">Loft creation and perfect organization within the construction tree allows an easy association of a halo base. The 3D stone size, shape can help defining the halo height. It can be easily controlled as well as linked to the size finger diameter and the size of the 3D wedding band or halo ring center stone.</p>
</div>


      <!-- Column 3 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
      <iframe src="https://www.youtube.com/embed/0ktZ-H5UQbc?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 3" allowfullscreen></iframe>

        </div>
        <h5 class="fw-bold">Channel & shanks</h5>
        <em>“Perfect for 3D Halo Rings Projects”</em>
        <p class="mt-2">Variable channel tool is a powerful feature in the 3Design jewelry design software, allowing to build a parametric channel that will decrease and increase in size and number of stones as when the main stone changes. Associated to the claw tool you can secure the center 3D stone to the halo ring or wedding band.</p>
      </div>

      <!-- Column 4 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/SEhVg8n7h40?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 3" allowfullscreen></iframe>
</div>
        <h5 class="fw-bold">Filigree 3D band</h5>
        <em>“Filigree pattern from an image”</em>
        <p class="mt-2">Easy creation of curves on top of the imported image for 3D ring design. The pipe tool smoothly builds the Filigree portion which can then be easily duplicated to create the repeating parts. The filigree once achieved can then be wrapped at the matching finger size.</p>
      </div>
    </div>
  </div>
</section>



<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">
      <!-- Column 1 -->
<div class="col-md-3 mb-4">
<div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/V9bLilwu-S4?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 1" allowfullscreen></iframe>
</div>
  <h5 class="fw-bold">Engraved letters, logo <br>cut-out</h5>
  <em>“Parametric stands or insert tools”</em>
  <p class="mt-2">Add your own logos and texts to your jewelry designs to achieve perfect boolean operations and obtain parametric attributes. Changing the 3D signet ring, halo ring or wedding band size will recompute the letters & logos where needed and keep same depth of cut whatever size has been applied as a change.</p>
</div>

<!-- Column 2 -->
<div class="col-md-3 mb-4">
<div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/fkZOsy6zbII?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 2" allowfullscreen></iframe>
</div>
  <h5 class="fw-bold">Bypass ring shaper</h5>
  <em>“Custom crossover designs  <br>instantly”</em>
  <p class="mt-2">Effective creation of 3D signet ring, halo ring or wedding band with the ring size builder associated to the new bypass ring builder tool allows to shape and sweep the ring shank. Using basic 3Shaper tools available as entry level in 3Design you can shape the way the shank meets with the bridge tool.</p>
</div>


      <!-- Column 3 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/zPAnjhcrsVY?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 3" allowfullscreen></iframe>
</div>
        <h5 class="fw-bold">Measurement tools</h5>
        <em>Thickness, material amount, curve analysis”</em>
        <p class="mt-2">Caliper is aimed to read thickness of your objects. The software then weighs and computes the amount of material you will need to cast your jewelry designs. Curve Analysis let you know the length of a 3-dimensional curve. Analyze Physical Properties detects the position of center of gravity and area of your design.</p>
      </div>

      <!-- Column 4 -->
      <div class="col-md-3 mb-4">
      <div class="ratio ratio-16x9 mb-3">
  <iframe src="https://www.youtube.com/embed/9QPipi1dULE?controls=0&modestbranding=1&rel=0&showinfo=0" title="Video 4" allowfullscreen></iframe>
</div>
        <h5 class="fw-bold">3D texturing</h5>
        <em>“Cover your 3D jewels with sensitive textures”</em>
        <p class="mt-2">Surfaces can serve as base location to fill with a texture. Independently, your 3D signet ring, halo ring or wedding band zones can be filled with textures coming from different sources such as bas relief, greyscale conversion, built-in textures generator and heighfield created items inside 3Design software.</p>
      </div>
    </div>
  </div>
</section>


<div class="text-center my-4">
  <button type="button" class="btn btn-success rounded-pill d-inline-flex align-items-center gap-2 px-4 py-2"
          onmouseover="this.classList.replace('btn-success', 'btn-light')"
          onmouseout="this.classList.replace('btn-light', 'btn-success')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
         class="bi bi-images" viewBox="0 0 16 16">
      <path d="M4.502 4a.5.5 0 0 0 0 1h6.996a.5.5 0 0 0 0-1H4.502z"/>
      <path d="M0 3a2 2 0 0 1 2-2h7.5a.5.5 0 0 1 .5.5V4h4a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H5.5a.5.5 0 0 1-.5-.5V12H2a2 2 0 0 1-2-2V3zm10.5-.5V4H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h3.5V6.5a.5.5 0 0 1 .5-.5H13a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H11a.5.5 0 0 0-.5.5z"/>
    </svg>
    <b> 3DESIGN GALLERY</b>
  </button>
</div>

<section class="py-5">
  <div class="w-100 bg-success text-white py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Text -->
        <div class="col-md-8">
          <p class="mb-2 fs-5">
            Create amazing 3D Jewels with or without computer knowledge.
          </p>
          <p class="fw-bold fs-5 mb-0">
            Come and see how efficient 3Design is!<br>
            Register for a Live Demonstration.
          </p>
        </div>

        <!-- Right Button -->
        <div class="col-md-4 text-md-end mt-4 mt-md-0">
          <button type="button" class="btn text-white border border-white px-4 py-2"
                  style="background-color: #1B242D;">
            REGISTER NOW
          </button>
        </div>
      </div>
    </div>
  </div>
</section>





      <!-- footer -->
  <?php require_once('footer.php') ?>
</body>
 </html>