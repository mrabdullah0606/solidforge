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
        <section class="container-fluid bg-yellow text-yellow p-5">
            <div class="container">
                <h2 class="text-center mb-4 text-dark">Terms of Use</h2>

                <div class="card border-0 shadow p-4">
                    <h4>1. Acceptance of Terms</h4>
                    <p>By accessing or using the Solidforge website (the “Site”), you agree to comply with and be bound by these Terms of Use. If you do not agree to these terms, please do not use the Site.</p>

                    <h4>2. Modifications to Terms</h4>
                    <p>Solidforge reserves the right to modify these Terms at any time without prior notice. Changes will be effective immediately upon posting. Your continued use of the Site signifies your acceptance of the revised Terms.</p>

                    <h4>3. Eligibility</h4>
                    <p>By using this Site, you represent that you are at least 18 years old or the legal age of majority in your jurisdiction. If you are using the Site on behalf of an organization, you confirm that you have the authority to bind the organization to these Terms.</p>

                    <h4>4. Use of the Site</h4>
                    <p>You agree to use the Site only for lawful purposes and in accordance with all applicable laws in Cyprus and internationally. You shall not:</p>
                    <ul>
                        <li>Use the Site in any way that violates local, national, or international law.</li>
                        <li>Transmit or distribute viruses, malware, or any harmful software.</li>
                        <li>Attempt to gain unauthorized access to the Site or related systems.</li>
                    </ul>

                    <h4>5. Intellectual Property Rights</h4>
                    <p>All content on the Site, including text, graphics, logos, and software, is the property of Solidforge or its licensors and is protected under Cypriot intellectual property laws and international treaties. You may not reproduce, distribute, or modify any content without prior written consent.</p>

                    <h4>6. User-Generated Content</h4>
                    <p>By submitting content (e.g., designs, comments) to the Site, you grant Solidforge a non-exclusive, royalty-free, worldwide license to use, reproduce, and display such content. You represent that you have the rights to grant this license and that your content does not infringe on third-party rights.</p>

                    <h4>7. Privacy Policy</h4>
                    <p>Your use of the Site is also governed by our Privacy Policy. By using the Site, you consent to the collection and use of your data as described in the Privacy Policy.</p>

                    <h4>8. Limitation of Liability</h4>
                    <p>To the fullest extent permitted by Cypriot law, Solidforge shall not be liable for any direct, indirect, incidental, or consequential damages arising from your use of the Site or reliance on any information provided on the Site.</p>

                    <h4>9. Indemnification</h4>
                    <p>You agree to indemnify and hold harmless Solidforge, its affiliates, and their employees from any claims, damages, or expenses arising from your use of the Site or violation of these Terms.</p>

                    <h4>10. Third-Party Links</h4>
                    <p>The Site may contain links to third-party websites. Solidforge is not responsible for the content or practices of these external sites and does not endorse them.</p>

                    <h4>11. Governing Law and Jurisdiction</h4>
                    <p>These Terms are governed by the laws of Cyprus. Any disputes arising from these Terms or your use of the Site shall be resolved in the competent courts of Nicosia, Cyprus.</p>

                    <h4>12. Termination</h4>
                    <p>Solidforge reserves the right to terminate or suspend your access to the Site at its sole discretion, without notice, for conduct that violates these Terms.</p>

                    <h4>13. Contact Information</h4>
                    <p>For any questions regarding these Terms, please contact us at:</p>
                    <ul>
                        <li><strong>Email:</strong> ask@solid-forge.com</li>
                        <li><strong>Phone:</strong> +357 95 585859</li>
                        <li><strong>Address:</strong> 12 Avlonas Street, Suite 101, Kiti 7550, Larnaca, Cyprus</li>
                    </ul>
                </div>
            </div>
        </section>

     


    </div>


    <!-- footer -->
    <?php require_once('footer.php') ?>
  </body>
</html>