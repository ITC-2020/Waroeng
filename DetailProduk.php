<html lang="en">
<head>
    <title>Detail Produk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/DetailProduk.css">
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
    
    <?php include "./assets/inc/login.html" ?>
    <?php include "./assets/inc/register.html" ?>
  

    	<div class="detprod">
        <ul class="row jarak">
        	<!-- Gambar Produk -->
        	<li class="col-5 gambarp li">
        		<img src="./assets/img/plant.jpg" id="ProdukImage">
            <i class="fa fa-heart" id="fav"></i>
            <i class="fa fa-heart" id="fav"></i>
       		</li>
        	<li class="col-3 li dataproduk">
        		<!-- Data Produk -->
    			<h4 id="SuplierName">Suplier's Name Here</h4>
    			<h3 id="ProductName">Product Name Here</h3>
    			<h4 id="Harga">Rp 293.500</h4>
    			 <div class="rating">
	             <ul class="jarak">
	              <i class="fa fa-star" aria-hidden="true"></i>
	              <i class="fa fa-star" aria-hidden="true"></i>
	              <i class="fa fa-star" aria-hidden="true"></i>
	              <i class="fa fa-star" aria-hidden="true"></i>
	              <i class="fa fa-star" aria-hidden="true"></i>
	             </ul>
	            </div>

          <form action="" method="">
            <!-- Couter input -->
          <div class="row counter">
      			<div class="clickcount" id="min" style="margin-left: 20px;">-</div>
            <div id="count">1</div>
            <div class="clickcount" id="plus">+</div>
          </div>
          <input type="hidden" id="jumlahProduk" name="jumlahProduk" />
          <!--input counter belum masuk form-->
    			<input type="submit" class="addcart tombol" name="addcart" value="ADD TO CART">
          </form>

        	</li>
      </ul>
    </div>

    <div class="navigasi">
      <!-- tombol navigasi tab detail -->
      <hr >
        <div id="submenu">
        		<ul class="jarak"> 
        		<li class="li">
              <a class="menu Discussion">Discussion product</a></li>
        		<li class="li">
        			<a class="menu Discription">Discription product</a></li>
        		<li class="li">
        			<a class="menu Review">Review</a></li>
        		</ul>
        </div>
      <hr>
    </div>

    <div class="tab-content" id="myTabContent">
    	<!-- Kolom Diskusi -->
      <div id="dsikusi">
      	<div class="addques">
          <form action="" method="">
      		<input type="text" name="question" class="addquesin" placeholder="Add question..">
      		<input type="submit" name="sendquest" value="send" class="addquessend tombol">
          </form>
      	</div>
      	<br>

      	<div class="dialogbox">
      		<div class="quest">
      			<img src="./assets/img/suzy.jpeg" class="avatar">
      			<h4 class="nama">Anna</h4>
      			is this shop trusted?
      		</div>
      		<div class="border">
      		<div class="reply">
      		<img src="./assets/img/kayla.jpeg" class="avatar">
      			<h4 class="nama">Cindy</h4>
      			Yeah sis..
      			<hr style="margin-top: 7px;">
      		<img src="./assets/img/jennie.png" class="avatar">
      			<h4 class="nama">Stella</h4>
      			Yeah sis..
      			<hr style="margin-top: 7px;">
      		</div>
      		<center><p>See All</p></center>
      		<div class="commentbox">
            <form action="" method="">
      			<img src="./assets/img/profil.png" class="avatar">
      			<input type="text" name="comment" class="comment" placeholder="Comment...">
      			<input type="submit" name="sendcomment" value="send" class="commentsend tombol">
            </form>
      		</div>
      		</div>
      	</div>
        <br><br>
      </div>

      <!-- Kolom Diskripsi -->

      <div id="diskripsi">
      	<div class="diskripsi">
      			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      	</div>
      </div>

      <!-- Kolom Penilaian -->

      <div id="Reviewe">
      	
      	<div class="revie">
      		<ul class="jarak">
      			<li class="starnav li starnavAll">ALL</li>
            <li class="starnav li starnav1">
              <i class="fa fa-star bintang" aria-hidden="true"></i>1</li>
            <li class="starnav li starnav2">
              <i class="fa fa-star bintang" aria-hidden="true"></i>2</li>
       			<li class="starnav li starnav3">
              <i class="fa fa-star bintang" aria-hidden="true"></i>3</li>
            <li class="starnav li starnav4">
              <i class="fa fa-star bintang" aria-hidden="true"></i>4</li>
            <li class="starnav li starnav5">
              <i class="fa fa-star bintang" aria-hidden="true"></i>5</li>
      		</ul>
      	</div>
        <br>
        <div class="penilaian">
          <div class="reviewer star5">
              <div>
                <img src="./assets/img/suzy.jpeg" class="avatar">
              </div>
              <div>
              <div class="star">
                <ul style="margin-bottom: 0;">
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                </ul>
              </div>
              <h6 class="nama">Anna</h6>
              <p id="komen">Mantab slur. yang asli ada badaknya</p>
              <img src="./assets/img/plant.jpg" id="ProdukKomenImg">
              </div>
              <br><hr><br>
          </div>
          <div class="reviewer star4">
              <div>
                <img src="./assets/img/suzy.jpeg" class="avatar">
              </div>
              <div >
              <div class="star">
                <ul style="margin-bottom: 0;">
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                </ul>
              </div>
              <h6 class="nama">Aletta</h6>
              <p id="komen">lumayan slur. yang asli ada badaknya</p>
              </div>
              <br><hr><br>
          </div>
          <div class="reviewer star3">
              <div>
                <img src="./assets/img/kayla.jpeg" class="avatar">
              </div>
              <div >
              <div class="star">
                <ul style="margin-bottom: 0;">
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                </ul>
              </div>
              <h6 class="nama">Kayla</h6>
              <p id="komen">lumayan tp mana badaknya</p>
              </div>
              <br><hr><br>
          </div>
          <div class="reviewer star2">
              <div>
                <img src="./assets/img/jennie.png" class="avatar">
              </div>
              <div >
              <div class="star">
                <ul style="margin-bottom: 0;">
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                </ul>
              </div>
              <h6 class="nama">Jennie</h6>
              <p id="komen">adanya kaki tiga gaada badaknya</p>
              </div>
              <br><hr><br>
          </div>
          <div class="reviewer star1">
              <div>
                <img src="./assets/img/profil.png" class="avatar">
              </div>
              <div >
              <div class="star">
                <ul style="margin-bottom: 0;">
                  <li class="li"><i class="fa fa-star bintang" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                  <li class="li"><i class="fa fa-star bintangAbu" aria-hidden="true"></i></li>
                </ul>
              </div>
              <h6 class="nama">Anee</h6>
              <p id="komen">gaada badaknya</p>
              </div>
              <br><hr><br>
          </div> <br>
          </div>
        </div>
      </div>

  <footer>
        <?php include "./assets/inc/footer.html" ?>
  </footer>

</main>

    <script src="./assets/js/nav.js" type="text/javascript"></script>
    <script src="./assets/js/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="./assets/js/DetailProduk.js" type="text/javascript"></script>
    <script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/1dc8408736.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


</body>
</html>