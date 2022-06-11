<?php 

include("baglan.php");

if (isset($_POST['ekle'])) {
  $adi_sadi = $_POST['iletisimad'];
  $email = $_POST['iletisimemail'];
  $konu = $_POST['iletisimkonu'];
  $mesaj = $_POST['iletisimesaj'];
  $gg=1;
  #echo"ad=$adi_sadi -- email=$email --- konu=$konu --- ---- mesaj=$mesaj -  --";
  $ekle=$db->prepare("insert into iletisim set adi_sadi=?,email=?,konu=?,mesaj=?,kid=1,gg=1");
  $ekle->execute(array($adi_sadi,$email,$konu,$mesaj));
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("header.php")?>
  </head>
  <body>
    <?php include("navbar.php") ?>
    <!-- END nav -->
    <section class="home-slider owl-carousel img" style="background-image: url(images/slider.jpeg);">

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">İletİşİm Kurun</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Ana Sayfa</a></span><span class="mr-2"><a href="iletisim.php">İletişim</a></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">İletişim Bilgileri</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Adres:</span> Altınova Sinan, Yunus Emre Sk. No:33, 07070 Kepez/Antalya</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone:</span> <a href="tel://1234567920">+90 (216) 485 9060</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@onderestoran.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Website:</span> <a href="#">onderestoran.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="iletisim.php" method="POST" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" name="iletisimad" placeholder="Adınız-Soyadınız">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="email" class="form-control" name="iletisimemail" placeholder="Email">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="iletisimkonu" placeholder="Konu">
              </div>
              <div class="form-group">
                <textarea name="iletisimesaj" cols="30" rows="7" class="form-control" placeholder="Mesaj"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="ekle" value="Gönder" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div id="map"></div>

    <?php include("footer.php"); ?>
  </body>
</html>