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
  </head>
  <style>
    .quotebtn:hover{background-color:#F5DD4C; }
     .sectioncontent{
        background-image: url(images/about-banner.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /*background: linear-gradient(to bottom, #121212, #333333);*/
        font-family: Arial, sans-serif;
        background-size: 200% 100%;
        height: auto;
    }
     nav{background-color: #000;}
    .hover-dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
        transform: translateY(0); /* Move the dropdown to its natural position */
    }

    /* Initially hide the dropdown and apply smooth transition */
    .dropdown-menu {
        display: none;
        opacity: 0;
        transform: translateY(-10px); /* Start from a slightly higher position */
        transition: opacity 0.3s ease, transform 0.3s ease; /* Apply smooth transition for opacity and transform */
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
    }
    .btn:hover svg {
        fill: #000000; /* Hover color */
    }
    .bg-silver{background-color: #949597; color: #fff;border: none;}
    .bg-grey{background-color: #3b3b3b;}
    .text-yellow{color: #F5DD4C;}
    .bg-yellow{background-color: #F3c533;}
  </style>
  <body>
    <!-- header -->
    <div class="bg-header">
        <!-- navbar -->
        <?php require_once('navbar.php') ?>
        

        <!-- header -->
        <section class="container-fluid bg-yellow text-dark p-5">
            <div class="container">
                <h2 class="text-center mb-4 text-dark">Privacy Policy</h2>
                <div class="card border-0 shadow p-4">
        <p class="w-75">
            At Solidforge, your privacy is of utmost importance to us. This Privacy Policy explains how we collect, 
            use, and protect your personal information when you visit our website and use our services.
        </p>

        <h4>1. Information We Collect</h4>
        <ul>
            <li><strong>Personal Identification Information:</strong> Name, email, phone number, and billing/shipping details.</li>
            <li><strong>Usage Data:</strong> IP addresses, device types, browser details, and browsing activity.</li>
            <li><strong>Cookies & Tracking Technologies:</strong> Used for improving user experience and analyzing trends.</li>
        </ul>

        <h4>2. How We Use Your Information</h4>
        <ul>
            <li>To process and complete your orders, including payments and deliveries.</li>
            <li>To improve website functionality, content, and services.</li>
            <li>To provide customer support and technical assistance.</li>
            <li>To send periodic emails and promotional offers (if opted in).</li>
            <li>To comply with legal obligations.</li>
        </ul>

        <h4>3. How We Protect Your Information</h4>
        <ul>
            <li>Secure servers and SSL encryption for data protection.</li>
            <li>Restricted access to personal information for authorized personnel only.</li>
        </ul>

        <h4>4. Sharing Your Information</h4>
        <p>We do not sell or trade your personal information. We may share it with:</p>
        <ul>
            <li>Payment processors</li>
            <li>Shipping and logistics companies</li>
            <li>Marketing and IT support providers</li>
            <li>Authorities if required by law</li>
        </ul>

        <h4>5. Your Rights</h4>
        <p>Under Cypriot law, you have rights to:</p>
        <ul>
            <li>Access, correct, or delete your personal information.</li>
            <li>Withdraw consent for marketing communications.</li>
        </ul>

        <h4>6. Cookies</h4>
        <p>Cookies enhance your browsing experience. You may disable them in browser settings.</p>

        <h4>7. Third-Party Links</h4>
        <p>Our website may contain links to third-party sites with separate privacy policies.</p>

        <h4>8. Data Retention</h4>
        <p>We retain your data as long as necessary for our business and legal obligations.</p>

        <h4>9. International Data Transfers</h4>
        <p>Your data may be transferred outside Cyprus for service operations.</p>

        <h4>10. Children’s Privacy</h4>
        <p>We do not collect data from individuals under 18.</p>

        <h4>11. Changes to This Privacy Policy</h4>
        <p>We may update this policy, and changes will be posted on this page.</p>

        <h4>12. Contact Us</h4>
        <p>
            <strong>Solidforge</strong><br>
            Email: <a href="mailto:ask@solid-forge.com">ask@solid-forge.com</a><br>
            Phone: +357 95 585859<br>
            Address: 12 Avlonas Street, Suite 101, Kiti 7550, Larnaca, Cyprus.
        </p>
    </div>
</div>
        </section>

     


    </div>


    <!-- footer -->
    <?php require_once('footer.php') ?>
  </body>
</html>