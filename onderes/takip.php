<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/required/ico/favicon.ico">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/required/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/required/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/required/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/required/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/required/ico/favicon.png">

    <title>Circloid - Responsive HTML Admin Template</title>

    <!-- Required CSS Files -->
    <link type="text/css" href="assets/css/required/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/required/icheck/all.css" rel="stylesheet" />
    <link type="text/css" href="assets/fonts/metrize-icons/styles-metrize-icons.css" rel="stylesheet">

    <!-- Optional CSS Files -->
    <link type="text/css" href="assets/css/optional/jqvmap/jqvmap.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/optional/jqvmap/circloid-jqvmap.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/optional/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/optional/fullcalendar/circloid-fullcalendar.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/optional/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
    <link type="text/css" href="assets/css/optional/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- add CSS files here -->

    <!-- More Required CSS Files -->
    <link type="text/css" href="assets/css/styles-core.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/styles-core-responsive.css" rel="stylesheet" />

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/required/misc/ie10-viewport-bug-workaround.js"></script>

    <!--[if IE 7]>
	<link type="text/css" href="assets/css/required/misc/style-ie7.css" rel="stylesheet">
	<script type="text/javascript" src="assets/fonts/lte-ie7.js"></script>
	<![endif]-->
    <!--[if IE 8]>
	<link type="text/css" href="assets/css/required/misc/style-ie8.css" rel="stylesheet">
	<![endif]-->
    <!--[if lte IE 8]>
	<script type="text/javascript" src="assets/css/required/misc/excanvas.min.js"></script>
	<![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- START Right Column -->
    <div id="right-column">
        <div class="right-column-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <div class="block-heading">
                            <div class="main-text h2">
                                MENÜ
                            </div>
                            <div class="block-controls">
                                <span aria-hidden="true" class="icon icon-cross icon-size-medium block-control-remove"></span>
                                <span aria-hidden="true" class="icon icon-arrow-down icon-size-medium block-control-collapse"></span>
                            </div>
                        </div>
                        <div class="block-content-outer">
                            <div class="block-content-inner">
                                <ul id="default-tabs" class="nav nav-tabs">
                                    <li class="active"><a href="#default-tabs-et" data-toggle="tab">Et Yemekleri</a></li>
                                    <li><a href="#default-tabs-sebze" data-toggle="tab">Sebze Yemekleri</a></li>
                                    <li><a href="#default-tabs-corba" data-toggle="tab">Çorbalar</a></li>
                                    <li><a href="#default-tabs-icecek" data-toggle="tab">İcecekler</a></li>
                                    <li><a href="#default-tabs-tatli" data-toggle="tab">Tatlılar</a></li>
                                    <li><a href="#default-tabs-borek" data-toggle="tab">Börek&Pide</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="default-tabs-et" class="tab-pane active">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                        <th>Resim</th>
                                                        <th>Adı</th>
                                                        <th>Fiyat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $host = "localhost";
                                                    $ka = "root";
                                                    $p = "";
                                                    $vt = "onderes";

                                                    $con = new mysqli($host, $ka, $p, $vt);

                                                    $sql = "select * from menu where kid=1 and gg=1";

                                                    $menuler = mysqli_query($con, $sql);

                                                    while ($menu = $menuler->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th><img src='images/" . $menu['resmi'] . "' style='width:60px; height:auto;' /></th>";
                                                        echo "<th>" . $menu['adi'] . "</th>";
                                                        echo "<th>" . $menu['fiyat'] . "</th>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="default-tabs-sebze" class="tab-pane">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                        <th>Resim</th>
                                                        <th>Adı</th>
                                                        <th>Fiyat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $host = "localhost";
                                                    $ka = "root";
                                                    $p = "";
                                                    $vt = "onderes";

                                                    $con = new mysqli($host, $ka, $p, $vt);

                                                    $sql = "select * from menu where kid=4 and gg=1";

                                                    $menuler = mysqli_query($con, $sql);

                                                    while ($menu = $menuler->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th><img src='images/" . $menu['resmi'] . "' style='width:60px; height:auto;' /></th>";
                                                        echo "<th>" . $menu['adi'] . "</th>";
                                                        echo "<th>" . $menu['fiyat'] . "</th>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="default-tabs-corba" class="tab-pane">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                        <th>Resim</th>
                                                        <th>Adı</th>
                                                        <th>Fiyat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $host = "localhost";
                                                    $ka = "root";
                                                    $p = "";
                                                    $vt = "onderes";

                                                    $con = new mysqli($host, $ka, $p, $vt);

                                                    $sql = "select * from menu where kid=2 and gg=1";

                                                    $menuler = mysqli_query($con, $sql);

                                                    while ($menu = $menuler->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th><img src='images/" . $menu['resmi'] . "' style='width:60px; height:auto;' /></th>";
                                                        echo "<th>" . $menu['adi'] . "</th>";
                                                        echo "<th>" . $menu['fiyat'] . "</th>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="default-tabs-icecek" class="tab-pane">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                        <th>Resim</th>
                                                        <th>Adı</th>
                                                        <th>Fiyat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $host = "localhost";
                                                    $ka = "root";
                                                    $p = "";
                                                    $vt = "onderes";

                                                    $con = new mysqli($host, $ka, $p, $vt);

                                                    $sql = "select * from menu where kid=6 and gg=1";

                                                    $menuler = mysqli_query($con, $sql);

                                                    while ($menu = $menuler->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th><img src='images/" . $menu['resmi'] . "' style='width:60px; height:auto;' /></th>";
                                                        echo "<th>" . $menu['adi'] . "</th>";
                                                        echo "<th>" . $menu['fiyat'] . "</th>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="default-tabs-tatli" class="tab-pane">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                        <th>Resim</th>
                                                        <th>Adı</th>
                                                        <th>Fiyat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $host = "localhost";
                                                    $ka = "root";
                                                    $p = "";
                                                    $vt = "onderes";

                                                    $con = new mysqli($host, $ka, $p, $vt);

                                                    $sql = "select * from menu where kid=3 and gg=1";

                                                    $menuler = mysqli_query($con, $sql);

                                                    while ($menu = $menuler->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th><img src='images/" . $menu['resmi'] . "' style='width:60px; height:auto;' /></th>";
                                                        echo "<th>" . $menu['adi'] . "</th>";
                                                        echo "<th>" . $menu['fiyat'] . "</th>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="default-tabs-borek" class="tab-pane">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                        <th>Resim</th>
                                                        <th>Adı</th>
                                                        <th>Fiyat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $host = "localhost";
                                                    $ka = "root";
                                                    $p = "";
                                                    $vt = "onderes";

                                                    $con = new mysqli($host, $ka, $p, $vt);

                                                    $sql = "select * from menu where kid=5 and gg=1";

                                                    $menuler = mysqli_query($con, $sql);

                                                    while ($menu = $menuler->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th><img src='images/" . $menu['resmi'] . "' style='width:60px; height:auto;' /></th>";
                                                        echo "<th>" . $menu['adi'] . "</th>";
                                                        echo "<th>" . $menu['fiyat'] . "</th>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="block">
                        <div class="block-heading">
                            <div class="main-text h2">
                                REZERVASYON
                            </div>
                            <div class="block-controls">
                                <span aria-hidden="true" class="icon icon-cross icon-size-medium block-control-remove"></span>
                                <span aria-hidden="true" class="icon icon-arrow-down icon-size-medium block-control-collapse"></span>
                            </div>
                        </div>
                        <div class="block-content-outer">
                            <div class="block-content-inner">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                <th>Adı</th>
                                                <th>Soyadı</th>
                                                <th>Email</th>
                                                <th>Konu</th>
                                                <th>Tarih</th>
                                                <th>Kişi Sayısı</th>
                                                <th>Mesaj</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $host = "localhost";
                                            $ka = "root";
                                            $p = "";
                                            $vt = "onderes";

                                            $con = new mysqli($host, $ka, $p, $vt);

                                            $sql = "select * from rezervasyon where gg=1 and kid=1";

                                            $rezervasyonlar = mysqli_query($con, $sql);

                                            while ($rezervasyon = $rezervasyonlar->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th>" . $rezervasyon['adi'] . "</th>";
                                                echo "<th>" . $rezervasyon['sadi'] . "</th>";
                                                echo "<th>" . $rezervasyon['email'] . "</th>";
                                                echo "<th>" . $rezervasyon['konu'] . "</th>";
                                                echo "<th>" . $rezervasyon['tarih'] . "</th>";
                                                echo "<th>" . $rezervasyon['kisi'] . "</th>";
                                                echo "<th>" . $rezervasyon['mesaj'] . "</th>";

                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-heading">
                            <div class="main-text h2">
                                İLETİŞİM
                            </div>
                            <div class="block-controls">
                                <span aria-hidden="true" class="icon icon-cross icon-size-medium block-control-remove"></span>
                                <span aria-hidden="true" class="icon icon-arrow-down icon-size-medium block-control-collapse"></span>
                            </div>
                        </div>
                        <div class="block-content-outer">
                            <div class="block-content-inner">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr style="background-color: orange; color:white; font-weight: bold; font-size: 20px;">
                                                <th>Adı Soyadı</th>
                                                <th>Email</th>
                                                <th>Konu</th>
                                                <th>Mesaj</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $host = "localhost";
                                            $ka = "root";
                                            $p = "";
                                            $vt = "onderes";

                                            $con = new mysqli($host, $ka, $p, $vt);

                                            $sql = "select * from iletisim where gg=1 and kid=1";

                                            $iletisim = mysqli_query($con, $sql);

                                            while ($ilet = $iletisim->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th>" . $ilet['adi_sadi'] . "</th>";
                                                echo "<th>" . $ilet['email'] . "</th>";
                                                echo "<th>" . $ilet['konu'] . "</th>";
                                                echo "<th>" . $ilet['mesaj'] . "</th>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- END Right Column -->
    <script type="text/javascript" src="assets/js/required/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/required/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/required/jquery.easing.1.3-min.js"></script>
    <script type="text/javascript" src="assets/js/required/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="assets/js/required/misc/jquery.mousewheel-3.0.6.min.js"></script>
    <script type="text/javascript" src="assets/js/required/misc/retina.min.js"></script>
    <script type="text/javascript" src="assets/js/required/icheck.min.js"></script>
    <script type="text/javascript" src="assets/js/required/misc/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/js/required/circloid-functions.js"></script>

    <!-- Optional JS Files -->
    <script type="text/javascript" src="assets/js/optional/circloid-functions-optional.js"></script>
    <script type="text/javascript" src="assets/js/optional/jqvmap/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/jqvmap/maps/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="assets/js/optional/jqvmap/data/jquery.vmap.sampledata.js"></script> <!-- JQVMap Sample Data -->
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.JUMlib.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.tooltip.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.stack.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="assets/js/optional/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/misc/moment.js"></script>
    <script type="text/javascript" src="assets/js/optional/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="assets/js/optional/bootstrap-datetimepicker.min.js"></script>
    <!-- add optional JS plugin files here -->

    <!-- REQUIRED: User Editable JS Files -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!-- add additional User Editable files here -->

    <!-- Demo JS Files -->
    <script type="text/javascript" src="assets/js/demo-files/index.js"></script>
</body>


</html>