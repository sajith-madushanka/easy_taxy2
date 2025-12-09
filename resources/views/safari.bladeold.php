    <!doctype html>
    <html class="h-100" lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
        <meta name="HandheldFriendly" content="true">
        <title>EzTaxi</title>
        {{-- <link rel="stylesheet" href="css/theme.min.css"> --}}
        <link rel="stylesheet" href="css/theme.css">
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
                <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="{{ route('landing') }}">
                    <img src="img/webp/logo.webp" style="height: 36px;width:auto" alt="abstract image" class="img-fluid shadow">
                </a>

            
            </div>
        </nav>

        <main>
        <div class="bg-dark">
            <div class="container px-vw-6 py-vh-5 container-2 container2_low">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7 text-lg-center" data-aos="fade-right">

                        <img src="img/webp/safari.webp"     width= "81%"  alt="abstract image" class="img-fluid position-relative rounded-5 shadow aos-init aos-animate" data-aos="fade-up">

                    </div>
                    <!-- <div class="col-12 col-lg-5" id="safari_div"  data-aos="fade-left">
                        <div id='dropdowntitle' class='dropdowntitle'> Destination</div>
                        <div class="custom-select">
                            <select class="form_field">
                                <option>Select the destination</option>
                                <option >Udawalawa</option>
                                <option>Thangalla</option>
                                <option>Mirissa</option>
                            </select>
                        </div>
                    
                        <div id='dropdowntitle' class='dropdowntitle'> Persons</div>
                        <input  class="form_field" type="number" placeholder="Enter Amount of People" >
                        
                        </input>
                        <div id='dropdowntitle' class='dropdowntitle'> Date</div>
                        <input  class="form_field" type="date" >
                        
                        </input>
                        <div id='dropdowntitle' class='dropdowntitle'> Duration</div>
                        <div class="custom-select">
                            <select class="form_field">
                                <option>Half Day</option>
                                <option >Full Day</option>
                            </select>
                        </div>
                        <div id='dropdowntitle' class='dropdowntitle'>Food</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" style="padding: 7px" type="checkbox" id="flexSwitchCheckDefault">
                            <div id='dropdowntitle' class='dropdowntitle' style="padding: 7px"> No</div>
                        </div>
                        <div id='dropdowntitle' class='dropdowntitle'> Return Trip</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" style="padding: 7px" type="checkbox" id="flexSwitchCheckDefault">
                            <div id='dropdowntitle' class='dropdowntitle' style="padding: 7px"> No</div>
                        </div>
                        
                        <div class="price-box">
                            <a onclick="privateBook()"  class="btn btn-xl btn-light select-book">Book Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div> -->
                    <div class="col-12 col-lg-5" id="safari_div"  data-aos="fade-left">
                                <h2 class="confirmation-title">Comming Soon!</h2>
                                <p class="confirmation-text">
                                This feature is currently under development. Please stay tuned for updates. We appreciate your patience.To book Safari Please contact our Whatsapp (+94774373545) for now.
                                </p>
                                <div class="confirmation-btn">
                                    <a href="/" class="btn btn-xl btn-light select-book">Home</a>
                                </div>
                    </div>
                    <div class="col-12 col-lg-5" id="safaribook" data-aos="fade-left" style=" display: none;" >
                        <div id='dropdowntitle' class='dropdowntitle'>Full Name</div>
                        <input  class="form_field"  type="text" placeholder="Enter Name" >
                        
                        </input>
                        <div id='dropdowntitle' class='dropdowntitle'> Mobile Number in Use </div>
                        <div  class="form_field"  style="padding: 0;" >
                            <input id="telinput" style="border: none;"   class="form_field" type="tel" >
                        
                        </input>
                        </div>
                    
    
                        <div id='dropdowntitle' class='dropdowntitle'>Note</div>
                        <input   class="form_field" type="text" placeholder="Enter Note" >
                        
                        </input>
                    
                        
                        
                        <div class="price-box">
                            <h2 class="price-2" data-aos="zoom-in-left">6000 LKR</h2>
                        </div>
                        <div class="price-box">
                            <a href="#"  class="btn btn-xl btn-light select-book">Proceed
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>
    </main>


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet" />
        <script src="js/aos.js"></script>
        <script>
            AOS.init({
                duration: 800, // values from 0 to 3000, with step 50ms
            });
        </script>
        <script>
            $("#telinput").intlTelInput({
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
            });
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

                console.log(scrollpos)
            })

            function openSeats() {
                $('#seat_div').hide();
                $('#seat_div_popup').show();
            }

            function closeSeats() {
                $('#seat_div_popup').hide();
                $('#seat_div').show();
            }


            function minibusBook() {
                // document.getElementById('minibusbook').removeAttribute('data-aos');
                // $('#seat_div').hide();
                // $('#minibusbook').show();
                // document.getElementById('minibusbook').setAttribute('data-aos', 'fade-right');
                // $('#minibusbook').addClass('ani_text');

                $('#seat_div').fadeOut('slow');
                $('#seat_div').hide(); // Hide seat_div with fadeOut animation
                $('#minibusbook').fadeIn('slow');
                // Show minibusbook with fadeIn animation

                // Update data-aos attributes dynamically
                // $('#seat_div').attr('data-aos', 'fade-right');
                // $('#minibusbook').attr('data-aos', 'fade-left');
            }

            function privateBook() {

                $('#private_div').fadeOut('slow');
                $('#private_div').hide();
                $('#privatebook').fadeIn('slow');
            }

            function privateBook() {

                $('#safari_div').fadeOut('slow');
                $('#safari_div').hide();
                $('#safaribook').fadeIn('slow');
            }
        </script>

    </body>

    </html>