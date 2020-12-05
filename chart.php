<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/brands.min.css"> -->
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/chart.css">
    <link rel="stylesheet" href="./assets/css/fav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <title>WAROENG</title>
</head>

<body>
    <header>
        <nav> <?php include "./assets/inc/nav.html" ?> </nav>
    </header> <!-- end header -->

    <main>
        <!-- ini contoh include login dan register. harusnya tidak ada di halaman chart.php -->
        <?php include "./assets/inc/login.html" ?>
        <?php include "./assets/inc/register.html" ?>

        <div id="content" class="pt-4 pb-5">
            <div class="container">
                <br>
                <div class="item-chart row">
                    <h6 class=" col-sm-4 pl-5 pt-4 text-secondary text-dark">ITEM DETAIL</h6>
                    <h6 class=" col-sm-3 pl-5 pt-4 text-secondary text-dark text-center">PRICE</h6>
                    <h6 class=" col-sm-3 pl-5 pt-4 text-secondary text-dark">QTY</h6>
                    <h6 class=" col-sm-2 pl-5 pt-4 text-secondary text-dark"></h6>
                </div>
                <div class="chart-box d-flex flex-column ">
                    <div class="flex-row d-flex">
                        <div class="item-chart p-1 border-top border-bottom">
                            <div class="d-flex mb-2">
                                <div class="chart-product d-flex">
                                    <img src="./assets/img/shoes.png" alt="product image">
                                    <span class="text-secondary mt-auto mb-auto"><a href="">Sepatu remaja kekinian</a></span>
                                </div> <!-- end chart-product -->
                                <div class="chart-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end chart-price -->
                                <div class="chart-quantity m-auto">
                                    <button class="minus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input class="qty-inpput" type="text" name="name" value="1" disabled>
                                    <button class="plus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> <!-- end chart-quantity -->
                                <div class="chart-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end chart-price -->
                            </div> <!-- end d-flex -->
                            <div class="d-flex mb-2">
                                <div class="chart-product d-flex">
                                    <img src="./assets/img/shoes.png" alt="product image">
                                    <span class="text-secondary mt-auto mb-auto"><a href="">Sepatu remaja kekinian</a></span>
                                </div> <!-- end chart-product -->
                                <div class="chart-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end chart-price -->
                                <div class="chart-quantity m-auto">
                                    <button class="minus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input class="qty-inpput" type="text" name="name" value="1" disabled>
                                    <button class="plus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> <!-- end chart-quantity -->
                                <div class="chart-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end chart-price -->
                            </div> <!-- end d-flex -->
                            <div class="d-flex mb-2">
                                <div class="chart-product d-flex">
                                    <img src="./assets/img/shoes.png" alt="product image">
                                    <span class="text-secondary mt-auto mb-auto"><a href="">Sepatu remaja kekinian</a></span>
                                </div> <!-- end chart-product -->
                                <div class="chart-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end chart-price -->
                                <div class="chart-quantity m-auto">
                                    <button class="minus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input class="qty-inpput" type="text" name="name" value="1" disabled>
                                    <button class="plus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> <!-- end chart-quantity -->
                                <div class="chart-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end chart-price -->
                            </div> <!-- end d-flex -->

                            <!-- Ini adalah untuk total bayar kurir -->
                            <br>
                        </div> <!-- end item-chart -->
                        <div class="discount-chart p-5">
                            <img src="./assets/img/ad.png" alt="">
                        </div> <!-- end address-chart -->
                    </div> <!-- end flex-row -->
                    <div class="d-flex justify-content-between p-5">
                        <button class="btn btn-white">Back</button>
                        <button class="btn btn-brown">Pay Rp.1.600.500</button>
                    </div> <!-- end d-flex -->
                </div> <!-- end chart-box -->
            </div> <!-- end container -->
        </div> <!-- end content -->
    </main>

    <footer>
        <?php include "./assets/inc/footer.html" ?>
    </footer>

    <script src="./assets/js/nav.js" type="text/javascript"></script>
    <script src="./assets/js/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/checkout.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/50874f4c74.js" type="text/javascript"></script>
</body>

</html>