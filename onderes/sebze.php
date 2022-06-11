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
                    Sebze Yemekleri
                </span>
            </h1>
        </div>
        <div class="col-md-2 ">
            <a href="#" data-toggle="modal" data-target="#ekle-modal">
                <h1><span aria-hidden="true" class="icon icon-plus yesil"></span></h1>
            </a>
        </div>
        <!--ekle modalın başlangıcı-->
        <div class="modal fade small-modal" id="ekle-modal" tabindex="-1" role="dialog" aria-labelledby="small-modal-label" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="border-top: 6px solid green;">
                <div class="modal-content" data-border-top="multi" style="border-top: 0px;">
                    <div class="modal-header alert alert-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="small-modal-label">ÜRÜN EKLEME FORMU</h4>
                    </div>
                    <form action="S_Ekle.php" method="POST" target="ortaAlan">
                        <div class="modal-body">
                            <p>
                                <input type="text" name="adi" class="form-control has-success" placeholder="Ürün Adını giriniz." >
                            </p>
                            <p>
                                <input type="text" name="resmi" class="form-control has-success" placeholder="Ürün Resim Adını giriniz.">
                            </p>
                            <p>
                                <input type="number" name="fiyat" class="form-control has-success" placeholder="Ürün Fiyatını giriniz.">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="KAYDET">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Vazgeç</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!--ekle modalın bitişi-->
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
                                            <th>Resim</th>
                                            <th>Adı</th>
                                            <th>Fiyat</th>
                                            <th>Sil</th>
                                            <th>Düzenle</th>
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
                                            echo "<th>
                                                <a href='#' data-toggle='modal' data-target='#sil-modal" . $menu['id'] . "'>
                                                    <span class='icon icon-cross red'></span>
                                                </a>
                                            </th>";
                                        # SİL MODAL BAŞLANGIÇ 
                                        echo"
                                        <div class='modal fade small-modal' id='sil-modal" . $menu['id'] . "' tabindex='-1' role='dialog' aria-labelledby='small-modal-label' aria-hidden='false' style='display: none;'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content' data-border-top='multi' style='border-top: 0px;'>
                                                    <div class='top-border' style='border:6px solid red'>
                                                    </div>
                                                    <div class='modal-header alert alert-danger'>
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                        <h4 class='modal-title' id='small-modal-label'>ÜRÜN SILME FORMU</h4>
                                                    </div>
                                                    <form action='E_Sil.php' method='POST' target='ortaAlan'>                                                        
                                                        <div class='modal-body text-center'>
                                                            <input type='hidden' name='id' value=".$menu['id'].">
                                                            <img src='images/" . $menu['resmi'] . "'  style='width:250px; heigth:auto'><br>
                                                            <h1>" . $menu['adi'] . " adlı ürün silinsin mi? </h1>
                                                        <div class='modal-footer'>
                                                            <input type='submit' class='btn btn-danger' value='SİL' />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>";
                                        # SİL MODAL BİTİŞ 
                                        echo "<th>
                                                <a href='#' data-toggle='modal' data-target='#dzn-modal" . $menu['id'] . "'>
                                                    <span class='icon icon-options-settings orange'></span>
                                                </a>
                                        </th>"; 
                                        # DÜZENLE MODAL BAŞLANGIÇ       
                                        echo"
                                        <div class='modal fade small-modal' id='dzn-modal" . $menu['id'] . "' tabindex='-1' role='dialog' aria-labelledby='small-modal-label' aria-hidden='false' style='display: none;'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content' data-border-top='multi' style='border-top: 0px;'>
                                                    <div class='top-border' style='border:3px solid orange'>
                                                    </div>
                                                    <div class='modal-header alert alert-warning'>
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                        <h4 class='modal-title' id='small-modal-label'>ÜRÜN GÜNCELLEME FORMU</h4>
                                                    </div>
                                                    <form action='S_Dzn.php' method='POST' target='ortaAlan'>
                                                    <input type='hidden' name='id' value=".$menu['id']." >
                                                        <div class='modal-body'>
                                                            <div class='row'>
                                                                <div class='col-md-3'>
                                                                    <img src='images/" . $menu['resmi'] . "' style='width: 150px; heigth:auto'/>
                                                                </div>
                                                                <div class='col-md-9'>
                                                                <input type='text' name='resmi' value=".$menu['resmi']." class='form-control'>
                                                                </div>
                                                            </div>
                                                            <input type='text' name='adi' value=".$menu['adi']." class='form-control has-success' placeholder='Ürün Adını giriniz...'>              
                                                            <br>
                                                            <input type='number' name='fiyat' value=".$menu['fiyat']." class='form-control has-success' placeholder='Ürünün Fiyatını giriniz...'>
                                                            <br>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <input type='submit' class='btn btn-warning' value='Güncelle' />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>";                                       
                                        # DÜZENLE MODAL BİTİŞ
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