<?php 

include("baglan.php");

if (isset($_POST['ekle'])) {
  $adi = $_POST['rezerad'];
  $sadi = $_POST['rezersad'];
  $email = $_POST['rezeremail'];
  $konu = $_POST['rezerkonu'];
  $tarih = $_POST['rezertarih'];
  $mesaj = $_POST['rezermesaj'];
  $kisi = $_POST['rezerkisi'];
  $gg=1;
  #echo"ad=$adi - soyad= $sadi - email=$email --- konu=$konu --- tarih=$tarih  ---- mesaj=$mesaj ---kisi=$kisi  --";
  $ekle=$db->prepare("insert into rezervasyon set adi=?,sadi=?,email=?,konu=?,tarih=?,mesaj=?,kisi=?,gg=1,kid=1");
  $ekle->execute(array($adi,$sadi,$email,$konu,$tarih,$mesaj,$kisi));
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("header.php"); ?>
</head>

<body>
  <?php include("navbar.php"); ?>
  <!-- END nav -->
  <section class="home-slider owl-carousel img" style="background-image: url(images/slider.jpeg);">
    <div class="slider-item" style="background-image: url(images/slider.jpeg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">REZERVASYON YAP</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Ana Sayfa</a></span> <span class="mr-2"><a href="rezer.php">Rezervasyon</a></span></p>
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
              <h2 class="h4">Organizasyon</h2>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  </svg>
                </span><a href="rezer.php">Doğum Günü Organizasyonu</a>
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  </svg>
                </span><a href="rezer.php">Toplu Yemekler/İş Yemeği Organizasyonu</a>
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  </svg>
                </span><a href="rezer.php">Yıl Dönümü Organizasyonu</a>
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  </svg>
                </span><a href="rezer.php">Aile Yemeği Organizasyonu</a>
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  </svg>
                </span><a href="rezer.php">Bir İsteğiniz Varsa Konu Kısmına Yazınız</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          <form action="rezer.php" method="POST" class="contact-form">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" name="rezerad" class="form-control" placeholder="Adınız">
                  <input type='hidden' name='id'>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" name="rezersad" class="form-control" placeholder="Soyadınız">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="email" name="rezeremail" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="rezerkonu" class="form-control" placeholder="Konu">
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="date" name="rezertarih" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="number" name="rezerkisi" class="form-control" placeholder="Kişi SayısınI Giriniz">
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea name="rezermesaj" cols="30" rows="7" class="form-control" placeholder="Mesaj"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="ekle" value="Gönder" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>
</body>

</html>