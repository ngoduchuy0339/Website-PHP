<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('/admin-web-stuff/css/foundation.css') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('myX/stuff.js') }}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('myX/index.css') }}" rel="stylesheet">    

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="{{ asset('admin-web-stuff/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-web-stuff/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-web-stuff/css/dripicon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-web-stuff/css/typicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-web-stuff/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-web-stuff/sass/css/theme.css') }}">

    <!-- pace loader -->
    <script src="{{ asset('admin-web-stuff/js/pace/pace.js') }}"></script>
    <link href="{{ asset('admin-web-stuff/js/pace/themes/orange/pace-theme-flash.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin-web-stuff/js/slicknav/slicknav.css') }}" />

    <script src="{{ asset('admin-web-stuff/js/vendor/modernizr.js') }}"></script>

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End of preloader -->

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- right sidebar wrapper -->
        <div class="inner-wrap">


            <!-- Right sidemenu -->
            <div id="skin-select">
                <!--      Toggle sidemenu icon button -->
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>
                <!--      End of Toggle sidemenu icon button -->

                <div class="skin-part">
                    <div id="tree-wrap">
                        <!-- Profile -->
                        <div class="profile">
                            <img alt="" class="" src="img/logo/icon_rt3.png">
                            <h3>Road Trip <small>admin</small></h3>

                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                {{-- <li>
                                    <a class="tooltip-tip" href="#" title="Mail">
                                        <i class=" icon-preview"></i>
                                        <span>Skin</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="blue-skin.html" title="Black Skin">Blue Skin</a>
                                        </li>
                                        <li>
                                            <a href="white-skin.html" title="White Skin">White Skin</a>
                                        </li>
                                        <li>
                                            <a href="green-skin.html" title="Blue Skin">Green Skin</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li>
                                    <a href="#">
                                        <i class=" icon-view-list-large"></i>
                                        <span>Dữ liệu</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('admin_table_user') }}" title="Table Static">Bảng khách hàng</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_table_tour') }}" title="Table Static">Bảng Tour Du Lịch</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin_table_payment') }}" title="Table Static">Bảng Thanh Toán</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- end of Menu sidebar  -->
                        <ul class="bottom-list-menu">
                            <li>Cài đặt <span class="icon-gear"></span>
                            </li>
                            <li>Hỗ trợ <span class="icon-phone"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of Rightsidemenu -->



            <div class="wrap-fluid" id="paper-bg">
                <!-- top nav -->
                <div class="top-bar-nest">
                    <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false">
                        <ul class="title-area left">
                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon">
                                <span></span>
                            </li>
                        </ul>

                        <section class="top-bar-section ">
                            <ul class="right">
                                <li class=" has-dropdown bg-white">
                                    <a class="bg-white" href="#" id="admin-top" 
                                        onclick="event.preventDefault();
                                        document.getElementById('admin-top').submit();">
                                    ><img alt="" class="admin-pic img-circle" src="../../../api.randomuser.me/portraits/thumb/men/28.jpg">
                                        <span class="admin-pic-text text-gray">Hi, {{ $admin->email ?? 'Admin' }} </span>
                                    </a>

                                    <ul class="dropdown dropdown-nest profile-dropdown">
                                        {{-- <li>
                                            <i class="icon-user"></i>
                                            <a href="#">
                                                <h4>Profile<span class="text-aqua fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-folder-open"></i>
                                            <a href="#">
                                                <h4>Account<span class="text-blue fontello-record" ></span></h4>
                                            </a>
                                        </li> --}}
                                        <li>
                                            <i class="icon-upload"></i>
                                            <a href="login.html">
                                                <a href="{{ route('admin_logout') }}">
                                                    <h4>Logout<span class="text-dark-blue fontello-record" ></span></h4>
                                                </a>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </section>
                    </nav>
                </div>
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-home"></span></a>
                    </li>
                    <li>Trang chủ
                    </li>
                </ul>
                <!-- end of breadcrumbs -->

                <main class="py-4">
                        @yield('content-admin')
                </main>

            </div>
        </div>
    </div>






    
    <!-- main javascript library -->
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin-web-stuff/js/waypoints.min.js')}}"></script>
    <script type='text/javascript' src='{{ asset('admin-web-stuff/js/preloader-script.js')}}'></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/foundation.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/foundation/foundation.html#111111.js')}}"></script>
    <!-- main edumix javascript -->
    <script type='text/javascript' src='{{ asset('admin-web-stuff/js/slimscroll/jquery.slimscroll.js')}}'></script>
    <script type='text/javascript' src='{{ asset('admin-web-stuff/js/slicknav/jquery.slicknav.js')}}'></script>
    <script type='text/javascript' src='{{ asset('admin-web-stuff/js/sliding-menu.js')}}'></script>
    <script type='text/javascript' src='{{ asset('admin-web-stuff/js/scriptbreaker-multiple-accordion-1.js')}}'></script>
    <script type="text/javascript" src="{{ asset('admin-web-stuff/js/number/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin-web-stuff/js/circle-progress/jquery.circliful.js')}}"></script>
    <script type='text/javascript' src='{{ asset('admin-web-stuff/js/app.js')}}'></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/number-progress-bar/jquery.velocity.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/number-progress-bar/number-pb.js')}}"></script>
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/loader/loader.js')}}"></script>
    <script type='text/javascript' src="{{ asset('admin-web-stuff/js/loader/demo.js')}}"></script>
    <!-- FLOT CHARTS -->
    <script src="{{ asset('admin-web-stuff/js/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{ asset('admin-web-stuff/js/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{ asset('admin-web-stuff/js/flot/jquery.flot.pie.min.js')}}" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="{{ asset('admin-web-stuff/js/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('admin-web-stuff/js/skycons/skycons.js')}}"></script>

    <script type="text/javascript">
    $(function() {
        "use strict";


        //weather icons
        var icons = new Skycons({
                "stroke": 0.06,
                "color": "Gray",
                "cloudColor": "#666666",
                "sunColor": "#92cd18",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play()

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var line_data1 = [
            [1, 800],
            [2, 1500],
            [3, 900],
            [4, 1900],
            [5, 4000],
            [6, 2800],
            [7, 2500],
            [8, 700],
            [9, 1500],
            [10, 1000],
            [11, 2000],
            [12, 4300],
            [13, 1756],
            [14, 2000],
            [15, 1500],
            [16, 1900],
            [17, 1200],
            [18, 2800],
            [19, 3200],
            [20, 2190]
        ];
        var line_data2 = [
            [1, 1800],
            [2, 2900],
            [3, 1950],
            [4, 3450],
            [5, 7000],
            [6, 5300],
            [7, 4890],
            [8, 2300],
            [9, 3900],
            [10, 2900],
            [11, 4500],
            [12, 2200],
            [13, 1120],
            [14, 1459],
            [15, 1100],
            [16, 1189],
            [17, 300],
            [18, 1250],
            [19, 1705],
            [20, 959]

        ];


        $.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#E2E6EE",
                borderWidth: 1,
                tickColor: "#E2E6EE"
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            colors: ["#333333", "#cccccc"],
            lines: {
                fill: true,
            },
            yaxis: {
                show: false,
            },
            xaxis: {
                show: true
            }
        });
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            background: "#333333",
            padding: "3px 10px",
            color: "#ffffff",
            display: "none",
            opacity: 0.9
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        $.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });

        /* END AREA CHART */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>


    <script>
    $(document).foundation();
    </script>



</body>


<!-- Tieu Long Lanh Kute -->
</html>
