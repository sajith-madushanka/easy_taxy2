<!DOCTYPE html>
<html>

<head>
    <title>EzTaxy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>
    

    <div class="theme-loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" logo-theme="theme6">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="{{ url('/dashboard') }}">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>

                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="assets/images/logo.png" class="img-radius" alt="User-Profile-Image">
                                    <span>{{$data->name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                                    <li>
                                        <a href="{{ url('/logout') }}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ url('/dashboard') }}">
                                        <img src="assets/images/icons/ticket.ico" alt="Bus Icon" style="margin:0px 12px">
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ url('/minibus_price') }}">
                                        <img src="assets/images/icons/bus.ico" alt="Bus Icon" style="margin:0px 12px">
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Minibus</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ url('/private_price') }}">
                                        <img src="assets/images/icons/van.ico" alt="Bus Icon" style="margin:0px 12px">
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Private Vehicle</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="{{ url('/safari_price') }}">
                                        <img src="assets/images/icons/safari.ico" alt="Bus Icon" style="margin:0px 12px">
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Safari</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <div class="pcoded-content">
            <div class="pcoded-inner-content">
                
                <div class="container">
    <label for="booking-date">Select Date:</label>
    <input type="date" id="booking-date">

    <div class="card">
        <div class="card-header"><h5>Minibus Bookings</h5></div>
        <div class="card-block table-border-style">
            <table class="table">
                <thead>
                    <tr><th>#</th><th>Name</th><th>Date</th><th>Destination</th><th>Phone</th><th>Seats</th><th>Note</th><th>Price</th></tr>
                </thead>
                <tbody id="minibus-table"></tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><h5>Private Vehicle Bookings</h5></div>
        <div class="card-block table-border-style">
            <table class="table">
                <thead>
                    <tr><th>#</th><th>Name</th><th>Pickup</th><th>Destination</th><th>Date</th><th>Time</th><th>Type</th><th>Phone</th><th>Return Trip</th><th>note</th><th>Price</th></tr>
                </thead>
                <tbody id="private-table"></tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><h5>Safari Bookings</h5></div>
        <div class="card-block table-border-style">
            <table class="table">
                <thead>
                    <tr><th>#</th><th>Name</th><th>Phone</th><th>Seats</th><th>Price</th></tr>
                </thead>
                <tbody id="safari-table"></tbody>
            </table>
        </div>
    </div>
</div>

                <!-- Main-body end -->

                <div id="styleSelector">

                </div>
            </div>
        </div>
                </div>
            </div>
          
            <!-- remark popup -->
            <button style="display:none" id="remark" href="#rmModal" class="trigger-btn" data-toggle="modal"></button>
            <div id="rmModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="page-body">
                            <div class="row">
                                <div class="card twitter-card" style="width:100%">
                                    <div class="card-header">
                                        <i class="icofont icofont-dashboard-web"></i>
                                        <div class="d-inline-block">
                                            <h5>Machine 1</h5>
                                        </div>
                                    </div>
                                    <div class="card-block text-center">
                                        <div class="row">
                                            <div class="col-3 b-r-default">
                                                <h2 id="mst_1"></h2>
                                                <p class="text-muted">Screen Type</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="mss_1"></h2>
                                                <p class="text-muted">Screen Status</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="msc_1"></h2>
                                                <p class="text-muted">Screen Count</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="mfc_1"></h2>
                                                <p class="text-muted">Garment Count</p>
                                            </div>
                                            <div class="col-3">
                                                <h2 id="mdt_1"></h2>
                                                <p class="text-muted">Down Time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card fb-card" style="width:100%">
                                    <div class="card-header">
                                        <i class="icofont icofont-dashboard-web"></i>
                                        <div class="d-inline-block">
                                            <h5>Machine 2</h5>
                                        </div>
                                    </div>
                                    <div class="card-block text-center">
                                        <div class="row">
                                            <div class="col-3 b-r-default">
                                                <h2 id="mst_2"></h2>
                                                <p class="text-muted">Screen Type</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="mss_2"></h2>
                                                <p class="text-muted">Screen Status</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="msc_2"></h2>
                                                <p class="text-muted">Screen Count</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="mfc_2"></h2>
                                                <p class="text-muted">Garment Count</p>
                                            </div>
                                            <div class="col-3">
                                                <h2 id="mdt_2"></h2>
                                                <p class="text-muted">Down Time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card dribble-card" style="width:100%">
                                    <div class="card-header">
                                        <i class="icofont icofont-dashboard-web"></i>
                                        <div class="d-inline-block">
                                            <h5>Machine 3</h5>
                                        </div>
                                    </div>
                                    <div class="card-block text-center">
                                        <div class="row">
                                            <div class="col-3 b-r-default">
                                                <h2 id="mst_3"></h2>
                                                <p class="text-muted">Screen Type</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="mss_3"></h2>
                                                <p class="text-muted">Screen Status</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="msc_3"></h2>
                                                <p class="text-muted">Screen Count</p>
                                            </div>
                                            <div class="col-2">
                                                <h2 id="mfc_3"></h2>
                                                <p class="text-muted">Garment Count</p>
                                            </div>
                                            <div class="col-3">
                                                <h2 id="mdt_3"></h2>
                                                <p class="text-muted">Down Time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- delete popup -->
            <button style="display:none" id="del" href="#myModal" class="trigger-btn" data-toggle="modal"></button>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header flex-column">
                            <div class="icon-box">
                                <i class="ti-trash"></i>
                            </div>
                            <h4 class="modal-title w-100">Are you sure?</h4>
                            <button type="button" id="close_del_2" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" onclick="delete_data_popup()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    document.getElementById("booking-date").addEventListener("change", function () {
    let selectedDate = this.value;
    fetch(`/bookings?date=${selectedDate}`)
        .then(response => response.json())
        .then(data => {
            updateTable("minibus-table", data.minibus, ["name","date", "price_row.destination", "phone", "seats","note", "price"]);
            updateTable("private-table", data.private, ["name", "price_row.pickup","price_row.destination","date","time","price_row.type","phone", "return_trip","note", "price"]);
            updateTable("safari-table", data.safari, ["name", "phone", "seats", "price"]);
        })
        .catch(error => console.error("Error fetching data:", error));
});

function updateTable(tableId, data, fields) {
    let tbody = document.getElementById(tableId);
    tbody.innerHTML = "";
    data.forEach((item, index) => {
        let row = `<tr><td>${index + 1}</td>` + 
                  fields.map(field => {
                      // Check if the field is a nested property like price_row.destination
                      let fieldValue = field.split('.').reduce((obj, key) => obj && obj[key], item);
                      return `<td>${fieldValue || "N/A"}</td>`;  // Display "N/A" if the value is undefined or null
                  }).join("") + 
                  `</tr>`;
        tbody.innerHTML += row;
    });
}
window.addEventListener("load", function () {
    const today = new Date().toISOString().split("T")[0]; // Get today's date in YYYY-MM-DD format
    const bookingDateInput = document.getElementById("booking-date");
    bookingDateInput.value = today; // Set the input value to today's date
    bookingDateInput.dispatchEvent(new Event("change")); // Manually trigger the change event
});



  
</script>

</html>