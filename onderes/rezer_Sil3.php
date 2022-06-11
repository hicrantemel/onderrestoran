<html>

<head>
    <link type="text/css" href="assets/css/required/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/required/icheck/all.css" rel="stylesheet" />
    <link type="text/css" href="assets/fonts/metrize-icons/styles-metrize-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/base.css" rel="stylesheet" />

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/required/misc/ie10-viewport-bug-workaround.js"></script>
</head>

<body>
    <?php

    $id= $_POST['id'];

    #echo"AD=$adi   -  RESMİ=$resmi  - FİYAT=$fiyat  - STOK=$stok"

    $host = "localhost";
    $ka = "root";
    $p = "";
    $vt = "onderes";


    $con = new mysqli($host, $ka, $p, $vt);

    $sql = "update rezervasyon set kid=0,gg=0 where id=".$id;

    $sonuc = mysqli_query($con, $sql);

    if($sonuc)
    {
        echo"
        <div class='alert alert-success text-center'>
            <span style='font-size:50px' class='icon icon-info'></span>
            <br>
            <h2>Rezervasyon Başarıyla Tamamlanmıştır</h2>
        </div>";
    }
    else
    {
        echo"
        <div class='alert alert-danger'>
            <span style='font-size:50px' class='icon icon-danger'></span>
            <br>
            <h2>HATA</h2>
            <h3>
                İşlem Gerçekleştirilemedi !!!
            </h3>
        </div>"; 
    }

    ?>


    <!-- Required JS Files -->
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