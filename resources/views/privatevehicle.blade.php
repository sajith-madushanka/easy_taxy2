<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 list-group list-group-horizontal">
                <li class="nav-item">
                    <a class="nav-link fs-5"  href="{{ route('landing') }}" aria-label="Homepage">
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

    <main>
    <div class="bg-dark">
        <div class="container px-vw-6 py-vh-5">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-6 " data-aos="fade-right">

                    <img src="img/webp/abstract6.webp" width="70%"  alt="abstract image" class="img-fluid position-relative rounded-5 shadow aos-init aos-animate" data-aos="fade-up">

                </div>
                <div class="col-12 col-lg-6"  id="private_div" data-aos="fade-left">
                    <div id='dropdowntitle' class='dropdowntitle'> Pick up</div>
                    <div class="custom-select">
                        <select class="form_field" id="pickup">
                            <option>Enter Pick up location</option>
                        </select>
                    </div>
                    <div id='dropdowntitle' class='dropdowntitle' > Destination</div>
                    <div class="custom-select">
                        <select class="form_field" id="destination">
                            <option>Enter Destinaton</option>
                        </select>
                    </div>
                    <div id='dropdowntitle' class='dropdowntitle' > Type</div>
                    <div class="custom-select">
                        <select class="form_field" id="type">
                            <option value="car">Car (Max 3 passengers)</option>
                            <option value="van">Van (Max 7 passengers)</option>
                            <option value="commuter">Commuter (Max 10 passengers)</option>
                        </select>
                    </div>
                    <div id='dropdowntitle' class='dropdowntitle'> Date</div>
                    <input  class="form_field" type="date"  id="date">
                       
                    </input>
                    <div id='dropdowntitle' class='dropdowntitle'> Time</div>
                    <input  class="form_field" type="time"  id="time">
                       
                    </input>
                    <div id='dropdowntitle' class='dropdowntitle'> Return Trip</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="return" style="padding: 7px" type="checkbox" >
                        <div id='dropdowntitle' class='dropdowntitle' style="padding: 7px"> No</div>
                    </div>
                    <div id="error-message" style="display: none; color: red;"></div>

                    <div class="price-box" id="price_div" style=" display: none;">
                        <h2 class="price-2" id="price" data-aos="zoom-in-left"></h2>
                    </div>
                    <div class="price-box"  id="book_now" style=" display: none;">
                        <a onclick="privateBook()"  class="btn btn-xl btn-light select-book">Book Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5" id="privatebook" data-aos="fade-left" style=" display: none;">
                    <div class='dropdowntitle'>Full Name</div>
                    <input id="name" class="form_field"  type="text" placeholder="Enter Name" >
                       
                    </input>
                    <div id='dropdowntitle' class='dropdowntitle'> Mobile Number in Use </div>
                    <div  class="form_field"  style="padding: 0;" >
                        <input id="telinput" style="border: none;"   class="form_field" type="tel" >
                    
                    </input>
                    </div>
                   
  
                    <div id='dropdowntitle' class='dropdowntitle'>Note</div>
                    <input  id="note" class="form_field" type="text" placeholder="Enter Note" >
                       
                    </input>
                    <div id="error-message2" style="display: none; color: red;"></div>
                    
                    
                    <div class="price-box">
                        <h2 class="price-2" id="price_2" data-aos="zoom-in-left"></h2>
                    </div>
                    <div class="price-box">
                        <a onclick=" Book()"   class="btn btn-xl btn-light select-book">Proceed
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5" data-aos="fade-left" id="booking-confirmation" style="display: none;">
                        <div class="confirmation-message">
                            <h2 class="confirmation-title">Booking Confirmed!</h2>
                            <p class="confirmation-text">
                                Your booking has been successfully confirmed. You will receive a confirmation message shortly.
                            </p>
                            <div class="confirmation-btn">
                                <a href="/" class="btn btn-xl btn-light select-book">Home</a>
                            </div>
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

        
        $(document).ready(function() {

            load_data();
        });

        function load_data(keyword) {
            // Send AJAX request
            $.ajax({
                url: '{{ url("private/pickups") }}',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',

                success: function(response) {
                     $('#pickup').html(response.data);

                }
            });

        }

        document.getElementById('pickup').addEventListener('change', function() {
            const pickup = this.value;
            
            if (pickup) {
                $.ajax({
                    url: '{{ url("private/destinations") }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        pickup: pickup
                    },
                    dataType: 'json',

                    success: function(response) {
                        $('#destination').html(response.data);

                    }
                });
            } else {
                document.getElementById('destination-select').innerHTML = '<option value="" disabled selected>Select the destination</option>';
            }
        });

        document.getElementById('destination').addEventListener('change', function() {

            updatePrice();
            
        });

        document.getElementById('type').addEventListener('change', function() {

            updatePrice();

        });

        document.getElementById('return').addEventListener('change', function() {
            updatePrice();
        });

        function updatePrice() {
            $.ajax({
                    url: '{{ url("private/get_price") }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        pickup:$('#pickup').val(),
                        type: $('#type').val(),
                        destination: $('#destination').val(),
                        return_trip:document.getElementById('return').checked

                    },
                    dataType: 'json',

                    success: function(response) {
                        $('#price_div').show();
                        $('#price').text(parseFloat(response.price).toFixed(2) + "LKR");
                        $('#price_2').text(parseFloat(response.price).toFixed(2) + "LKR");
                        $('#book_now').show();

                    }
                });
        }

        function privateBook() {

            var pickup = $('#pickup').val();
            var destination = $('#destination').val();
            var type = $('#type').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var returnTrip = $('#return').prop('checked');

            var errorMessage = $('#error-message');
            errorMessage.hide();

            if (pickup === "Select the pickup location" || pickup === "") {
                errorMessage.text("Please select a valid pick-up location.");
                errorMessage.show();
                return; // Exit function if there is an error
            }

            if (destination === "Select the destination" || destination === "") {
                errorMessage.text("Please select a valid destination.");
                errorMessage.show();
                return;
            }

            if (type === "") {
                errorMessage.text("Please select a vehicle type.");
                errorMessage.show();
                return;
            }

            if (date === "") {
                errorMessage.text("Please select a valid date.");
                errorMessage.show();
                return;
            }

            if (time === "") {
                errorMessage.text("Please select a valid time.");
                errorMessage.show();
                return;
            }

           

            $('#private_div').fadeOut('slow');
            $('#private_div').hide();
            $('#privatebook').fadeIn('slow');
        }

        function Book() {

            var pickup = $('#pickup').val();
            var destination = $('#destination').val();
            var type = $('#type').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var returnTrip = $('#return').prop('checked');
            var name = $('#name').val();
            var telinput = $('#telinput').val();

            var errorMessage = $('#error-message2');
            errorMessage.hide();

            if (name === "" || name === null) {
                errorMessage.text("Please Enter The Name.");
                errorMessage.show();
                return; // Exit function if there is an error
            }

            if (telinput === "" || telinput === null) {
                errorMessage.text("Please Enter The Phone Number.");
                errorMessage.show();
                return;
            }
            if (pickup === "Select the pickup location" || pickup === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return; // Exit function if there is an error
            }

            if (destination === "Select the destination" || destination === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return;
            }

            if (type === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return;
            }

            if (date === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return;
            }

            if (time === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return;
            }

            $.ajax({
                url: '{{ url("private/book") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    pickup:$('#pickup').val(),
                    type: $('#type').val(),
                    destination: $('#destination').val(),
                    return_trip:document.getElementById('return').checked,
                    date:$('#date').val(),
                    time:$('#time').val(),
                    name:$('#name').val(),
                    telinput:$('#telinput').val(),
                    note:$('#note').val()
                },
            
                dataType: 'json',

                success: function(response) {
                    $('#privatebook').hide();
                    $('#booking-confirmation').show();
                }
            });
        }

      
    </script>

</body>

</html>