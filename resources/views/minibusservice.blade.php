<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    <meta name="HandheldFriendly" content="true">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <a class="nav-link fs-5" href="{{ route('landing') }}" aria-label="Homepage">
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
                <div class="row d-flex align-items-center" style="padding-top: 100px;">
                    <div class="col-12 col-lg-7 text-lg-end" data-aos="fade-right">

                        <img src="img/webp/abstract18.webp" width="2280" height="1732" alt="abstract image" class="img-fluid position-relative rounded-5 shadow aos-init aos-animate" data-aos="fade-up">

                    </div>
                    <div class="col-12 col-lg-5" data-aos="fade-left" id="seat_div">
                        <div  class='dropdowntitle'> Destination</div>
                        <div class="custom-select">
                            <select class="form_field "   id="select_div">
                            </select>
                        </div>
                        <div  class='dropdowntitle'> Date</div>
                        <input class="form_field" id="date" onchange="get_seats(this.value)"  type="date">

                        </input>
                        <div class='dropdowntitle'> Seat No</div>
                        <div onclick="openSeats()" class="form_field" style="padding: 0;">
                            <input id="seat_name" class="form_field" style="border: none;" type="text" readonly>
                            <img src="img/webp/selected.webp" style="height: 21px;float: right; margin: 10px;"></img>
                        </div>
                        <div id="error-message" style="display: none; color: red;"></div>
                        <div class="price-box" id="price_div"  style=" display: none;">
                            <h2 class=" price-2"  id="price" data-aos="zoom-in-left"></h2>
                        </div>

                        <div class="price-box"   id="book_now" style=" display: none;">
                            <a onclick=" minibusBook()" class="btn btn-xl btn-light select-book">Book Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5" data-aos="fade-left" id="minibusbook" style=" display: none;">
                        <div  class='dropdowntitle'>Full Name</div>
                        <input id='name' class="form_field" type="text" placeholder="Enter Name">

                        </input>
                        <div  class='dropdowntitle'> Mobile Number in Use </div>
                        <div class="form_field" style="padding: 0;">
                            <input id="telinput" style="border: none;" class="form_field" type="tel">

                            </input>
                        </div>


                        <div  class='dropdowntitle'>Note</div>
                        <input class="form_field" id='note' type="text" placeholder="Enter Note">

                        </input>

                        <div id="error-message2" style="display: none; color: red;"></div>

                        <div class="price-box">
                            <h2 class="price-2" id="price_2" data-aos="zoom-in-left"></h2>
                        </div>
                        <div class="price-box">
                            <a onclick=" Book()" class="btn btn-xl btn-light select-book">Proceed
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
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
                    <div class="seat_select col-12 col-lg-5" data-aos="fade-left" id="seat_div_popup" style=" display: none;">
                        <div onclick="closeSeats()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="black" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                            </svg>
                        </div>

                        <table class="centered-table">
                            <tr>
                                <td class="seat-container">
                                    <div id="seat_1" class="seat not-selected" onclick="selectSeat(1)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        1-A
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="seat-container">
                                    <div id="seat_2" class="seat not-selected" onclick="selectSeat(2)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        2-A
                                    </div>
                                </td>
                                <td class="seat-container">
                                    <div id="seat_3" class="seat not-selected" onclick="selectSeat(3)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        2-B
                                    </div>
                                </td>
                                <td class="seat-container">
                                    <div id="seat_4" class="seat not-selected" onclick="selectSeat(4)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        2-C
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="seat-container">
                                    <div id="seat_5" class="seat not-selected" onclick="selectSeat(5)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        3-A
                                    </div>
                                </td>
                                <td class="seat-container">
                                    <div id="seat_6" class="seat not-selected" onclick="selectSeat(6)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        3-B
                                    </div>
                                </td>
                                <td class="seat-container">
                                    <div id="seat_7" class="seat not-selected" onclick="selectSeat(7)" alt="Placeholder Image"></div>
                                    <div class='name d-flex justify-content-center align-items-center'>
                                        3-C
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="confirm-btn-container">
                            <button onclick="confirmSeats()" class="confirm-btn">Confirm</button>
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
        var selected_seats = [];
        var booked_seats = [];
        var booked_seats_confirmed = [];

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
                url: '{{ url("minibus/destination") }}',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',

                success: function(response) {
                    $('#select_div').html(response.data);
                    response.booked_seats.forEach(seatNumber => {
                        let seatId = `seat_${seatNumber}`;
                        let seatElement = document.getElementById(seatId);

                        if (seatElement) {
                            seatElement.classList.remove('notselected');
                            seatElement.classList.add('selected');
                        }
                    });
                    booked_seats = response.booked_seats;

                }
            });

        }

        

        function get_seats(date) {
            booked_seats.forEach(seatNumber => {
                let seatId = `seat_${seatNumber}`;
                let seatElement = document.getElementById(seatId);

                if (seatElement) {
                    seatElement.classList.remove('selected');
                    seatElement.classList.add('notselected');
                }
            });
            $.ajax({
                url: '{{ url("minibus/date_seats") }}',
                type: 'POST',
                data: {
                date: date
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',

                success: function(response) {
                    response.booked_seats.forEach(seatNumber => {
                        let seatId = `seat_${seatNumber}`;
                        let seatElement = document.getElementById(seatId);

                        if (seatElement) {
                            seatElement.classList.remove('notselected');
                            seatElement.classList.add('selected');
                        }
                    });
                    booked_seats = response.booked_seats;
                    selected_seats = [];
                    booked_seats_confirmed = [];

                }
            });
        }

        function selectSeat(seatNumber) {
            if (booked_seats.includes(seatNumber)) {
                console.log(`Seat ${seatNumber} is already booked. Cannot select.`);
            } else {
                if (selected_seats.includes(seatNumber)) {
                    selected_seats = selected_seats.filter(item => item !== seatNumber);

                    document.getElementById(`seat_${seatNumber}`).classList.remove('selected');
                    document.getElementById(`seat_${seatNumber}`).classList.add('notselected');

                    console.log(`Deselected seat ${seatNumber}`);
                } else {
                    selected_seats.push(seatNumber);

                    document.getElementById(`seat_${seatNumber}`).classList.remove('notselected');
                    document.getElementById(`seat_${seatNumber}`).classList.add('selected');

                    console.log(`Selected seat ${selected_seats}`);
                }
            }


        }

        function confirmSeats() {
            if (selected_seats != []) {
                $seat_names = [];
                const seatMap = {
                    1: "1-A",
                    2: "2-A",
                    3: "2-B",
                    4: "2-C",
                    5: "3-A",
                    6: "3-B",
                    7: "3-C"
                };


                const seatNames = selected_seats.map(seatId => seatMap[seatId]);

                const selectedSeatsString = seatNames.join(", ");
                $('#seat_name').val(selectedSeatsString);
                $.ajax({
                    url: '{{ url("minibus/get_price") }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        selected_seats: selected_seats,
                        destination: $('#select_div').val(),
                        date: $('#date').val()
                    },
                   
                    dataType: 'json',

                    success: function(response) {
                        $('#price_div').show();
                        $('#price').text(response.price + "LKR");
                        $('#price_2').text(response.price + "LKR");
                        $('#book_now').show();
                    }
                });
                $('#seat_div_popup').hide();
                $('#seat_div').show();
            }

        }

        function Book() {

            var destination = $('#select_div').val();
            var date = $('#date').val();
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

            if (destination === "Select the destination" || destination === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return; // Exit function if there is an error
            }

            if (date === "") {
                errorMessage.text("There is an issue with your data. Please Refresh the Page.");
                errorMessage.show();
                return;
            }

                $.ajax({
                    url: '{{ url("minibus/book") }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        selected_seats: selected_seats,
                        destination: $('#select_div').val(),
                        date: $('#date').val(),
                        name: $('#name').val(),
                        phone: $('#telinput').val(),
                        note: $('#note').val()
                    },
                   
                    dataType: 'json',

                    success: function(response) {
                        $('#minibusbook').hide();
                        $('#booking-confirmation').show();
                    }
                });
        }


        function openSeats() {
            $('#seat_div').hide();
            $('#seat_div_popup').show();
        }

        function closeSeats() {
            $('#seat_div_popup').hide();
            $('#seat_div').show();
        }


        function minibusBook() {

            var destination = $('#select_div').val();
            var date = $('#date').val();

            var errorMessage = $('#error-message');
            errorMessage.hide();

            if (destination === "Select the destination" || destination === "") {
                errorMessage.text("Please select a Destination.");
                errorMessage.show();
                return; // Exit function if there is an error
            }

            if (date === "") {
                errorMessage.text("Please select a Date.");
                errorMessage.show();
                return;
            }

            // if (selected_seats.length === 0) {
            //     errorMessage.text("Please select Seats.");
            //     errorMessage.show();
            //     return;
            // }

            $('#seat_div').fadeOut('slow');
            $('#seat_div').hide();
            $('#minibusbook').fadeIn('slow');
        }


        function privateBook() {

            $('#safari_div').fadeOut('slow');
            $('#safari_div').hide();
            $('#safaribook').fadeIn('slow');
        }
    </script>

</body>

</html>