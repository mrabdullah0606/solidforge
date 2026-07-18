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
    <link rel="stylesheet" type="text/css" href="dropdown.css">
  </head>
  <style>
    .quotebtn:hover{background-color:#F5DD4C; }
     .sectioncontent{
        background-image: url(images/about.jpg);
        background-repeat: no-repeat;
        /*background-size: cover;*/
        /*background: linear-gradient(to bottom, #121212, #333333);*/
        font-family: Arial, sans-serif;
        background-attachment: fixed;
        /*background: #eab510;*/
        background-color: #F3c533;
        background-position: right;
    }
     /* nav{background-color: #000;} */
   
    .btn:hover svg {
        fill: #000000; /* Hover color */
    }
    .bg-silver{background-color: #949597; color: #fff;border: none;}
    .line-height-30{
        line-height: 30px;
    }
    .bg-grey{background-color: #3b3b3b !important;}
    .text-warning{
        color: #f7df50 !important;
    }
    .bg-yellow{background-color: #F3c533;}
    /*.imgg{border-radius: 20px; margin-top: -200px;}*/
  </style>
  <body>
    <!-- header -->
    <div class="bg-header">
        <!-- navbar -->
        <?php require_once('navbar.php') ?>
        

        <!-- header -->
        <section class="container-fluid d-lg-flex align-items-center sectioncontent text-dark">
            <div class="col-md-6 col-12 p-5">
               <h1 class="fs-2">About Solidforge</h1>
               <p class="line-height-30">Since 2003, we have been helping businesses adopt Additive Manufacturing (AM) technologies to drive innovation, improve productivity, and transform the way products are designed and manufactured. In 2024, we established Solidforge Ltd. in Cyprus to provide advanced AM solutions and expert support to customers across the Middle East and beyond.</p>
               <p class="line-height-30">While our primary expertise is in the jewelry industry, where precision, surface quality, and casting reliability are essential, our solutions are designed to support organizations across a wide range of industries adopting Additive Manufacturing technologies. From dental and healthcare to manufacturing, oil and gas, defense, education, and other industrial sectors, we help businesses improve design flexibility, accelerate product development, optimize production, and achieve exceptional precision.</p>
               <p class="line-height-30">At Solidforge, we believe that successful Additive Manufacturing is about more than technology. It is about understanding our customers' needs and providing complete solutions that deliver long-term value. We work closely with every customer to recommend the right equipment, materials, software, and workflow, backed by professional training and responsive technical support.</p>
               <p class="line-height-30">Our carefully selected portfolio of world-class Additive Manufacturing solutions enables businesses to produce prototypes, casting patterns, functional parts, tooling, medical models, and custom-engineered components with outstanding accuracy, reliability, and efficiency.</p>
               <p class="line-height-30">With more than two decades of industry experience, Solidforge has built a reputation for technical expertise, dependable service, and long-term customer relationships. From initial consultation and installation to training and after-sales support, we are committed to helping our customers maximize the benefits of Additive Manufacturing and confidently embrace the future of digital manufacturing.</p>
               <p class="line-height-30">Whether you are creating intricate jewelry, developing innovative products, improving manufacturing processes, or exploring the possibilities of Additive Manufacturing for your organization, Solidforge is your trusted partner for advanced AM solutions.</p>
               <p class="mt-3 line-height-30 fw-bold">Empowering industries through Additive Manufacturing—with jewelry at the heart of our expertise.</p>
            </div>
           <!--  <div class="col-md-6 col-12 p-5">
                <img src="images/about.jpg" class="img-fluid imgg" alt="img">
            </div> -->
        </section>

        <section class="container-fluid d-lg-flex align-items-center text-dark bg-yellow">
            <div class="col-md-6 col-12 p-5">
                <img src="images/addictive-manufacturing.avif" alt="Solidforge Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 col-12 p-5">
                <h3 class="fs-4">Why Choose Solidforge?</h3>
                <ul class="list-unstyled line-height-30">
                    <li><strong>Unmatched Precision:</strong> Achieve micro-level accuracy and high-quality results in every application.</li>
                    <li><strong>Tailored Solutions:</strong> Industry-specific technologies designed to meet the unique needs of jewelry, dental, defense, and other sectors.</li>
                    <li><strong>Comprehensive Support:</strong> From product selection to training and ongoing technical assistance, we provide full support to ensure your success.</li>
                    <li><strong>Sustainability:</strong> Solidforge is committed to eco-friendly practices, using sustainable materials and minimizing waste in the production process.</li>
                </ul>
            </div>
        </section>

        <section class="container-fluid d-lg-flex align-items-center text-dark bg-yellow">
            <div class="col-md-6 col-12 p-5">
                <h3>Our Vision</h3>
                <p class="line-height-30">At <b>Solidforge</b>, we are dedicated to revolutionizing industries with the power of Additive Manufacturing. Our vision is to continue driving innovation, helping professionals—from jewelers to healthcare providers—unlock new possibilities for creativity, productivity, and success.</p>
            </div>
            <div class="col-md-6 col-12 p-5">
                <img src="images/vision.jpg" alt="Solidforge Image" class="img-fluid rounded">
            </div>
        </section>

        <section class="container-fluid d-lg-flex align-items-center text-dark bg-yellow">
            <div class="col-md-6 col-12 p-5">
               <img src="images/partnership.jpg" alt="Solidforge Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 col-12 p-5">
                 <h3>Partner with Solidforge</h3>
                <p class="line-height-30">Since 2003, we have built strong relationships with businesses across the Middle East and beyond. Whether you're a jeweler creating intricate pieces, a dental professional improving patient care, a defense contractor needing precision parts, or a manufacturer looking to streamline production, <b>Solidforge</b> has the expertise and technology to support your goals.
                    Let’s create the future—one layer at a time.
                </p>
            </div>
        </section>


    </div>


    <!-- footer -->
    <?php require_once('footer.php') ?>
  </body>
</html>