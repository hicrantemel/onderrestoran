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
						<h1 class="mb-3 mt-5 bread">MENÜLERİMİZ</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Ana Sayfa</a></span> <span class="mr-2"><a href="menu.php">Menü</a></span></p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-menu">
		<div class="container">
			<div class="row d-md-flex">

				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Et Yemekleri</a>

								<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sebze Yemekleri</a>

								<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Çorba Çeşitleri</a>

								<a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">İçecekler</a>

								<a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Tatlılar</a>

								<a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Börek Ve Pide Çeşitleri</a>

							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">

							<div class="tab-content ftco-animate" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
									<div class="row">
										<?php
										$host = "localhost";
										$ka = "root";
										$p = "";
										$vt = "onderes";

										$con = new mysqli($host, $ka, $p, $vt);

                                        $sql = "select * from menu where kid=1 and gg=1";

                                        $menuler = mysqli_query($con, $sql);

                                        while ($menu = $menuler->fetch_assoc()){
										echo "
									    <div class='col-md-4 text-center'>
											<div class='menu-wrap'>
												<a href='#' class='menu-img img mb-4' style='background-image: url(images/" . $menu['resmi'] . ");'></a>
												<div class='text'>
													<h3><a href='#'>" . $menu['adi'] . "</a></h3>
													
													<p class='price'><span>" . $menu['fiyat'] . "₺</span></p>
													
												</div>
											</div>
										</div>";
										}
										?>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
									<div class="row">
										<?php
										$host = "localhost";
										$ka = "root";
										$p = "";
										$vt = "onderes";

										$con = new mysqli($host, $ka, $p, $vt);

                                        $sql = "select * from menu where kid=4 and gg=1";

                                        $menuler = mysqli_query($con, $sql);

                                        while ($menu = $menuler->fetch_assoc()){
										echo "
									    <div class='col-md-4 text-center'>
											<div class='menu-wrap'>
												<a href='#' class='menu-img img mb-4' style='background-image: url(images/" . $menu['resmi'] . ");'></a>
												<div class='text'>
													<h3><a href='#'>" . $menu['adi'] . "</a></h3>
													
													<p class='price'><span>" . $menu['fiyat'] . "₺</span></p>
													
												</div>
											</div>
										</div>";
										}
										?>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
									<div class="row">
										<?php
										$host = "localhost";
										$ka = "root";
										$p = "";
										$vt = "onderes";

										$con = new mysqli($host, $ka, $p, $vt);

                                        $sql = "select * from menu where kid=2 and gg=1";

                                        $menuler = mysqli_query($con, $sql);

                                        while ($menu = $menuler->fetch_assoc()){
										echo "
									    <div class='col-md-4 text-center'>
											<div class='menu-wrap'>
												<a href='#' class='menu-img img mb-4' style='background-image: url(images/" . $menu['resmi'] . ");'></a>
												<div class='text'>
													<h3><a href='#'>" . $menu['adi'] . "</a></h3>
													
													<p class='price'><span>" . $menu['fiyat'] . "₺</span></p>
													
												</div>
											</div>
										</div>";
										}
										?>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
									<div class="row">
										<?php
										$host = "localhost";
										$ka = "root";
										$p = "";
										$vt = "onderes";

										$con = new mysqli($host, $ka, $p, $vt);

                                        $sql = "select * from menu where kid=6 and gg=1";

                                        $menuler = mysqli_query($con, $sql);

                                        while ($menu = $menuler->fetch_assoc()){
										echo "
									    <div class='col-md-4 text-center'>
											<div class='menu-wrap'>
												<a href='#' class='menu-img img mb-4' style='background-image: url(images/" . $menu['resmi'] . ");'></a>
												<div class='text'>
													<h3><a href='#'>" . $menu['adi'] . "</a></h3>
													
													<p class='price'><span>" . $menu['fiyat'] . "₺</span></p>
													
												</div>
											</div>
										</div>";
										}
										?>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
									<div class="row">
										<?php
										$host = "localhost";
										$ka = "root";
										$p = "";
										$vt = "onderes";

										$con = new mysqli($host, $ka, $p, $vt);

                                        $sql = "select * from menu where kid=3 and gg=1";

                                        $menuler = mysqli_query($con, $sql);

                                        while ($menu = $menuler->fetch_assoc()){
										echo "
									    <div class='col-md-4 text-center'>
											<div class='menu-wrap'>
												<a href='#' class='menu-img img mb-4' style='background-image: url(images/" . $menu['resmi'] . ");'></a>
												<div class='text'>
													<h3><a href='#'>" . $menu['adi'] . "</a></h3>
													
													<p class='price'><span>" . $menu['fiyat'] . "₺</span></p>
													
												</div>
											</div>
										</div>";
										}
										?>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
									<div class="row">
										<?php
										$host = "localhost";
										$ka = "root";
										$p = "";
										$vt = "onderes";

										$con = new mysqli($host, $ka, $p, $vt);

                                        $sql = "select * from menu where kid=5 and gg=1";

                                        $menuler = mysqli_query($con, $sql);

                                        while ($menu = $menuler->fetch_assoc()){
										echo "
									    <div class='col-md-4 text-center'>
											<div class='menu-wrap'>
												<a href='#' class='menu-img img mb-4' style='background-image: url(images/" . $menu['resmi'] . ");'></a>
												<div class='text'>
													<h3><a href='#'>" . $menu['adi'] . "</a></h3>
													
													<p class='price'><span>" . $menu['fiyat'] . "₺</span></p>
													
												</div>
											</div>
										</div>";
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include("footer.php"); ?>
</body>

</html>