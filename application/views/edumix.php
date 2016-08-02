<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Saspazh</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/css/foundation.css" />

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/css/dripicon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/css/typicons.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/sass/css/theme.css">

    <link href="<?php echo base_url() ?>edumix/js/validate/validate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>edumix/js/idealform/css/jquery.idealforms.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>edumix/js/date-dropdown/jquery.datetimepicker.css" />

    <!-- pace loader -->
    <script src="<?php echo base_url() ?>edumix/js/pace/pace.js"></script>
    <link href="<?php echo base_url() ?>edumix/js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>edumix/js/slicknav/slicknav.css" />



    <script src="<?php echo base_url() ?>edumix/js/vendor/modernizr.js"></script>

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
                            <img alt="" class="" src="./img/logo.png">
                            <h3>SASPAZH <small>1.2</small></h3>

                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                
                                
                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_barcode" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Barcode</span>
                                    </a>
                                </li>

								<li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_investor" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Investor</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_project" title="Project">
                                        <i class="icon-monitor"></i>
                                        <span>Project</span>
                                    </a>
                                </li>
                                

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_transaksi" title="Voucher">
                                        <i class="icon-monitor"></i>
                                        <span>Manage Transaction</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_partner" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Partner</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_partnership" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Partnership</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_statistik" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Pengunjung</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_poin" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Poin</span>
                                    </a>
                                </li>


                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_privilege" title="Voucher">
                                        <i class="icon-monitor"></i>
                                        <span>Privilege</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_stat_penjualan" title="Satistik">
                                        <i class="icon-monitor"></i>
                                        <span>Statistik Penjualan</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_barang" title="Barang">
                                        <i class="icon-monitor"></i>
                                        <span>Barang</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_stok" title="Stok">
                                        <i class="icon-monitor"></i>
                                        <span>Stok</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_slideshow" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Slideshow</span>
                                    </a>
                                </li>


                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_user" title="Voucher">
                                        <i class="icon-monitor"></i>
                                        <span>User</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_voucher" title="Voucher">
                                        <i class="icon-monitor"></i>
                                        <span>Voucher</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="<?php echo site_url() ?>admin_voucher_mass" title="Voucher">
                                        <i class="icon-monitor"></i>
                                        <span>Voucher Mass</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end of Menu sidebar  -->
                        <ul class="bottom-list-menu">
                            <li>Settings <span class="icon-gear"></span>
                            </li>
                            <li>Help <span class="icon-phone"></span>
                            </li>
                            <li>About Saspazh <span class="icon-music"></span>
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
                            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
                            </li>
                        </ul>

                        <section class="top-bar-section ">
                            <!-- Right Nav Section -->
                            <ul class="left">
                                <li class="has-dropdown bg-white">
                                    <a class="bg-white" href="#"><i class="text-green fa fa-envelope"></i>&nbsp;<span class="label edumix-msg-noft">84</span></a>
                                    <ul class="dropdown dropdown-nest">
                                        <li class="top-dropdown-nest"><span class="label round bg-green">MESSAGE</span>
                                        </li>
                                        <li class="bg-blue">
                                            <a href="#">
                                                <h3 class=" text-black"> Big Boss<b class="text-red fontello-record" ></b><span>Just Now<small></small></span>
                                                </h3>
                                                <p class=" text-black">Important task!</p>
                                            </a>
                                        </li>


                                        <li>
                                            <div class="slim-scroll">

                                                <div>
                                                    <a href="#">
                                                        <h3>Noel A. Riley<b class="text-green fontello-record" ></b><span>12:23<small>PM</small></span>
                                                </h3>
                                                        <p>Dua dua sayang adik kakak</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <h3>Shirley J. Carneal<b class="text-gray fontello-record" ></b><span>10:11<small>PM</small></span>
                                                </h3>
                                                        <p>Tiga tiga sayang kekasihku</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <h3>Paul L. Williamsr<b class="text-gray fontello-record" ></b><span>Yesterday</span>
                                                </h3>
                                                        <p>Empat empat sayang semuanya</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <h3>William L. Wilcox<b class="text-gray fontello-record" ></b><span>2 Days Ago</span>
                                                </h3>
                                                        <p>Yang jomblo kasian deh lu</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">View All</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown bg-white">
                                    <a class="bg-white" href="#"><i class="text-blue fa fa-bell" ></i> <span class="label edumix-noft">45</span></a>
                                    <ul class="dropdown dropdown-nest">
                                        <li class="top-dropdown-nest"><span class="label round bg-blue">ALERT</span>
                                        </li>
                                        <li class="bg-black text-black">
                                            <i class="icon-warning"></i>
                                            <a href="#">
                                                <h3 class="text-black">Sticky Very Important<span class="text-red fontello-record" ></span></h3>
                                                <p class="text-black">1 minute ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="slim-scroll">
                                                <div>
                                                    <i class="fontello-megaphone"></i>
                                                    <a href="#">
                                                        <h3>Announcements <span class="text-green fontello-record" ></span>
                                                </h3>
                                                        <p>Just Now !</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="  fontello-attach-1"></i>
                                                    <a href="#">
                                                        <h3>Complete your profile<span class="text-yellow fontello-record" ></span>
                                                </h3>
                                                        <p>2 Minute Ago</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="  fontello-calendar-1"></i>
                                                    <a href="#">
                                                        <h3>New Schedule Realease<span class="text-yellow fontello-record" ></span>
                                                </h3>
                                                        <p>30 Minute ago</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="fontello-database-1"></i>
                                                    <a href="#">
                                                        <h3>New Student Data<span class="text-orange fontello-record" ></span>
                                                </h3>
                                                        <p>1 Hour ago</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="fontello-graduation-cap"></i>
                                                    <a href="#">
                                                        <h3>Graduate Student List<span class="fontello-record" ></span>
                                                </h3>
                                                        <p>2 Days ago</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">View All</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Left Nav Section -->
                            <ul class="left">

                                <!-- Search | has-form wrapper -->
                                <li class="has-form bg-white">
                                    <div class="row collapse">

                                        <div class="large-12 columns">
                                            <div class="dark"> </div>
                                            <input class="input-top" type="text" placeholder="search">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="right">
                                <li class=" has-dropdown bg-white">
                                    <a class="bg-white" href="#"><img alt="" class="admin-pic img-circle" src="http://api.randomuser.me/portraits/thumb/men/28.jpg"><span class="admin-pic-text text-gray">Hi, Dave Mattew </span>
                                    </a>

                                    <ul class="dropdown dropdown-nest profile-dropdown">

                                        <li>
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
                                        </li>
                                        <li>
                                            <i class="icon-upload"></i>
                                            <a href="login.html">
                                                <h4>Logout<span class="text-dark-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>

                                        <li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">More</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="bg-white">
                                    <a class="right-off-canvas-toggle bg-white text-gray" href="#"><span style="font-size:13px" class="icon-view-list" ></span></a>
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
                    <li>Dashboard
                    </li>
                    <!--   <ul class="right inline-list">
                        <li>Help Center</a>
                        </li>
                        <li>Mail Support
                        </li>
                    </ul> -->
                </ul>
                <!-- end of breadcrumbs -->



<?php
$this->load->view($page);
?>








            <!-- Right Menu -->
            <aside class="right-off-canvas-menu">
                <!-- whatever you want goes here -->
                <ul class="off-canvas-list">
                    <li>
                        <label class="bg-transparent" style="padding:25px 20px"><span class="label round bg-green">online</span><i class=" icon-gear right"></i>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/men/25.jpg"><b>Walter M. Reed</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/women/26.jpg"><b>Evelyn G. Thrailkill</b>
                            <br>Ok, good luck!</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/men/27.jpg"><b>Michael L. Merchant</b>
                            <br>Do you receive my email?</a>
                    </li>

                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/men/29.jpg"><b>James S. Houchin</b>
                            <br>Thak you, you're wellcome</a>
                    </li>

                    <li>
                        <label class="bg-transparent" style="padding:25px 20px"><span class="label round bg-opacity-white">offline</span><i class="icon-gear right"></i>
                        </label>
                    </li>

                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="http://api.randomuser.me/portraits/thumb/men/30.jpg"><b>Allen M. Plant</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="http://api.randomuser.me/portraits/thumb/men/31.jpg"><b>Arthur S. Galindo</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="http://api.randomuser.me/portraits/thumb/women/32.jpg"><b>Joyce T. True</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="http://api.randomuser.me/portraits/thumb/men/33.jpg"><b>Christopher A. Charpentier</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="http://api.randomuser.me/portraits/thumb/women/34.jpg"><b>Teresa M. Boothe</b>
                            <br>Hi, there...</a>
                    </li>


                </ul>
            </aside>
            <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->

    </div>
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->



    <!-- main javascript library -->
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/waypoints.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url() ?>edumix/js/preloader-script.js'></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/foundation.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/foundation/foundation.#111111.js"></script>
    <!-- main edumix javascript -->
    <script type='text/javascript' src='<?php echo base_url() ?>edumix/js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='<?php echo base_url() ?>edumix/js/slicknav/jquery.slicknav.js'></script>
    <script type='text/javascript' src='<?php echo base_url() ?>edumix/js/sliding-menu.js'></script>
    <script type='text/javascript' src='<?php echo base_url() ?>edumix/js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/number/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/circle-progress/jquery.circliful.js"></script>
    <script type='text/javascript' src='<?php echo base_url() ?>edumix/js/app.js'></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/number-progress-bar/jquery.velocity.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/number-progress-bar/number-pb.js"></script>
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/loader/loader.js"></script>
    <script type='text/javascript' src="<?php echo base_url() ?>edumix/js/loader/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="<?php echo base_url() ?>edumix/js/flot/jquery.flot.js" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="<?php echo base_url() ?>edumix/js/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="<?php echo base_url() ?>edumix/js/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="<?php echo base_url() ?>edumix/js/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/skycons/skycons.js"></script>

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

    
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/inputMask/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/date-dropdown/jquery.date-dropdowns.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>edumix/js/date-dropdown/jquery.datetimepicker.js"></script>

    <script type="text/javascript">
    (function($) {
        "use strict";
        //dropdown date picker
        $("#date-dropdown").dateDropdowns();
        //default date & time picker

        $('#datetimepicker').datetimepicker({
            dayOfWeekStart: 1,
            lang: 'en',
            disabledDates: ['1986/01/08', '1986/01/09', '1986/01/10'],
            startDate: '2015/01/05'
        });

        $('#datetimepicker').datetimepickerend({
            dayOfWeekStart: 1,
            lang: 'en',
            disabledDates: ['1986/01/08', '1986/01/09', '1986/01/10'],
            startDate: '2015/01/05'
        });

        //only tie picker
        $('#datetimepicker1').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5
        });
        //disable all weekend
        $('#datetimepicker9').datetimepicker({
            onGenerate: function(ct) {
                $(this).find('.xdsoft_date.xdsoft_weekend')
                    .addClass('xdsoft_disabled');
            },
            weekends: ['01.01.2014', '02.01.2014', '03.01.2014', '04.01.2014', '05.01.2014', '06.01.2014'],
            timepicker: false
        });
        //disable spesific date
        var dateToDisable = new Date();
        dateToDisable.setDate(dateToDisable.getDate() + 2);
        $('#datetimepicker11').datetimepicker({
            beforeShowDay: function(date) {
                if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                    return [false, ""]
                }

                return [true, ""];
            }
        });

    })(jQuery);




    $(document).ready(function() {


        // MASKED INPUT
        (function($) {
            "use strict";
            $("#date").mask("99/99/9999", {
                completed: function() {
                    alert("Your birthday was: " + this.val());
                }
            });
            $("#phone").mask("(999) 999-9999");

            $("#money").mask("99.999.9999", {
                placeholder: "*"
            });
            $("#ssn").mask("99--AAA--9999", {
                placeholder: "*"
            });
        })(jQuery);

    });
    </script>




</body>

</html>
