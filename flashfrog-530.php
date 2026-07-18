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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- font links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <style>
            
            .header-bg{
                background-image: url(images/530_web_1.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 100vh;
            }
            .second-bg{
                background-image: url(images/530_web_2.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 70vh;
            }
            .third-bg{
                background-image: url(images/530_web_3.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 61vh;
            }
            .last-bg{
                background-image: url(images/530_web_4.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 70vh;
            }
            .font-1{
                font-family: "Poppins", sans-serif;
                font-weight: 600;
            }
            .w-45px{
                width: 45px;
            }
            @media screen and (max-width: 768px) { 
                .header-bg{
                    background-image: url(images/530_mobile_1.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 76vh;
                }
                .second-bg{
                    background-image: url(images/530_mobile_2.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 75vh;
                }
                .third-bg{
                    background-image: url(images/530_mobile_3.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 75vh;
                }
                .last-bg{
                    background-image: url(images/530_mobile_4.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    height: 70vh;
                }
                .font-1{
                    font-size: 1.1rem;

                }
                .w-45px{
                    width: 25px;
                }
                .fs-3 {
                    font-size: calc(.9rem + .6vw)!important;
                }
                
            }
        </style>
    </head>
    <body>
        
        <?php require_once('navbar.php') ?>

        <!-- header -->
        <header class="container-fluid header-bg pt-3 pt-md-5"></header>

        <div class="container-fluid second-bg py-3"></div>
        <div class="container-fluid third-bg"></div>
        <div class="container-fluid last-bg"></div>

        <div class="container py-5">
            <div class="col-11 col-md-7 mx-auto text-center mt-5">
                <h1 class="font-1 mb-4">Want to learn more about the WJ530?</h1>
                <a href="#" class="btn border border-black rounded-5 ps-4 py-2 fs-3">Right Now!
                    <svg class="w-45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 7L15 12L10 17" stroke="#000000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </a>
            </div>
        </div>
        
        <!-- Product  -->
        
        <?php require_once('footer.php') ?>
    </body>
</html>