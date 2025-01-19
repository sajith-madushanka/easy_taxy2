<!DOCTYPE html>
<html>

<head>
    <title>MAS Monitoring</title>
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
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
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
                        <a href="{{ url('/') }}">
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
                                                        <h2  id="mst_1" ></h2>
                                                        <p class="text-muted">Screen Type</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <h2 id="mss_1" ></h2>
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
                                                        <h2  id="mst_2" ></h2>
                                                        <p class="text-muted">Screen Type</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <h2 id="mss_2" ></h2>
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
                                                        <h2  id="mst_3" ></h2>
                                                        <p class="text-muted">Screen Type</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <h2 id="mss_3" ></h2>
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
                                            <h4 id="s_title" class="sub-title">Insert Shift</h4>
                                            <form>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10">
                                                        <input id="s_date" type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Shift Start</label>
                                                    <div class="col-sm-10">
                                                        <input id="s_start" type="time" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Shift End</label>
                                                    <div class="col-sm-10">
                                                        <input id="s_end" type="time" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Target Screen Count</label>
                                                    <div class="col-sm-10">
                                                        <input id="s_screen" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Target Garment Count</label>
                                                    <div class="col-sm-10">
                                                        <input id="s_garment" type="text" class="form-control">
                                                    </div>
                                                </div>
                                               
                                            </form>
                                            <div style="text-align: center;">
                                                <button style="width:100px;height:30px" id="s_save" onclick=save_shift_data() class="btn btn-success btn-sm btn-round">Save</button>
                                                <button style="width:100px;height:30px"  onclick=clear_shift_data() class="btn btn-danger btn-sm btn-round">Cancel</button>
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
                                                            <input id="B_search" type="text" placeholder="Search by Shift ID ">
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
                                                <div class="row" style="margin-left: 0px;margin-right:0px;">
                                                    <div id="B_pagination" class=" col-sm-12 pagination_tab d-flex justify-content-center">
                                                        <!-- pagination from backend -->

                                                    </div>
                                                </div>

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
    var start_date = '';
    var end_date = '';
    var page = 1;
    var b_page = 1;
    var per_page = 15;
    var pair_del = "";
    var data_del = "";
    var battery_del = "";
    var export_ids = [];
    var shift_id = '';
    var nav = $('.fixed-button');
    $window.scroll(function() {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });


    $(document).ready(function() {

        if (window.location.pathname == "/admin_panel/public/shift") {

            load_shift_data(1);
        } else {
            load_data();
        }
    });



    $(document).on('click', '.pagination a', function(e) {
        // Load pagination
        if (window.location.pathname == "/shift") {
            e.preventDefault();
            b_page = e.target.innerText;
            const conv = +b_page;
            if (conv) {
                load_shift_data(e.target.innerText, $('#B_search').val());
            } else {
                const element = document.querySelector('[aria-label="' + b_page + '"]');
                b_page = element.getAttribute("href").split("=")[1]
                load_shift_data(b_page, $('#B_search').val());
            }
        }

    });



    $(document).on('input', '#B_search', function(e) {
        load_shift_data(1, e.target.value);
    });



    $(document).on('click', '.refresh_data_b', function() {
        load_shift_data(1);

    });


    $(document).on('click', '.download_csv', function() {
        if ($("#search").is(":visible")) {
            $.ajax({
                url: '{{ url("export_data") }}',
                type: 'POST',
                data: {
                    page: page,
                    keyword: $('#search').val(),
                    start: start_date,
                    end: end_date,
                    per_page: per_page
                },
                dataType: 'json',


                success: function(data) {
                    if (data) {
                        // Create a Blob with the CSV data
                        var blob = new Blob([data], {
                            type: 'text/csv'
                        });

                        // Create a temporary link element
                        var link = document.createElement('a');
                        link.href = URL.createObjectURL(blob);
                        link.download = 'pneumatic_data.csv'; // Set the download file name
                        link.click();

                        // Clean up
                        URL.revokeObjectURL(link.href);
                        link.remove();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }

            });
        } else {

        }
    });

    $(document).on('click', '#back', function() {

        load_data(page, $('#search').val(), start_date, end_date);
    });

    $(document).on('change', '#export_check', function(e) {
        if (this.checked) {
            console.log(e.target.value);
            export_ids.push(e.target.value);
        } else {
            export_ids = export_ids.filter(arrayItem => arrayItem !== e.target.value);
        }
        if (export_ids.length >= 1) {
            $('#row_data_down').show();
        } else {
            $('#search_wrap').removeClass('col-sm-3');
            $('#row_data_down').hide();
        }
    });

    $(document).on('click', '#row_data_down', function() {

        console.log(export_ids);
        $.ajax({
            url: '{{ url("export_raw_data_array") }}',
            type: 'POST',
            data: {
                ids: export_ids
            },
            dataType: 'json',


            success: function(data) {
                if (data) {
                    // Create a Blob with the CSV data
                    // console.log(data);
                    var blob = new Blob([data], {
                        type: 'text/csv'
                    });

                    // Create a temporary link element
                    var link = document.createElement('a');
                    link.href = URL.createObjectURL(blob);
                    link.download = 'raw_data_bulk.csv'; // Set the download file name
                    link.click();

                    // Clean up
                    URL.revokeObjectURL(link.href);
                    link.remove();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }

        });
    });

    function load_data() {
        // Send AJAX request
        $.ajax({
            url: '{{ url("get_data") }}',
            type: 'POST',
            data: {},
            dataType: 'json',

            success: function(response) {

                // console.log(JSON.parse(response.data.data_set).relayStatus_1)

                //screen types

                if (JSON.parse(response.data.data_set).SelectSrceen1_1 == 1) {
                    $('#st_1').text('Small')
                } else if (JSON.parse(response.data.data_set).SelectSrceen2_1 == 2) {
                    $('#st_1').text('Medium')
                } else if (JSON.parse(response.data.data_set).SelectSrceen3_1 == 3) {
                    $('#st_1').text('Large')
                } else {
                    $('#st_1').text('Not Select')
                }

                if (JSON.parse(response.data.data_set).SelectSrceen1_2 == 1) {
                    $('#st_2').text('Small')
                } else if (JSON.parse(response.data.data_set).SelectSrceen2_2 == 2) {
                    $('#st_2').text('Medium')
                } else if (JSON.parse(response.data.data_set).SelectSrceen3_2 == 3) {
                    $('#st_2').text('Large')
                } else {
                    $('#st_2').text('Not Select')
                }

                if (JSON.parse(response.data.data_set).SelectSrceen1_3 == 1) {
                    $('#st_3').text('Small')
                } else if (JSON.parse(response.data.data_set).SelectSrceen2_3 == 2) {
                    $('#st_3').text('Medium')
                } else if (JSON.parse(response.data.data_set).SelectSrceen3_3 == 3) {
                    $('#st_3').text('Large')
                } else {
                    $('#st_3').text('Not Select')
                }

                //screen status
                if (JSON.parse(response.data.data_set).screenRemoveStat_1 == 1) {
                    $('#ss_1').text('Not Available')
                } else {
                    $('#ss_1').text('Available')
                }

                if (JSON.parse(response.data.data_set).screenRemoveStat_2 == 1) {
                    $('#ss_2').text('Not Available')
                } else {
                    $('#ss_2').text('Available')
                }

                if (JSON.parse(response.data.data_set).screenRemoveStat_3 == 1) {
                    $('#ss_3').text('Not Available')
                } else {
                    $('#ss_3').text('Available')
                }

                //screen count
                $('#sc_1').text(JSON.parse(response.data.data_set).screenCount_1)
                $('#sc_2').text(JSON.parse(response.data.data_set).screenCount_2)
                $('#sc_3').text(JSON.parse(response.data.data_set).screenCount_3)


                //garment count

                $('#fc_1').text(JSON.parse(response.data.data_set).openCount_1)
                $('#fc_2').text(JSON.parse(response.data.data_set).openCount_2)
                $('#fc_3').text(JSON.parse(response.data.data_set).openCount_3)

                //down time

                var downTime_1 = convertSecondsToHMS(JSON.parse(response.data.data_set).downTime_1);
                $('#dt_1').text(downTime_1)
                var downTime_2 = convertSecondsToHMS(JSON.parse(response.data.data_set).downTime_2);
                $('#dt_2').text(downTime_2)
                var downTime_3 = convertSecondsToHMS(JSON.parse(response.data.data_set).downTime_3);
                $('#dt_3').text(downTime_3)


            }
        });

        setTimeout(function() {
                load_data();
            },
            3000);
    }

    function convertSecondsToHMS(seconds) {
        var hrs = Math.floor(seconds / 3600);
        var mins = Math.floor((seconds % 3600) / 60);
        var secs = seconds % 60;
        return hrs + 'h ' + mins + 'm ' + secs + 's';
    }

    function load_shift_data(page, keyword) {
        // Send AJAX request
        $.ajax({
            url: '{{ url("getShifts") }}',
            type: 'POST',
            data: {
                page: page,
                keyword: keyword
            },
            dataType: 'json',

            success: function(response) {
                console.log(response);
                $('#B_table').html(response.table_data);
                $('#B_pagination').html(response.links);
            }
        });

    }

    function save_shift_data() {
        // Send AJAX request
        if (shift_id != '') {
            $.ajax({
                url: '{{ url("/shift/update") }}',
                type: 'POST',
                data: {
                    id: shift_id,
                    date: $('#s_date').val(),
                    screen_count: $('#s_screen').val(),
                    garment_count: $('#s_garment').val(),
                    start_time: $('#s_start').val(),
                    end_time: $('#s_end').val()
                },
                dataType: 'json',

                success: function(response) {
                    clear_shift_data()
                    load_shift_data(1)
                }
            });
        } else {
            $.ajax({
                url: '{{ url("/shift/insert") }}',
                type: 'POST',
                data: {
                    date: $('#s_date').val(),
                    screen_count: $('#s_screen').val(),
                    garment_count: $('#s_garment').val(),
                    start_time: $('#s_start').val(),
                    end_time: $('#s_end').val()
                },
                dataType: 'json',

                success: function(response) {
                    clear_shift_data()
                    load_shift_data(1)
                }
            });
        }
    }



    function edit_shift_data(id, date, screen, garment, start, end) {
        shift_id = id;
        $('#s_date').val(date);
        $('#s_screen').val(screen);
        $('#s_garment').val(garment);
        $('#s_start').val(start);
        $('#s_end').val(end);
        $('#s_title').text("Update Shift");
        $('#s_save').text("Update");
    }

    function clear_shift_data() {
        shift_id = '';
        $('#s_date').val('');
        $('#s_screen').val('');
        $('#s_garment').val('');
        $('#s_start').val('');
        $('#s_end').val('');
        $('#s_title').text("Save Shift");
        $('#s_save').text("Save");
    }





    function delete_battery_data(id) {
        battery_del = id;
        document.getElementById('del').click();
    }

    function delete_data_popup() {

        $.ajax({
            url: '{{ url("delete_shift_data") }}',
            type: 'POST',
            data: {
                id: battery_del
            },
            dataType: 'json',

            success: function(response) {
                document.getElementById('close_del_2').click();
                if (response.deleted == 1) {
                    load_shift_data(b_page, $('#B_search').val());
                }
            }
        });


    }

    function view_shift_data(id) {

        // view = id;
        $('#mst_1').text('')
        $('#mst_2').text('')
        $('#mst_3').text('')
        $('#mss_1').text('')
        $('#mss_2').text('')
        $('#mss_3').text('')
        $('#msc_1').text('')
        $('#msc_2').text('')
        $('#msc_3').text('')
        $('#mfc_1').text('')
        $('#mfc_2').text('')
        $('#mfc_3').text('')
        $('#mdt_1').text('')
        $('#mdt_2').text('')
        $('#mdt_3').text('')
        $.ajax({
            url: '{{ url("get_data_shift") }}',
            type: 'POST',
            data: {
                id:id
            },
            dataType: 'json',

            success: function(response) {

                // console.log(JSON.parse(response.data.data_set).relayStatus_1)

                //screen types

                if (JSON.parse(response.data.data_set).SelectSrceen1_1 == 1) {
                    $('#mst_1').text('Small')
                } else if (JSON.parse(response.data.data_set).SelectSrceen2_1 == 2) {
                    $('#mst_1').text('Medium')
                } else if (JSON.parse(response.data.data_set).SelectSrceen3_1 == 3) {
                    $('#mst_1').text('Large')
                } else {
                    $('#mst_1').text('Not Select')
                }

                if (JSON.parse(response.data.data_set).SelectSrceen1_2 == 1) {
                    $('#mst_2').text('Small')
                } else if (JSON.parse(response.data.data_set).SelectSrceen2_2 == 2) {
                    $('#mst_2').text('Medium')
                } else if (JSON.parse(response.data.data_set).SelectSrceen3_2 == 3) {
                    $('#mst_2').text('Large')
                } else {
                    $('#mst_2').text('Not Select')
                }

                if (JSON.parse(response.data.data_set).SelectSrceen1_3 == 1) {
                    $('#mst_3').text('Small')
                } else if (JSON.parse(response.data.data_set).SelectSrceen2_3 == 2) {
                    $('#mst_3').text('Medium')
                } else if (JSON.parse(response.data.data_set).SelectSrceen3_3 == 3) {
                    $('#mst_3').text('Large')
                } else {
                    $('#mst_3').text('Not Select')
                }

                //screen status
                if (JSON.parse(response.data.data_set).screenRemoveStat_1 == 1) {
                    $('#mss_1').text('Not Available')
                } else {
                    $('#mss_1').text('Available')
                }

                if (JSON.parse(response.data.data_set).screenRemoveStat_2 == 1) {
                    $('#mss_2').text('Not Available')
                } else {
                    $('#mss_2').text('Available')
                }

                if (JSON.parse(response.data.data_set).screenRemoveStat_3 == 1) {
                    $('#mss_3').text('Not Available')
                } else {
                    $('#mss_3').text('Available')
                }

                //screen count
                $('#msc_1').text(JSON.parse(response.data.data_set).screenCount_1)
                $('#msc_2').text(JSON.parse(response.data.data_set).screenCount_2)
                $('#msc_3').text(JSON.parse(response.data.data_set).screenCount_3)


                //garment count

                $('#mfc_1').text(JSON.parse(response.data.data_set).openCount_1)
                $('#mfc_2').text(JSON.parse(response.data.data_set).openCount_2)
                $('#mfc_3').text(JSON.parse(response.data.data_set).openCount_3)

                //down time

                var downTime_1 = convertSecondsToHMS(JSON.parse(response.data.data_set).downTime_1);
                $('#mdt_1').text(downTime_1)
                var downTime_2 = convertSecondsToHMS(JSON.parse(response.data.data_set).downTime_2);
                $('#mdt_2').text(downTime_2)
                var downTime_3 = convertSecondsToHMS(JSON.parse(response.data.data_set).downTime_3);
                $('#mdt_3').text(downTime_3)


            }
        });

        document.getElementById('remark').click();
    }

    
</script>

</html>