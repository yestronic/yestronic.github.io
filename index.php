<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gateway</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">





</head>

<?php
$ts = exec("date +%s") * 1000;
echo "<body onload=display_ct({$ts});>";
?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php $ret = exec('/usr/local/bin/outstation -M'); ?>
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><p style="color:black;"><i class="icon-home"></i></p></b>
                    <span class="logo-compact"></span>
                    <span class="brand-title">
                        <p style="color:black;"><?php echo "{$ret}"; ?></p>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
    Nav header start

            <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
***********************************-->


        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <div class="header">
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="./index.php">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="./rule.php">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Rules</span>
                        </a>
                    </li>
                    <li>
                        <a href="./dnp3objects.php">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">DNP3</span>
                        </a>
                    </li>
                    <li>
                        <a href="./getparam.php">
                            <i class="icon-info menu-icon"></i><span class="nav-text">Parameters</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        <?php

        function get_ip($interface) {
            exec('ifconfig ' . $interface . ' | grep "inet addr:" | cut -d" " -f12 | cut -b 6-20',$ipaddr);
            $ipaddr = implode("<br>", $ipaddr);
            if (!filter_var($ipaddr, FILTER_VALIDATE_IP)) {
                $ipaddr = "0.0.0.0";
            }
            return $ipaddr;
        }

        //wifi
        $ssid = exec('cat /etc/hostapd/hostapd.conf | grep "^ssid=" | cut -d "=" -f 2');
        $wifi_pw = exec('cat /etc/hostapd/hostapd.conf | grep "^wpa_passphrase=" | cut -d "=" -f 2');

        $db = new SQLite3("/data/db/nvshadow.db");
        $res = $db->query('SELECT * FROM nvshadows');
        $res_str = $db->query('SELECT * FROM nvshadows_str');
        $keygroup = $db->query('SELECT keygroup FROM nvshadows group by keygroup UNION SELECT keygroup FROM nvshadows_str group by keygroup');

        ?>


        <div class="content-body">
            <div class="container-fluid mt-3">

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>OVERVIEW</h4>
                                </div>
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <?php
                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>Device Model</b></label>";
                                        $ret = exec('/usr/local/bin/outstation -M');
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value={$ret}></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>Version</b></label>";
                                        $ret = exec('/usr/local/bin/outstation -V');
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value={$ret}></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>Uptime</b></label>";
                                        $ret = exec("awk '{print int($1/86400)\"days\"int($1%86400/3600)\":\"int(($1%3600)/60)\":\"int($1%60)}' /proc/uptime");
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value={$ret}></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>Device Time</b></label>";
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" id=\"ct\" name=\"ct\"></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>LAN IP</b></label>";
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value=".get_ip("eth0")."></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>WLAN IP</b></label>";
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value=".get_ip("wlan0")."></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>WWAN IP</b></label>";
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value=".get_ip("wwan0")."></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                        echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>VPN IP</b></label>";
                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" readonly=\"readonly\" class=\"form-control-plaintext\" value=".get_ip("tun0")."></div>";
                                        echo "<div class=\"col-sm-1 col-lg-2\"></div>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>DATALOGGER</h4>
                                </div>
                                <div class="basic-form">
                                    <form action="datalogger.php" method="post">
                                        <div class="form-group row">
                                            <?php
                                            echo "<label class=\"col-4 col-sm-3 col-lg-2 col-form-label\"><b>Date</b></label>";
                                            echo "<div class=\"col-8 col-sm-2 col-lg-2\"><input type=\"text\" class=\"form-control input-default\" style=\"text-align:center;\" id=\"DateRange\" name=\"DateRange\"></div>";
                                            echo "<div class=\"col-sm-1 col-lg-2\"></div>";
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <input type="submit" class="btn btn-dark mb-2" name="query" value="Query">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>VPN</h4>
                                </div>
                                <div class="basic-form">
                                    <form enctype="multipart/form-data" action="uploadvpn.php" method="POST">
                                        <div class="form-group row">
                                            <?php
                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>Upload VPN zip file</b></label>";
                                            echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"file\" name=\"uploaded_file\"></div>";
                                            echo "<div class=\"col-sm-1 col-lg-2\"></div>";
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-dark mb-2">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>WIFI</h4>
                                </div>
                                <div class="basic-form">
                                    <form action="setwifi.php" method="post">
                                        <div class="form-group row">
                                            <?php
                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>SSID</b></label>";
                                            echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" class=\"form-control input-default\" id=\"ssid\" name=\"ssid\" required=\"required\" maxlength=\"32\" value=\"{$ssid}\"></div>";
                                            echo "<div class=\"col-sm-1 col-lg-2\"></div>";

                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>Password</b></label>";
                                            echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" class=\"form-control input-default\" id=\"wifi_pw\" name=\"wifi_pw\" required=\"required\" minlength='8' maxlength=\"32\" value=\"{$wifi_pw}\"></div>";
                                            echo "<div class=\"col-sm-1 col-lg-2\"></div>";
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-dark mb-2">Set Wifi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <form action="save.php" method="post">
                            <div class="card">
                                <?php
                                while ($keygrouprow = $keygroup->fetchArray()) {
                                ?>
                                <div class="card-body">

                                    <div class="card-title">
                                        <?php echo "<h4>{$keygrouprow['keygroup']}</h4>"; ?>
                                    </div>
                                    <div class="basic-form">
                                            <div class="form-group row">
                                                <?php
                                                while ($row = $res->fetchArray()) {
                                                    if ($row['keygroup'] == $keygrouprow['keygroup']){

                                                        //if value float or double, display to 3 decimal place
                                                        if($row['datatype'] == 'fValue' || $row['datatype'] == 'dValue') {
                                                            $row['value'] = sprintf('%0.3f', $row['value']);
                                                        }

                                                        if(!empty($row['unit']))
                                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>{$row['key']} ({$row['unit']})</b></label>";
                                                        else
                                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>{$row['key']}</b></label>";

                                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"number\" class=\"form-control input-default\" id=\"{$row['key']}\" name=\"{$row['key']}\" required=\"required\" value=\"{$row['value']}\" ";

                                                        if($row['datatype'] == 'i32Value')
                                                            echo "min=\"−2147483648\" max=\"2147483647\"";
                                                        else  if($row['datatype'] == 'ui32Value')
                                                            echo "min=\"0\" max=\"4294967295\"";
                                                        else  if($row['datatype'] == 'i64Value')
                                                            echo "min=\"−9223372036854775808\" max=\"9223372036854775807\"";
                                                        else  if($row['datatype'] == 'ui64Value')
                                                            echo "min=\"0\" max=\"18446744073709551615\"";
                                                        else  if($row['datatype'] == 'fValue')
                                                            echo "step=\"any\"";
                                                        else  if($row['datatype'] == 'dValue')
                                                            echo "step=\"any\"";
                                                        else if($row['datatype'] == 'bValue')
                                                            echo "min=\"0\" max=\"1\"";
                                                        else if($row['datatype'] == 'cValue')
                                                            echo "min=\"0\" max=\"255\"";

                                                        if ($row['readonly'] == 1) {
                                                            echo "disabled=\"disabled\"></div>";
                                                        }
                                                        else
                                                            echo "></div>";
                                                        echo '<div class="col-sm-1 col-lg-2"></div>';

                                                        //store original value
                                                        echo "<input type=\"hidden\" id=\"ori{$row['key']}\" name=\"ori{$row['key']}\" value=\"{$row['value']}\">";

                                                    }
                                                }

                                                while ($row = $res_str->fetchArray()) {
                                                    if ($row['keygroup'] == $keygrouprow['keygroup']){

                                                        if(!empty($row['unit']))
                                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>{$row['key']} ({$row['unit']})</b></label>";
                                                        else
                                                            echo "<label class=\"col-6 col-sm-3 col-lg-2 col-form-label\"><b>{$row['key']}</b></label>";

                                                        echo "<div class=\"col-6 col-sm-2 col-lg-2\"><input type=\"text\" class=\"form-control input-default\" id=\"{$row['key']}\" name=\"{$row['key']}\" required=\"required\" value=\"{$row['value']}\" ";
                                                        if ($row['readonly'] == 1){
                                                            echo "disabled=\"disabled\"></div>";
                                                        } else {
                                                            echo "></div>";
                                                        }
                                                        echo '<div class="col-sm-1 col-lg-2"></div>';

                                                        //store original value
                                                        echo "<input type=\"hidden\" id=\"ori{$row['key']}\" name=\"ori{$row['key']}\" value=\"{$row['value']}\">";
                                                    }
                                                }


                                                ?>
                                            </div>
                                    </div>

                                </div>
                                    <?php
                                }
                                ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-dark mb-2">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <?php
        $ret = 'v' . exec('/usr/local/bin/outstation -V');
        echo "<p>{$ret}</p>";
        ?>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->


    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="./js/dashboard/dashboard-1.js"></script>

    <!-- DateRange -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />

    <script type="text/javascript" src="js/display_ct.js"></script>

    <script>

        $(function() {
            $('input[name="DateRange"]').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "showCustomRangeLabel": false,
                "alwaysShowCalendars": true,
                "startDate": moment().startOf('hour').subtract(1, 'month'),
                "endDate": moment().startOf('day'),
                locale: {
                    format: 'YYYY-MM-DD'
                },
                "opens": "center"
            }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            });
        });
    </script>

</body>

</html>