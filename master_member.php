<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMFS | Dasbor</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="assets/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Manajer<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            SIMFS
                        </div>
                    </li>
                    <!-- All Menu -->
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dasbor</span></span></a>

                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Data Master</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="graph_flot.html">Data Member</a></li>
                            <li><a href="graph_morris.html">Data Trainer</a></li>
                            <li><a href="graph_rickshaw.html">Data Karyawan</a></li>
                            <li><a href="graph_rickshaw.html">Data Aset</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kelola Member</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_flot.html">Pendaftaran Member</a></li>
                            <li><a href="graph_morris.html">Pendaftaran Privat</a></li>
                            <li><a href="graph_morris.html">List Member Privat</a></li>
                            <li><a href="#">Iuran Member <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Bayar Iuran</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Itm</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Laporan <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Laporan Bulanan Member Baru</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Bulanan Member Privat</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Bulanan Iuran Member</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kelola Trainer</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_flot.html">Pendaftaran Trainer</a></li>
                            <li><a href="graph_morris.html">List Privat Trainer</a></li>
                            <li><a href="graph_morris.html">Absensi Trainer</a></li>
                            <li><a href="#">Laporan <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Laporan Bulanan Trainer Baru</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Bulanan Trainer Reguler</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Bulanan Trainer Privat</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Bulanan Pendapatan Trainer</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kelola Kegiatan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_flot.html">Pendaftaran Kegiatan Baru</a></li>
                            <li><a href="#">Laporan <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Laporan Bulanan Kegiatan Baru</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kelola Aset</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_flot.html">Input Aset Baru</a></li>
                            <li><a href="graph_morris.html">Perawatan Aset</a></li>
                            <li><a href="graph_morris.html">List Aset</a></li>
                            <li><a href="#">Laporan <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Laporan Bulanan Aset Baru</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Bulanan Perawatan Aset</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kelola User</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_flot.html">Data User</a></li>
                            <li><a href="graph_morris.html">Peran User</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Ketik untuk mencari..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">SISTEM INFORMASI MANAJEMEN FITNESS SOSI</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="assets/img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="assets/img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
              <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Master</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Master</a>
                        </li>
                        <li class="active">
                            <strong>Data Member</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Master Member</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                <div class="">
                <a href="form_member_tambah.php" class="btn btn-primary ">Tambah Data Member</a>
                </div>
                <table class="table table-striped table-bordered table-hover " id="editable" >
                <thead>
                <tr>
                    <th>Nama Member</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No. Handphone</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>Agus Sudarma</td>
                    <td>Jl. Sukamiskin No. 20 RT.05 RW.10
                    </td>
                    <td>Laki - laki</td>
                    <td class="center">agus@mail.com</td>
                    <td class="center">081310123654</td>
                </tr>
                <tr class="gradeC">
                    <td>Charlie Van Boston</td>
                    <td>Jl. Amrik No. 111 RT. 01 RW.10
                    </td>
                    <td>Laki - laki</td>
                    <td class="center">charlievanboston@mail.com</td>
                    <td class="center">081310123654</td>
                </tr>
                <tr class="gradeA">
                    <td>Dedi Atmajaya</td>
                    <td>Jl. Ujung Berung No. 123 RT.12 RW.03
                    </td>
                    <td>Laki - laki</td>
                    <td class="center">dedi@mail.com</td>
                    <td class="center">081310123654</td>
                </tr>
                <tr class="gradeA">
                    <td>Edi Rahmat</td>
                    <td>Jl. Padalarang Barat No. 123 RT.12 RW.03
                    </td>
                    <td>Laki - laki</td>
                    <td class="center">rahmatedi@mail.com</td>
                    <td class="center">081310123654</td>
                </tr>
                <tr class="gradeA">
                    <td>Fahmi Nur Khalid</td>
                    <td>Jl. Sukamulya Barat II No. 33 RT. 02 RW. 02</td>
                    <td>Laki - laki</td>
                    <td class="center">fahmikhalid@mail.com</td>
                    <td class="center">081310123654</td>
                </tr>
                <tr class="gradeA">
                    <td>Gery Syaefullah</td>
                    <td>Jl. Gagak Rimang No. 2020 RT. 01 RW. 01</td>
                    <td>Laki - laki</td>
                    <td class="center">geryepul@mail.com</td>
                    <td class="center">081310123654</td>
                </tr>
                <tr class="gradeC">
                    <td>Hani Suciyati</td>
                    <td>Jl. Jalaprang No. 101 RT. 03 RW. 07</td>
                    <td>Perempuan</td>
                    <td class="center">hanisuci@mail.com</td>
                    <td class="center">081810123456</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Nama Member</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No. Handphone</th>
                </tr>
                </tfoot>
                </table>

                </div>
                </div>
                </div>
            </div>
        </div>


        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="assets/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="assets/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="assets/js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {



            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
</body>
</html>
