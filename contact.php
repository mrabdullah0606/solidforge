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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <style>
    .btn:hover svg {
        fill: #000000; /* Hover color */
    }
    .bg-silver{background-color: #949597; color: #fff;border: none;}
    .bg-primary {
  background: #bc9864 !important; }
.text-grey{color:#3b3b3b;}
 .bg-grey{background-color: #3b3b3b;}
.ftco-section {
  padding: 7em 0;
  background-color: #F3c533;
   }

.ftco-no-pt {
  padding-top: 0; }

.ftco-no-pb {
  padding-bottom: 0; }

.heading-section {
  font-size: 36px;
 /* color: #fff;*/ }

.img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

.form-control {
  height: 50px;
  background: #949597;
  color: rgba(255, 255, 255, 0.8) !important;
  font-size: 14px;
  border-radius: 5px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: none;
  padding-left: 20px;
  padding-right: 20px; }
  .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: rgba(255, 255, 255, 1) !important; }
  .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: rgba(255, 255, 255, 1) !important; }
  .form-control:-ms-input-placeholder {
    /* IE 0+ */
    color: rgba(255, 255, 255, 1) !important; }
  .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: rgba(255, 255, 255, 1) !important; }
  .form-control:focus, .form-control:active {
    border-color: #bc9864 !important;
    background: rgba(59, 59, 59, 1); }

textarea.form-control {
  height: inherit !important; }

.wrapper {
  width: 100%; }

.contact-wrap h3 {
  /*color: #fff;*/ }

.dbox {
  width: 100%;
  margin-bottom: 25px;
  padding: 0 20px; }
  @media (min-width: 768px) {
    .dbox {
      margin-bottom: 0;
      padding: 0; } }
  .dbox p {
    margin-bottom: 0; }
    .dbox p span {
      font-weight: 500;
      color: #bc9864;
      display: block; }
    .dbox p a {
      color: rgba(255, 255, 255, 0.8); }
  .dbox .icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #bc9864;
    margin: 0 auto;
    margin-bottom: 20px; }
    .dbox .icon span {
      font-size: 20px;
      color: #000; }
  .dbox .text {
    width: 100%; }

.btn {
  padding: 12px 16px;
  cursor: pointer;
  border-width: 1px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 400;
  -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  position: relative;
  margin-bottom: 20px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .btn:hover, .btn:active, .btn:focus {
    outline: none !important;
    -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
    -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
    box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important; }
  .btn.btn-primary {
    background: #bc9864 !important;
    border-color: #bc9864 !important;
    color: #000;
    text-transform: uppercase;
    font-weight: 600; }
    .btn.btn-primary:hover, .btn.btn-primary:focus {
      border-color: #a57f48 !important;
      background: #a57f48 !important; }

.contactForm .label {
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 600; }

.contactForm .form-control {
  border: none; }

.contactForm .btn {
  width: 100%;
  display: block; }

#contactForm .error {
  color: #f65c78;
  font-size: 12px; }
.form-group{margin-top: 10px;}
#contactForm .form-control {
  font-size: 16px;

   }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: red; }

#form-message-success {
  color: #28a745;
  font-size: 20px;
  font-weight: 700; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-size: 16px;
  font-weight: 500; }
  .quotebtn:hover{background-color:#F5DD4C; }
  .text-co{
    color: #3b3b3b;
  }
  .fs-14{
    font-size: 14px;
  }
  .timeline {
      position: relative;
      max-width: 600px;
      margin: 50px auto;
  }
  .timeline::before {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #3b3b3b;
      top: 0;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
  }
  .timeline-item {
      position: relative;
      width: 50%;
      padding: 20px;
  }
  .timeline-item:nth-child(odd) {
      left: 0;
  }
  .timeline-item:nth-child(even) {
      left: 50%;
  }
  .timeline-content {
      background: #949597;
      color: #F5DD4C;
      padding: 20px;
      border-radius: 8px;
      position: relative;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  .timeline-item:nth-child(1)::before {
      content: url('image2.svg');
  }
  .timeline-item:nth-child(2)::before {
      content: url('image2.svg');
  }
  .timeline-item:nth-child(3)::before {
      content: url('image3.svg');
  }
  .timeline-item::before {
      position: absolute;
      width: 20px;
      height: 20px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1;
  }
  .timeline-item:nth-child(odd)::before {
      right: -10px;
  }
  .timeline-item:nth-child(even)::before {
      left: -10px;
  }
  .timeline-item::after {
      content: '';
      position: absolute;
      width: 0; 
      height: 0; 
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      top: 50%;
      transform: translateY(-50%);
  }
  .timeline-item:nth-child(odd)::after {
      border-left: 10px solid #3b3b3b;
      right: 10px;
  }
  .timeline-item:nth-child(even)::after {
      border-right: 10px solid #3b3b3b;
      left: 10px;
  }
  .timeline-heading {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-weight: bold;
      font-size: 18px;
      color: #3b3b3b;
  }
  .timeline-item:nth-child(odd) .timeline-heading {
      right: -120px;
  }
  .timeline-item:nth-child(even) .timeline-heading {
      left: -120px;
  }
  .custom-timeline {
      position: relative;
      max-width: 800px;
      margin: auto;
      padding: 40px 0;
  }
  .custom-timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #3b3b3b;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -2px;
  }
  .custom-timeline-step {
      position: relative;
      width: 50%;
      padding: 20px;
  }
  .custom-left {
      text-align: right;
      left: 0;
  }
  .custom-right {
      text-align: left;
      left: 50%;
  }
  .custom-timeline-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    background: #bc9864;
    border: 3px solid #bc9864;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translate(-50%, -50%);
    z-index: 10;
  }
  .custom-timeline-icon img {
      width: 28px;
      height: 28px;
  }
  .custom-timeline-content {
      background: #949597;
      color: white;
      padding: 15px;
      border-radius: 8px;
      display: inline-block;
      max-width: 250px;
      position: relative;
      bottom: 25px;
  }
  
  .custom-timeline-step:nth-child(odd) .custom-timeline-content::after {
    right: -20px;
    border-left-color: #005a84;
}
.custom-timeline-step:nth-child(even) .custom-timeline-content::after {
    left: -20px;
    border-right-color: #bc9864;
}
  .custom-timeline-heading {
      font-weight: bold;
      color: #bc9864;
      font-size: 18px;
      text-align: center;
      margin-bottom: 10px;
  }
  .custom-timeline-step h5 {
      margin-bottom: 5px;
      font-size: 18px;
      font-weight: bold;
  }
  .custom-timeline-step p {
      font-size: 14px;
      margin-bottom: 0;
  }
  /* Adjust icon position */
  .custom-timeline-step .custom-timeline-icon {
      top: 13px;
      transform: translate(-50%, -100%);
  }
  /* Mobile View */
  @media (max-width: 768px) {
      .custom-timeline::after {
          left: 25px;
      }
      .custom-timeline-step {
          width: 100%;
          text-align: left;
          padding-left: 50px;
      }
      .custom-timeline-icon {
          left: 25px;
          transform: translateY(-50%);
      }
      .custom-left, .custom-right {
          left: 0;
          text-align: left;
      }
      .custom-timeline-content {
          font-size: 14px;
          max-width: 100%;
      }
      .custom-timeline-heading {
          text-align: left !important;
      }
  }
  label{color: #3b3b3b; font-weight: 600;}   
  .custominput{background: #949597 !important;}
  .text-yellow{color: #F5DD4C;}
  .footlogo{margin-top: -33px;}
  .ms-6{margin-left: 4rem;}
  </style>
  <body>
    <!-- header -->
    <div class="bg-header1">
        <!-- navbar -->
        <?php require_once('navbar.php') ?>
        

        <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section text-grey">Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-6 mb-5 pt-md-5">
                              <div class="timeline d-none d-md-block">
                                <div class="timeline-item">
                                    <div class="timeline-heading">Fill Form</div>
                                    <div class="timeline-content">
                                        <!-- <h4>Invia la richiesta</h4> -->
                                        <p class="text-white fw-medium">Fill out the form below to schedule your appointment. Specifying your preferred date, time, and any additional requests or preferences.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-heading">Submit</div>
                                    <div class="timeline-content">
                                        <!-- <h4>Attendi la nostra chiamata</h4> -->
                                        <p class="fw-medium text-white">Submit your request</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-heading">Appointment</div>
                                    <div class="timeline-content">
                                        <!-- <h4>Collegati il giorno dell'appuntamento</h4> -->
                                        <p class="text-white fw-medium">We will contact you soon to confirm the appointment.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                  <div class="timeline-heading">Click The link</div>
                                  <div class="timeline-content">
                                      <!-- <h4>Attendi la nostra chiamata</h4> -->
                                      <p class="text-white fw-medium">On the day of your appointment, click the link in your email at the scheduled time. 
                                        No additional software is needed.
                                        </p>
                                  </div>
                                </div>
                              </div>
                              <div class="custom-timeline d-block d-md-none">
                                <!-- Step 1 -->
                                <div class="custom-timeline-step custom-left">
                                    <div class="custom-timeline-icon">
                                        <!-- <img src="https://img.icons8.com/ios/24/007bff/document.png" alt="Request"> -->
                                    </div>
                                    <!-- <h6 class="custom-timeline-heading">1. Request</h6> -->
                                    <div class="custom-timeline-content">
                                        <!-- <h5>Send the request</h5> -->
                                        <p>Fill out the form below to schedule your appointment. Specifying your preferred date, time, and any additional requests or </p>
                                    </div>
                                </div>
                        
                                <!-- Step 2 -->
                                <div class="custom-timeline-step custom-right">
                                    <div class="custom-timeline-icon">
                                        <!-- <img src="https://img.icons8.com/ios/24/007bff/phone.png" alt="Contact"> -->
                                    </div>
                                    <!-- <h6 class="custom-timeline-heading">2. Contact</h6> -->
                                    <div class="custom-timeline-content">
                                        <!-- <h5>Wait for our call</h5> -->
                                        <p class="text-white fw-medium">Submit your request</p>
                                    </div>
                                </div>
                        
                                <!-- Step 3 -->
                                <div class="custom-timeline-step custom-left">
                                    <div class="custom-timeline-icon">
                                        <!-- <img src="https://img.icons8.com/ios/24/007bff/video-call.png" alt="Connect"> -->
                                    </div>
                                    <!-- <h6 class="custom-timeline-heading">3. Connect</h6> -->
                                    <div class="custom-timeline-content">
                                        <!-- <h5>Connect on the day of the appointment</h5> -->
                                        <p class="text-white fw-medium">We will contact you soon to confirm the appointment.</p>
                                    </div>
                                </div>
                                <!-- step 4 -->
                                <div class="custom-timeline-step custom-right">
                                  <div class="custom-timeline-icon">
                                      <!-- <img src="https://img.icons8.com/ios/24/007bff/phone.png" alt="Contact"> -->
                                  </div>
                                  <!-- <h6 class="custom-timeline-heading">2. Contact</h6> -->
                                  <div class="custom-timeline-content">
                                      <h5>Wait for our call</h5>
                                      <p>On the day of your appointment, click the link in your email at the scheduled time. No additional software is </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="contact-wrap">
                                    <h3 class="mb-4 text-center">Get in touch with us</h3>
                                    <p class="text-co fs-14 px-4 px-md-0 fw-medium">At Solidforge, we ask visitors with inquiries to provide accurate and detailed information, including company name (if available), address, and contact details (name, email, phone number, and preferred contact time). This helps us understand your needs and provide personalized support. By gathering this information, we ensure we are engaging with serious inquiries and can prioritize our responses effectively. While we are happy to assist with any questions, this process helps us focus on those genuinely interested in our services. Thank you for your cooperation!</p>
                                    <div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
                                    <div id="form-message-success" class="mb-4 w-100 text-center">
                                    Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                      <div class="container">
                                        <div class="row">
                                          <!-- First Column -->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Company Name:</label>
                                              <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                                            </div>
                                            <div class="form-group">
                                              <label>Country:</label>
                                              <select class="form-control" name="country" id="country">
                                                <option value="">Select Country</option>
                                                <!-- Add country options here -->
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label>Email:</label>
                                              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <label>Preferred Contact Date:</label>
                                              <input type="date" class="form-control custominput" name="contact_date" id="contact_date">
                                            </div>
                                            <div class="form-group">
                                              <label>Technology That Interests You:</label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="technology[]" id="tech_3d_printers" value="3D Printers">
                                                <label class="form-check-label" for="tech_3d_printers">3D Printers</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="technology[]" id="tech_polishing" value="Polishing">
                                                <label class="form-check-label" for="tech_polishing">Polishing</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="technology[]" id="tech_design_software" value="Design Software">
                                                <label class="form-check-label" for="tech_design_software">Design Software</label>
                                              </div>
                                            </div>

                                          </div>
                                          <!-- Second Column -->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Address:</label>
                                              <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                              <label>Name:</label>
                                              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                              <label>Phone Number:</label>
                                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Country Code + Phone Number">
                                            </div>
                                            <div class="form-group">
                                              <label>Preferred Contact Time:</label>
                                              <input type="time" class="form-control" name="contact_time" id="contact_time">
                                            </div>
                                            <div class="form-group">
                                              <label>Select Preferred Communication App:</label>
                                              <select class="form-control custominput" name="communication_app" id="communication_app">
                                                <option value="">Select Choice</option>
                                                <option value="WhatsApp">WhatsApp</option>
                                                <option value="Teams">Teams</option>
                                              </select>
                                            </div>
                                            <div id="whatsappInput" class="form-group" style="display: none;">
                                              <label>WhatsApp Number:</label>
                                              <input type="text" class="form-control" name="whatsapp_number" id="whatsapp_number" placeholder="Enter WhatsApp Number">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-5">
                                          <div class="col-md-12 text-center">
                                            <input type="submit" value="Send Message" class="btn bg-grey text-yellow fw-medium">
                                          </div>
                                        </div>
                                      </div>
                                    </form>

                                    <script>
                                      document.getElementById("communication_app").addEventListener("change", function() {
                                        var selectedValue = this.value;
                                        if (selectedValue === "WhatsApp") {
                                          document.getElementById("whatsappInput").style.display = "block";
                                        } else {
                                          document.getElementById("whatsappInput").style.display = "none";
                                        }
                                      });
                                    </script>

                                   <!--  <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
   

    <!-- footer -->
    <footer class="container-fluid px-0 bg-grey py-5" data-aos="zoom-in" data-aos-duration="1500" id="contact-footer">
        <div class="col-12 col-lg-10 mx-auto border-bottom border-warning">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="col-10 col-lg-7 mx-auto mx-lg-0">
                        <a class="navbar-brand col-6 col-md-4 col-lg-3 col-xl-2" href="index.php"><img src="images/logo.png" alt="SolidForgeLogo_RGB_Red" class="w-100 footlogo"></a>
                        <div class="text text-warning ms-6 mb-2">
                          <div>Address:</div>
                          <div>Solidforge Ltd.</div>
                          <div>12 Avlonas Street</div>
                          <div>Suite 101, Kiti 7550</div>
                          <div>Larnaca, Cyprus.</div>
                      </div>
                    </div>
                </div>
                <div class="col-12 mx-auto col-lg-4">
                    <div class="text text-warning ms-6">
                     <div><span class="text-warning fw-bold fs-5">+357 9595 2316</span></div>
                     <div class="mt-2"><span class="text-warning fw-bold fs-5">info@solidforgeltd.com</span></div>
                  </div>
                </div>
                <div class="col-12 mx-auto col-lg-4">
                    <div class="text text-warning ms-5">
                        <p class="mb-0">
                            <div class="text-center">Working Days/Hours:</div>
                            <div class="text-center">Monday-Friday 8:00am-6:00pm</div>
                        </p>
                    </div>
                </div>
               <!--  <div class="col-12 mx-auto text-center col-lg-2">
                    <h4 class="text-white font-1">SolidForge</h4>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">About</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Blog</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Press</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Newsletter Signup</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Careers</a></p>
                </div> -->
            </div>
        </div>
        <div class="col-10 mx-auto pt-4">
            <div class="d-flex">
                <p class="mb-1"><a href="#" class="text-decoration-none text-warning">©  2025 SolidForge</a></p>
                <p class="mb-1 mx-4"><a href="privacy.php" class="text-decoration-none text-warning">Privacy</a></p>
                <p class="mb-1"><a href="terms.php" class="text-decoration-none text-warning">Terms</a></p>
            </div>
        </div>

    </footer>
  </body>
</html>

<script src="contact/js/jquery.min.js"></script>
  <script src="contact/js/popper.js"></script>
  <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="contact/js/bootstrap.min.js"></script> -->
  <script src="contact/js/main.js"></script>
  </body>
</html>