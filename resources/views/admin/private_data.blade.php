<!DOCTYPE html>
<html>

<head>
    <title>EzTaxy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <li >
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
                                <li class="active">
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
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h4 id="s_title" class="sub-title">Insert Pickup Destination Price</h4>
                                                        <div id="message-container"></div>
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pickup</label>
                                                                <div class="col-sm-10">
                                                                    <input id="pickup" type="text" class="form-control" placeholder="Enter pickup">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Destination</label>
                                                                <div class="col-sm-10">
                                                                    <input id="destination" type="text" class="form-control" placeholder="Enter destination">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Amount</label>
                                                                <div class="col-sm-10">
                                                                    <input id="amount" type="number" step="0.01" class="form-control" placeholder="Enter price">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Return Trip</label>
                                                                <div class="col-sm-10">
                                                                    <input id="return_trip" type="number" step="0.01" class="form-control" placeholder="Enter price">
                                                                </div>
                                                            </div>

                                                        </form>
                                                        <div style="text-align: center;">
                                                            <button style="width:66px;height:30px" id="s_save" onclick=save_data() class="btn btn-success btn-sm btn-round">Save</button>
                                                            <button style="width:66px;height:30px" onclick=clear_data() class="btn btn-danger btn-sm btn-round">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Bootstrap tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="pcoded-search">
                                                                    <div class="pcoded-search-box ">
                                                                        <input id="B_search" type="text" placeholder="Search by Destination ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card refresh_data_b"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive  table-container">
                                                            <table id="B_table" class="table table-hover">
                                                                <!-- table from backend -->
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

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
    var $window = $(window);
    var data_del = "";
    var data_id = '';
    var nav = $('.fixed-button');

    $window.scroll(function() {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });


    $(document).ready(function() {

        load_data();
    });

    function load_data(keyword) {
        // Send AJAX request
        $.ajax({
            url: '{{ url("private_price/getdata") }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                keyword: keyword
            },
            dataType: 'json',

            success: function(response) {
                $('#B_table').html(response.table_data);
            }
        });

    }

    $(document).on('input', '#B_search', function(e) {
        load_data(e.target.value);
    });

    $(document).on('click', '.refresh_data_b', function() {
        load_data();

    });

    function save_data() {
        // Send AJAX request
        if (data_id != '') {
            $.ajax({
                url: '{{ url("/private_price") }}/' + data_id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                data: {
                    pickup: $('#pickup').val(),
                    destination: $('#destination').val(),
                    amount: $('#amount').val(),
                    return_trip: $('#return_trip').val()
                },
                dataType: 'json',

                success: function(response) {

                    if (response.ok == 1) {
                        $('#message-container').html('<div class="alert alert-success">' + response.msg + '</div>');
                        data_id = '';
                        clear_data();
                        load_data();
                    } else {
                        $('#message-container').html('<div class="alert alert-danger">' + response.msg + '</div>');
                    }

                }
            });
        } else {
            $.ajax({
                url: '{{ url("/private_price") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    pickup: $('#pickup').val(),
                    destination: $('#destination').val(),
                    amount: $('#amount').val(),
                    return_trip: $('#return_trip').val(),
                },
                dataType: 'json',

                success: function(response) {

                    if (response.ok == 1) {
                        $('#message-container').html('<div class="alert alert-success">' + response.msg + '</div>');
                        clear_data();
                        load_data();
                    } else {
                        $('#message-container').html('<div class="alert alert-danger">' + response.msg + '</div>');
                    }

                }
            });
        }
    }

    function clear_data() {
        data_id = '';
        $('#pickup').val('');
        $('#destination').val('');
        $('#amount').val('');
        $('#return_trip').val('');
    }

    function delete_data(id) {
        data_del = id;
        document.getElementById('del').click();
    }

    function delete_data_popup() {

        $.ajax({
            url: '{{ url("/private_price") }}/' + data_del,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',

            success: function(response) {
                document.getElementById('close_del_2').click();
                if (response.ok == 1) {
                    $('#message-container').html('<div class="alert alert-success">' + response.msg + '</div>');
                    load_data();
                } else {
                    $('#message-container').html('<div class="alert alert-danger">' + response.msg + '</div>');
                    load_data();
                }


            }
        });


    }


    function edit_data(id, pickup , destination, amount,return_trip) {
        data_id = id;
        $('#pickup').val(pickup);
        $('#destination').val(destination);
        $('#amount').val(amount);
        $('#return_trip').val(return_trip);
    }
</script>

</html>