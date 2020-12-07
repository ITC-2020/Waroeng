<html lang="en">
<head>
	<title>Whist List</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/whistlist.css">
    <link rel="stylesheet" href="./assets/css/fav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
</head>

<body>
	
  <header>
    <nav> <?php include "./assets/inc/nav.html" ?> </nav>
  </header> <!-- end header -->

	<main>
  		<!-- ini contoh include login dan register. harusnya tidak ada di halaman chart.php -->
	  	<?php include "./assets/inc/login.html" ?>
	    <?php include "./assets/inc/register.html" ?>
	<br>

	<div class="category text-center">
                <ul class="d-inline-flex p-2">
                    <li class="p-2"><a href=""><img src="./assets/img/apparel.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/beauty.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/shoes.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/electronics.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/furniture.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/home.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/stationary.png" alt=""></a></li>
                    <li class="p-2"><a href=""><img src="./assets/img/more.png" alt=""></a></li>
                </ul>
            </div>

	<br>
	<center>
		<button class="btnavailable">Available</button>
		<button class="btnout">Out of Stock</button>
	</center>
	<br><br>


		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" id="available">
				<!-- sisi available -->
				<div class="col mb-3 F1">
					<div class="atas">
						<i class="fa fa-heart fa-2x F1" aria-hidden="true" id="love"></i>
						<center>
							<img src="./assets/img/plant.jpg" id="produkimg">
						</center>
					</div>
					<div class="bawah">
						<table>
							<tr>
								<td id="info">
									<h5>Supplier's Name Here</h5>
									<h4>Product Name Here</h4>
									<h3>Rp273.500</h3>
								</td>
								<td id="btnarrow"><a href="DetailProduk.html"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col mb-3 F2">
					<div class="atas">
						<i class="fa fa-heart fa-2x F2" aria-hidden="true" id="love"></i>
						<center>
							<img src="./assets/img/plant.jpg" id="produkimg">
						</center>
					</div>
					<div class="bawah">
						<table>
							<tr>
								<td id="info">
									<h5>Supplier's Name Here</h5>
									<h4>Product Name Here</h4>
									<h3>Rp273.500</h3>
								</td>
								<td id="btnarrow"><a href="DetailProduk.html"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col mb-3 F3">
					<div class="atas">
						<i class="fa fa-heart fa-2x F3" aria-hidden="true" id="love"></i>
						<center>
							<img src="./assets/img/plant.jpg" id="produkimg">
						</center>
					</div>
					<div class="bawah">
						<table>
							<tr>
								<td id="info">
									<h5>Supplier's Name Here</h5>
									<h4>Product Name Here</h4>
									<h3>Rp273.500</h3>
								</td>
								<td id="btnarrow"><a href="DetailProduk.html"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col mb-3 F4">
					<div class="atas">
						<i class="fa fa-heart fa-2x F4" aria-hidden="true" id="love"></i>
						<center>
							<img src="./assets/img/plant.jpg" id="produkimg">
						</center>
					</div>
					<div class="bawah">
						<table>
							<tr>
								<td id="info">
									<h5>Supplier's Name Here</h5>
									<h4>Product Name Here</h4>
									<h3>Rp273.500</h3>
								</td>
								<td id="btnarrow"><a href="DetailProduk.html"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col mb-3 F5">
					<div class="atas">
						<i class="fa fa-heart fa-2x F5" aria-hidden="true" id="love"></i>
						<center>
							<img src="./assets/img/plant.jpg" id="produkimg">
						</center>
					</div>
					<div class="bawah">
						<table>
							<tr>
								<td id="info">
									<h5>Supplier's Name Here</h5>
									<h4>Product Name Here</h4>
									<h3>Rp273.500</h3>
								</td>
								<td id="btnarrow"><a href="DetailProduk.html"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<!-- end sisi available -->

			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4" id="outstock">
				<!-- sisi out stock -->
				<div class="col mb-3 F6">
					<div class="atas">
						<i class="fa fa-heart fa-2x F6" aria-hidden="true" id="love"></i>
						<center>
							<img src="./assets/img/plant.jpg" id="produkimg">
						</center>
					</div>
					<div class="bawah">
						<table>
							<tr>
								<td id="info">
									<h5>Supplier's Name Here</h5>
									<h4>Product Name Here</h4>
									<h3>Rp273.500</h3>
								</td>
								<td id="btnarrow"><a href="DetailProduk.html"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>	
			</div><!-- end sisi out stock -->
		</div>
		<br><br>
	</main>

	<footer>
        <?php include "./assets/inc/footer.html" ?>
	</footer>

	<script src="./assets/js/nav.js" type="text/javascript"></script>
    <script src="./assets/js/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="./assets/js/whistlist.js" type="text/javascript"></script>
    <script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/1dc8408736.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html> 