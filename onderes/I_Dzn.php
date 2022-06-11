<html>

<head>
    <!-- Required CSS Files -->
    <link type="text/css" href="assets/css/required/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/required/icheck/all.css" rel="stylesheet" />
    <link type="text/css" href="assets/fonts/metrize-icons/styles-metrize-icons.css" rel="stylesheet">
    <!-- css link verdik assets/css/base.css-->
    <link type="text/css" href="assets/css/base.css" rel="stylesheet">
</head>

<body>

    <?php
    $id = $_POST['id'];
    $adi = $_POST['adi'];
    $resmi = $_POST['resmi'];
    $fiyat = $_POST['fiyat'];
    $gg = 1;
    $kid = 6;

    #echo"ad=$adi - resim= $resmi - fiyat=$fiyat---id=$id";

    $host = "localhost";
    $ka = "root";
    $p = "";
    $vt = "onderes";

    $con = new mysqli($host, $ka, $p, $vt);

    $sql = "update menu set adi='".$adi."',resmi='".$resmi."', fiyat=".$fiyat.", gg=".$gg.",kid=".$kid."
    where id=".$id;

    $sonuc = mysqli_query($con, $sql);

       if($sonuc)
    {
        echo"
        <div class='alert alert-success text-center'>
            <span style='font-size:50px' class='icon icon-info'></span>
            <br>
            <h2>Ürün Başarıyla Güncellenmiştir.</h2>
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
                Ürün Güncellenemedi !!!
            </h3>
        </div>"; 
    }
       ?>
    








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
</body>

</html>