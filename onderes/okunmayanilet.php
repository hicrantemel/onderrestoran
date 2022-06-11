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
    <div class="row">
        <div class="col-md-10">
            <h1>
                <span aria-hidden="true" class="icon icon-documents trk"></span>
                <span class="main-text">
                    Okunmayan Mesajlar
                </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- START Block: Start Here -->
            <div class="block">
                <div class="block-content-outer">
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
                                            <th>Okundu</th>
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
                                            echo "<th>
                                                   <a href='#' data-toggle='modal' data-target='#sil-modal" . $ilet['id'] . "'>
                                                    <span class='icon icon-eye red'></span>
                                                   </a>
                                                  </th>";
                                        # SİL MODAL BAŞLANGIÇ 
                                        echo"
                                        <div class='modal fade small-modal' id='sil-modal" . $ilet['id'] . "' tabindex='-1' role='dialog' aria-labelledby='small-modal-label' aria-hidden='false' style='display: none;'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content' data-border-top='multi' style='border-top: 0px;'>
                                                    <div class='top-border' style='border:6px solid green'>
                                                    </div>
                                                    <div class='modal-header alert alert-success'>
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                        <h4 class='modal-title' id='small-modal-label'>ONAY FORMU</h4>
                                                    </div>
                                                    <form action='ilet_Sil.php' method='POST' target='ortaAlan'>                                                        
                                                        <div class='modal-body text-center'>
                                                            <input type='hidden' name='id' value=".$ilet['id'].">
                                                            <div class='row'>
                                                                <div class='col-md-6'>
                                                                    <h5>Adı:" . $ilet['adi_sadi'] . "</h5>
                                                                </div>
                                                                <div class='col-md-6'>
                                                                    <h5>Email:" . $ilet['email'] . "</h5>
                                                                </div>
                                                            </div>
                                                            <div class='row'>
                                                                <div class='col-md-4'>
                                                                    <h5>Konu:" . $ilet['konu'] . "</h5>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class='col-md-12'>
                                                                    <h5>Mesaj:" . $ilet['mesaj'] . "</h5>
                                                                </div>
                                                            </div>
                                                            <h3>Mesaj Okundu Mu?</h3>
                                                        <div class='modal-footer'>
                                                            <input type='submit' class='btn btn-success' value='Evet' />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>";
                                        # SİL MODAL BİTİŞ 
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
            <!-- END Block -->
        </div>
    </div>
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