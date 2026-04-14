<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- font links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <style>
            .font-1{
                font-family: "Quicksand", sans-serif;
            }
            .dropdown-toggle::after{
                display: none !important;
            }
            .w-8{
                width: 8%;
            }
            .w-42{
                width: 42%;
            }
            .fs-18{
                font-size: 18px;
            }
            .fs-24{
                font-size: 24px;
            }
            .vh-92{
                height: 92vh;
            }
            .vh-80{
                height: 80vh;
            }
            .header-bg{
                background-image: url(images/header-desktop.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            .Product-bg{
                background-image: url(images/1_03d4ba0a-43f5-45fc-a622-bcb147c7c99d.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 106% 100%;
            }
            .brand-bg{
                background-image: url(images/1_1x_82506f60-4c61-4d8d-880d-39a43b54da86.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 106% 100%;
            }
            .technology-bg{
                background-image: url(images/1x_339b11a1-7905-41e7-b8f0-97e00911f0c2.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            .moldless-bg{
                background-image: url(images/Moldless.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            .print-bg{
                background-image: url(images/1x.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            .stone-setting-bg{
                background-image: url(images/stone-setting-destop.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            .stone-setting-2-bg{
                background-image: url(images/stone-setting-2-desktop.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            .workflow-bg{
                background-image: url(images/ceb019b346d621b45603cba767ac198c010b5876291cc4-njRwkt.webp);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            @media screen and (max-width: 768px) { 
                .header-bg{
                    background-image: url(images/header-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100% 100%;
                }
                .stone-setting-2-bg{
                    background-image: url(images/stone-setting-2-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100% 100%;
                }
                .stone-setting-bg{
                    background-image: url(images/stone-setting-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100% 100%;
                }
                .print-bg{
                    background-image: url(images/print-bg-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100% 100%;
                }
                .moldless-bg{
                    background-image: url(images/Moldless-bg-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100% 100%;
                }
                .technology-bg{
                    background-image: url(images/technology-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100% 100%;
                }
                .brand-bg{
                    background-image: url(images/brand-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 106% 100%;
                }
                .Product-bg{
                    background-image: url(images/Product-mob.webp);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 106% 100%;
                }
                .fs-16sm{
                    font-size: 16px;
                }
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/1.webp" alt="logo" class="w-50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link font-1 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                3D Printers
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-1 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Materials
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-1 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Software
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-1 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-1 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Support
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link font-1 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Company
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex justify-content-end w-25" role="search">
                        <button class="btn btn-primary rounded-5 me-3 py-1">Consumer</button>
                        <svg class="w-8 mx-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <svg class="w-8 mx-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </form>
                </div>
            </div>
        </nav> -->
        <?php require_once('navbar.php') ?>

        <!-- header -->
        <header class="container-fluid vh-100 header-bg pt-3 pt-md-5">
            <div class="col-12 col-md-5 px-md-4 mx-auto text-white text-center">
                <h1 class="display-4 fw-semibold">WaxJet 510</h1>
                <p class="fs-3 fw-light">WaxJet 3D Printing Precision Perfected Born for K-Gold Jewelry Casting</p>
            </div>
        </header>

        <!-- Product  -->
        <div class="container-fluid Product-bg py-5 ">
            <div class="col-md-5 px-md-4 mx-auto text-white text-center mb-5">
                <h2 class="display-4 fw-bold">Product upgrade comparison</h2>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <div class="card bg-primary text-center text-white p-2 p-md-4" style="width: 23rem;">
                    <h3>WaxJet 510</h3>
                    <div class="border-0 border-bottom">
                        <img src="images/WaxJet_8091ed1a-c07f-44b6-8d40-412bcba0e151.webp" class="w-50 d-block mx-auto mb-4" alt="WaxJet">
                    </div>
                    <div class="card-body px-0 ">
                        <div class="border-0 border-bottom pb-2">
                            <p class="fw-light mb-0">Printing Mode</p>
                            <h5>XHD Mode: 2900*2900*1700 DPI</h5>
                        </div>
                        <div class="border-0 border-bottom py-2">
                            <p class="fw-light mb-0">Layer Thickness</p>
                            <h5>15μm</h5>
                        </div>
                        <div class="border-0 border-bottom py-2">
                            <p class="fw-light mb-0">Printing Material</p>
                            <h5>Red Wax + White Wax</h5>
                        </div>
                        <div class="border-0 border-bottom py-2">
                            <p class="fw-light mb-0">Material Specifications</p>
                            <h5>1.50kg/bottle + 1.60kg/bottle</h5>
                        </div>
                        <h5>Prototype Verification High-precision Model Production</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand -->
        <div class="container-fluid vh-100 px-0 brand-bg py-5 ">
            <div class="col-11 col-md-8 mx-auto text-center text-white pt-3">
                <h2 class="display-4  fw-bold">Brand New Precision</h2>
                <div class="d-md-flex mt-5">
                    <div class="col-12 col-md-4">
                        <h4 class="fs-3 fw-bold">2900*2900*1700 DPI</h4>
                        <p class="fw-light fs-18 lh-sm">sets a new standard for precision in jewelry 3D printing.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="fs-3 fw-bold">15μm per layer</h4>
                        <p class="fw-light fs-18 lh-sm">represents much smoother, clearer details, less post-processing.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="fs-3 fw-bold">lower costs</h4>
                        <p class="fw-light fs-18 lh-sm">A mold created using a wax pattern that requires less polishing translates to lower cost.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Technology and Material -->
        <div class="container-fluid vh-100 px-0 technology-bg py-5 ">
            <div class="col-12 col-md-8 mx-auto text-center text-white pt-3">
                <h2 class="display-5 fw-bold mb-3">Technology and Material</h2>
                <h5 class="fs-4">Capacity Upgrade</h5>
                <div class="d-flex justify-content-center mt-5">
                    <div class="col-5 col-md-4">
                        <h4 class="display-5 fw-medium">10 <span class="fw-light fs-4">%</span></h4>
                        <p class="fw-light fs-18 lh-sm">material costs reduced by</p>
                    </div>
                    <div class="col-5 col-md-4">
                        <h4 class="display-5 fw-medium">65 <span class="fw-light fs-4">%</span></h4>
                        <p class="fw-light fs-18 lh-sm">Yield increased by over</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- moldless -->
        <div class="container-fluid vh-92 px-0 moldless-bg py-5 ">
            <div class="col-12 col-md-8 mx-auto text-center text-black pt-3">
                <h2 class="display-5 fw-bold mb-3">Moldless Manufacturing</h2>
                <p class="fw-light fs-2">Reduce mold-making and retouching costs, cutting time to market by 2/3.</p>
            </div>
        </div>
        <!--  -->
        <!-- <div class="container-fluid vh-100 px-0 stone-setting-2-bg py-5 d-flex align-items-center">
            <div class="col-6">
                <div class="col-9 mx-auto text-white pt-3 px-4">
                    <h2 class="display-5 fw-bold mb-3">Stone-setting chain</h2>
                    <p class="fw-light fs-24 lh-sm">Printing time: 1hr7min</p>
                    <p class="fw-light fs-24 lh-sm">Wax pattern weight: 4.2g</p>
                    <p class="fw-light fs-24 lh-sm">Usage: Setting gemstones on the wax model can be precisely positioned and angled, reducing the need for cutting and wasting precious metals.</p>
                    <h3 class="fs-1s fw-bold mb-3">Compared with the traditional process</h3>
                </div>
            </div>
        </div> -->
        
        <div id="carouselExample" class="carousel slide" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid vh-100 px-0 stone-setting-2-bg py-5 d-flex align-items-center">
                        <div class="col-6">
                            <div class="col-9 mx-auto text-white pt-3 px-4">
                                <h2 class="fs-1 fw-bold mb-3">Stone-setting chain</h2>
                                <p class="fw-light fs-18 lh-sm">Printing time: 1hr7min</p>
                                <p class="fw-light fs-18 lh-sm">Wax pattern weight: 4.2g</p>
                                <p class="fw-light fs-18 lh-sm">Usage: Setting gemstones on the wax model can be precisely positioned and angled, reducing the need for cutting and wasting precious metals.</p>
                                <h3 class="fs-4 fw-bold mb-3">Compared with the traditional process</h3>
                                <div class="d-flex">
                                    <div class="col-5">
                                        <div class="card border-0 bg-transparent">
                                            <img src="images/26_1.avif" class="w-42 d-block mx-auto" alt="26">
                                            <div class="card-body">
                                                <p class="text-white text-center">Shorten the time to market</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="card border-0 bg-transparent">
                                            <img src="images/11_778ce49a-6837-4e6d-bec1-05bd0146bb42.webp" class="w-42 d-block mx-auto" alt="26">
                                            <div class="card-body">
                                                <p class="text-white text-center">Reduce <br> labor costs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid vh-100 px-0 stone-setting-bg py-5 d-flex align-items-center">
                    <div class="col-6">
                            <div class="col-9 mx-auto text-white pt-3 px-4">
                                <h2 class="fs-1 fw-bold mb-3">Stone-setting chain</h2>
                                <p class="fw-light fs-18 lh-sm">Printing time: 1hr7min</p>
                                <p class="fw-light fs-18 lh-sm">Wax pattern weight: 4.2g</p>
                                <p class="fw-light fs-18 lh-sm">Usage: Setting gemstones on the wax model can be precisely positioned and angled, reducing the need for cutting and wasting precious metals.</p>
                                <h3 class="fs-4 fw-bold mb-3">Compared with the traditional process</h3>
                                <div class="d-flex">
                                    <div class="col-5">
                                        <div class="card border-0 bg-transparent">
                                            <img src="images/26_1.avif" class="w-42 d-block mx-auto" alt="26">
                                            <div class="card-body">
                                                <p class="text-white text-center">Shorten the time to market</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="card border-0 bg-transparent">
                                            <img src="images/11_778ce49a-6837-4e6d-bec1-05bd0146bb42.webp" class="w-42 d-block mx-auto" alt="26">
                                            <div class="card-body">
                                                <p class="text-white text-center">Reduce <br> labor costs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- print -->
        <div class="container-fluid vh-80 px-0 print-bg py-md-5 d-md-flex align-items-center">
            <div class="col-md-6">
                <div class="col-md-9 mx-auto text-center text-white pt-3 px-4">
                    <h2 class="display-5 fw-bold mb-1 mb-md-3">WaxJetPrint</h2>
                    <p class="fw-light fs-16sm fs-24 lh-sm">WaxJetPrint is an all-in-one software that simplifies digital jewelry file slicing. It provides user-friendly composing and printing procedures for beginners.</p>
                </div>
            </div>
        </div>
        <!-- Workflow -->
        <div class="container-fluid px-0 workflow-bg py-5">
            <div class="col-11 mx-auto text-center text-black pt-3">
                <h2 class="fs-1 fw-bold mb-5">User-Friendly Workflow</h2>
                <div class="row pt-3">
                    <div class="col-12 my-3 col-lg-4 px-3">
                        <div class="card border-0">
                            <img src="images/2_1x_bed46edc-f093-4728-bebc-cd588c909417.webp" class="card-img-top" alt="bed">
                            <div class="card-body px-0">
                              <h4 class="fw-medium">24/7 Printing, <br>
                                Unattended & Continuous</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3 col-lg-4 px-3">
                        <div class="card border-0">
                            <img src="images/4_1x_0e982916-bad0-41c1-af8a-ab0ede0df103.webp" class="card-img-top" alt="bed">
                            <div class="card-body px-0">
                              <h4 class="fw-medium">Enhanced Wax, Ideal<br>
                                for Complex Designs</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3 col-lg-4 px-3">
                        <div class="card border-0">
                            <img src="images/6_1x_13707b02-9be6-43ea-83c9-f8854d2d9290.webp" class="card-img-top" alt="bed">
                            <div class="card-body px-0">
                              <h4 class="fw-medium">Contact-Free Support Removal，<br>
                                Easier Post-Processing</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Workflow -->
        <div class="container-fluid px-0 bg-black py-5">
            <div class="col-12 col-lg-11 mx-auto text-white pt-3">
                <h2 class="fs-1 fw-bold text-center mb-5">Technical Parameter</h2>
                <div class="row border">
                    <div class="col-12 px-0">
                        <div class="d-md-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Printing Technology</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">MultiJet Printing (MJP)</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Material Name</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">FFWJ1200</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">FFWJ3200</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Build VolumeBuild Volume</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">289*208*100mm</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Material Type</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Part material</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Support material</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Printing Mode</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">XHD:2900*2900*1700 DPl; layer thickness:15um</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Net Weight</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">1.5kg/bottle</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">1.6kg/bottle</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Dimensional Accuracy</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">±0.04mm/20mm</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Composition</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">100% wax</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Wax support material</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Power supply</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">AC220-240v,50hz,4kw</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Color</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Red</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">White</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Equipment Dimensions</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">1352*775*1600mm</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Density@95°C(Liquid)</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">0.79g/cm³</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">0.85g/cm³</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Net Weight</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">480kg</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Melting Point</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">68℃</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">55℃</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Gross Weight</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">630kg</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Softening Point</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">63℃</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">_</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Package Size</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">1530*900*1837mm</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Volumetric Shrinkage</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">1.1%</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">_</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Slicing Software</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">WaxJetPrint</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Linear Shrinkage</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">0.7%</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">_</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Supported File Format</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">.stl/.slc</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Needle PenetrationHardness</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">9</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">_</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Email Notification</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">√</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Ash Content</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3"><-0.01%</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">_</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Hard Disk Capacity</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">500g</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Description</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">High-precision castingwax</p>
                                </div>
                                <div class="col-4 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Hands-free dissolvable support material</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Connectivity</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Network 10/100/1000 Ethernet/UsB</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Supported Operating System</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Windows7 /Windows 10(64bit)</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-12 col-lg-5 d-flex border-0 border-end">
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Working Environment</p>
                                </div>
                                <div class="col-6 align-self-center">
                                    <p class="fw-medium mb-0 p-3">Temperature:18-26°C; humidity: 30-70%</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 d-flex">
                            </div>
                        </div>
                        <!-- <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Build VolumeBuild Volume</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">289*208*100mm</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Printing Mode</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">XHD:2900*2900*1700 DPl; layer thickness:15um</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Dimensional Accuracy</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">±0.04mm/20mm</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Power supply</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">AC220-240v,50hz,4kw</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Equipment Dimensions</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">1352*775*1600mm</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Net Weight</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">480kg</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Gross Weight</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">630kg</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Package Size</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">1530*900*1837mm</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Slicing Software</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">WaxJetPrint</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Supported File Format</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">.stl/.slc</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Email Notification</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">√</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Hard Disk Capacity</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">500g</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Connectivity</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Network 10/100/1000 Ethernet/UsB</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Supported Operating System</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Windows7 /Windows 10(64bit)</p>
                            </div>
                        </div>
                        <div class="d-flex border-0 border-bottom">
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Working Environment</p>
                            </div>
                            <div class="col-6 py-3 align-self-center">
                                <p class="fw-medium mb-0">Temperature:18-26°C; humidity: 30-70%</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('footer.php') ?>

<!-- slider -->
<script>
    // Click to slide functionality
    const carouselItems = document.querySelectorAll('.carousel-item');
    carouselItems.forEach(item => {
        item.addEventListener('click', () => {
            const carousel = new bootstrap.Carousel(document.querySelector('#carouselExample'));
            carousel.next(); // Moves to next slide on click
        });
    });
</script>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>