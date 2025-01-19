<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    <meta name="HandheldFriendly" content="true">
    <title>EzTaxi</title>
    {{-- <link rel="stylesheet" href="css/theme.min.css"> --}}
    <link rel="stylesheet" href="css/theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet" />
    <style>
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local(''),
                url('fonts/inter-v12-latin-300.woff2') format('woff2'),
                url('fonts/inter-v12-latin-300.woff') format('woff');
        }

        /* inter-400 - latin */
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local(''),
                url('fonts/inter-v12-latin-regular.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('fonts/inter-v12-latin-regular.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: local(''),
                url('fonts/inter-v12-latin-500.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('fonts/inter-v12-latin-500.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local(''),
                url('fonts/inter-v12-latin-700.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('fonts/inter-v12-latin-700.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }
    </style>


</head>

<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">
        <div class="container">
            <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center">
                <img src="img/webp/logo.webp" class="link-home" style="height: 36px;width:auto" alt="abstract image" class="img-fluid shadow">
            </a>

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 list-group list-group-horizontal">
                <li class="nav-item">
                    <a class="nav-link fs-5 link-home" href="landing" aria-label="Homepage">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="content.html" aria-label="A sample content page">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="system.html" aria-label="A system message page">
                        About Us
                    </a>
                </li>

            </ul>
            <a href="https://templatedeck.com/klar-html-template.html" aria-label="Download this template" class="btn btn-outline-light">
                <small>Book Now</small>
            </a>
        </div>
    </nav>

    <main id="mainContent">
        <div class="w-100 overflow-hidden position-relative bg-black text-white" data-aos="fade">
            <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
            <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
                <div class="row d-flex align-items-center justify-content-center py-vh-5">
                    <div class="col-12 col-xl-10">
                        <span class="h5 text-secondary fw-lighter">Our Mission</span>
                        <h1 class="display-huge mt-3 mb-3 lh-1">We want to help you get wherever you want to go in Sri
                            Lanka</h1>
                    </div>
                    <div class="col-12 col-xl-8">
                        <p class="lead text-secondary">We are a taxi service Operating from Ella.</p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-xl btn-light">Book Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-100 position-relative bg-black text-white bg-cover d-flex align-items-center">
            <div class="container-fluid px-vw-5">
                <div class="position-absolute w-100 h-50 bg-dark bottom-0 start-0"></div>
                <div class="row d-flex align-items-center position-relative justify-content-center px-0 g-5">

                    <div class="col-12 col-lg-6">
                        <a href="minibus" class="link-container zoom-image">
                            <img src="img/webp/abstract18.webp" width="2280" height="1732" alt="abstract image" class="img-fluid position-relative rounded-5 shadow " data-aos="fade-up">
                        </a>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="private-vehicle" class="link-container zoom-image">
                            <img src="img/webp/abstract6.webp" width="1116" height="1578" alt="abstract image" class="img-fluid position-relative rounded-5 shadow " data-aos="fade-up" data-aos-duration="2000">
                        </a>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="safari" class="link-container zoom-image">
                            <img src="img/webp/abstract9.webp" width="1116" height="848" alt="abstract image" class="img-fluid position-relative rounded-5 shadow " data-aos="fade-up" data-aos-duration="3000">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-dark">
            <div class="container px-vw-6 py-vh-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7 text-lg-end" data-aos="fade-right">
                        <span class="h5 text-secondary fw-lighter">What we do</span>
                        <h2 class="display-4">Explore Ella and beyond with our reliable taxi service. Convenient connections to Kandy, Nuwara-Eliya, Galle, and more. Travel hassle-free and make the most of your Sri Lankan adventure</h2>
                    </div>
                    <div class="col-12 col-lg-5" data-aos="fade-left">
                        <h3 class="pt-5">Mini Bus Service</h3>
                        <p class="text-secondary">Daily bus service with a fixed route where you can book a seat if your next destination is on our route.<br>
                            <a href="minibus" class="link-container">
                                <div class="link-fancy link-fancy-light me-2">Tell me more</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                                <a>
                        </p>
                        <h3 class="border-top border-secondary pt-5 mt-5">Private Vehicle</h3>
                        <p class="text-secondary">A car or a van specifically for you to go wherever you need to go in Sri Lanka.<br>
                            <a href="private-vehicle" class="link-container">
                                <a href="#" class="link-fancy link-fancy-light me-2">Tell me more</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </a>
                        </p>
                        <h3 class="border-top border-secondary pt-5 mt-5">Safari</h3>
                        <p class="text-secondary">A well organized safari to Yala or Udawalawa where you can enjoy wildlife hassle free.<br>
                            <a href="safari" class="link-container">
                                <a href="#" class="link-fancy link-fancy-light me-2">Tell me more</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black py-vh-3">
            <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow blck_c">

                <div class="row gx-5">
                    <div class="col-12 col-md-6">
                        <div class="card bg-transparent mb-5 " data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0 padding_tp" style="background-image: url('img/webp/abstract3.webp');min-height: 458px;margin: 15%;background-size: cover;background-position: center;">

                                <div class="p-5 card_overlay">
                                    <h2 class="fw-lighter">Ipsum dolor est</h2>
                                    <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                        erat.</p>
                                    <a href="#" class="link-fancy link-fancy-light gold">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-transparent" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0 padding_tp" style="background-image: url('img/webp/abstract2.webp');min-height: 458px;margin: 15%;background-size: cover;background-position: center;">

                                <div class="p-5 card_overlay">
                                    <h2 class="fw-lighter">Ipsum dolor est</h2>
                                    <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                        erat.</p>
                                    <a href="#" class="link-fancy link-fancy-light gold">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="p-5 pt-0 mt-5" data-aos="fade">
                            <span class="h5 text-secondary fw-lighter">More into our services</span>
                            <h2 class="display-4">There is a lot we do. Here is a small sneak peek </h2>
                        </div>
                        <div class="card bg-transparent mb-5 mt-5" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0 padding_tp" style="background-image: url('img/webp/abstract17.webp');min-height: 458px;margin: 15%;background-size: cover;background-position: center;">

                                <div class="p-5 card_overlay">
                                    <h2 class="fw-lighter">Ipsum dolor est</h2>
                                    <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                        erat.</p>
                                    <a href="#" class="link-fancy link-fancy-light gold">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-transparent" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0 padding_tp" style="background-image: url('img/webp/abstract4.webp');min-height: 458px;margin: 15%;background-size: cover;background-position: center;">

                                <div class="p-5 card_overlay">
                                    <h2 class="fw-lighter">Ipsum dolor est</h2>
                                    <p class="pb-4 text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                        erat.</p>
                                    <a href="#" class="link-fancy link-fancy-light gold">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid px-vw-5 position-relative" data-aos="fade">

            <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow blck_c">
                <div class="row d-flex align-items-center">
                    <div class="col-1"></div>
                    <div class="col-4 d-flex align-items-center bg-dark shadow rounded-5 p-0" data-aos="zoom-in-up">
                        <div class="row d-flex justify-content-center " style="background: #202020;border-radius:29px">
                            {{-- <div class="col-12">
                                    <img src="img/webp/person103.webp" width="684" height="457"
                                        alt="our CEO with some nice numbers" class="img-fluid rounded-5"
                                        loading="lazy">
                                </div> --}}
                            <div class="col-12 col-lg-10 col-xl-8 text-center my-5">
                                <p style="font-size: 18px" class="lead border-bottom pb-4 border-secondary">"To provide convenient and reliable transportation solutions, connecting travelers to Ella and neighboring tourism cities, ensuring seamless journeys and unforgettable experiences throughout Sri Lanka.”</p>
                                <p style="font-size: 16px" class="text-secondary text-center">Manjula, CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 offset-1">
                        <span class="h5 text-secondary fw-lighter">The numbers</span>
                        <h2 class="display-huge fw-bolder" data-aos="zoom-in-left">+4000</h2>
                        <p class="h4 fw-lighter text-secondary">
                            Service we provided successfully per year.
                        </p>

                        <h2 class="display-huge fw-bolder border-top border-secondary pt-5 mt-5" data-aos="zoom-in-left">100%</h2>
                        <p class="h4 fw-lighter text-secondary">
                            value per dollar.
                        </p>
                        <h2 class="display-huge fw-bolder border-top border-secondary pt-5 mt-5" data-aos="zoom-in-left">98%</h2>
                        <p class="h4 fw-lighter text-secondary">
                            Customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-dark py-vh-5">
            <div class="container px-vw-5">
                <div class="row d-flex gx-5 align-items-center">
                    <div class="col-12 col-lg-6" style="justify-content: center">
                        <div class="rounded-5 bg-black p-5 shadow blck_c" data-aos="zoom-in-right" style=" max-width: 480px;">
                            <div class="fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                            </div>
                            <p class="text-secondary lead">"Lorem ipsum dolor sit amet, consectetur tempor incididunt
                                ut labore et dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo
                                consequat."</p>
                            <div class="d-flex justify-content-start align-items-center border-secondary pt-3">

                                <div>
                                    <span class="h6 fw-5">Jane </span><br>
                                    <small class="text-secondary">Doemunsky</small>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-5 bg-black p-5 shadow mt-5 blck_c" data-aos="zoom-in-right" style=" max-width: 480px;">
                            <div class="fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                </svg>

                            </div>
                            <p class="text-secondary lead">"Lorem ipsum dolor sit amet, consectetur tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                            <div class="d-flex justify-content-start align-items-center border-secondary pt-3">
                                <div>
                                    <span class="h6 fw-5">Jane </span><br>
                                    <small class="text-secondary">Doemunsky</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="p-5 pt-0" data-aos="fade">
                            <span class="h5 text-secondary fw-lighter">What others have to say about us</span>
                            <h2 class="display-4"> Our Reviews </h2>
                        </div>
                        <div class="rounded-5 bg-black p-5 shadow mt-5 blck_c" data-aos="zoom-in-left" style=" max-width: 480px;">
                            <div class="fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                            </div>
                            <p class="lead">"Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat."</p>
                            <div class="d-flex justify-content-start align-items-center  pt-3">
                                <div>
                                    <span class="h6 fw-5">Jane </span><br>
                                    <small>Doemunsky</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <hr class="ft_hide" style="color:#FC8E01;height: 3px;background-color: #FC8E01;">
    <footer class="bg-black border-top border-dark ft_hide">
        <div class="container py-vh-4 text-secondary fw-lighter">
            <div class="row">
                <div class="col-12 col-lg-5 py-4 text-center text-lg-start">
                    <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="index.html">
                        <img src="img/webp/logo.webp" style="height: 36px;width:auto" alt="abstract image">
                    </a>

                </div>
                <div class="col border-end border-dark">
                    <span class="h6">Company</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Legal</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Career</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col border-end border-dark">
                    <span class="h6">Services</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Products</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Success Stories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">More</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <span class="h6">Support</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Legal</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Career</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="link-fancy link-fancy-light">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <hr class="ft_hide" style="color:#FC8E01 ; margin-left: auto;margin-right: auto;border: none;height: 5px;background-color: #FC8E01;width: 90%">







    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
    <script>
        AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
        });
    </script>
    <script>

    </script>
    <script>
        $(document).ready(function() {
            console.log('run');
            $("input").intlTelInput({
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
            });
            console.log('run');
        });

        var originalContent = $('#mainContent').html();
        let scrollpos = window.scrollY
        const header = document.querySelector(".navbar")
        const header_height = header.offsetHeight

        const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
        const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

        window.addEventListener('scroll', function() {

            scrollpos = window.scrollY;

            if (scrollpos >= header_height) {
                add_class_on_scroll()
            } else {
                remove_class_on_scroll()
            }

            // console.log(scrollpos)
        })

      



        // Initial click event for the link to load minibus content
    </script>

</body>

</html>