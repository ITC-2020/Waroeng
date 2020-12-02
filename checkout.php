<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/brands.min.css"> -->
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/checkout.css">
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
        <!-- ini contoh include login dan register. harusnya tidak ada di halaman checkout.php -->
        <?php include "./assets/inc/login.html" ?>
        <?php include "./assets/inc/register.html" ?>

        <div id="content" class="pt-4 pb-5">
            <div class="container">
                <h2 class="text-secondary text-center">Checkout</h2>
                <br>
                <div class="checkout-box d-flex flex-column">
                    <h6 class="text-brown pl-5 pt-4">Your Order</h6>
                    <div class="flex-row d-flex">
                        <div class="item-checkout p-5">
                            <div class="d-flex mb-2">
                                <div class="checkout-product d-flex">
                                    <img src="./assets/img/shoes.png" alt="product image">
                                    <span class="text-secondary mt-auto mb-auto"><a href="">Sepatu remaja kekinian</a></span>
                                </div> <!-- end checkout-product -->
                                <div class="checkout-quantity m-auto">
                                    <button class="minus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input class="qty-inpput" type="text" name="name" value="1" disabled>
                                    <button class="plus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> <!-- end checkout-quantity -->
                                <div class="checkout-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end checkout-price -->
                            </div> <!-- end d-flex -->
                            <div class="d-flex mb-2">
                                <div class="checkout-product d-flex">
                                    <img src="./assets/img/shoes.png" alt="product image">
                                    <span class="text-secondary mt-auto mb-auto"><a href="">Sepatu remaja kekinian</a></span>
                                </div> <!-- end checkout-product -->
                                <div class="checkout-quantity m-auto">
                                    <button class="minus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input class="qty-inpput" type="text" name="name" value="1" disabled>
                                    <button class="plus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> <!-- end checkout-quantity -->
                                <div class="checkout-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end checkout-price -->
                            </div> <!-- end d-flex -->
                            <div class="d-flex mb-2">
                                <div class="checkout-product d-flex">
                                    <img src="./assets/img/shoes.png" alt="product image">
                                    <span class="text-secondary mt-auto mb-auto"><a href="">Sepatu remaja kekinian</a></span>
                                </div> <!-- end checkout-product -->
                                <div class="checkout-quantity m-auto">
                                    <button class="minus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input class="qty-inpput" type="text" name="name" value="1" disabled>
                                    <button class="plus-btn btn-quantity" type="button" name="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div> <!-- end checkout-quantity -->
                                <div class="checkout-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 255.000</span>
                                </div> <!-- end checkout-price -->
                            </div> <!-- end d-flex -->

                            <!-- Ini adalah untuk total bayar kurir -->
                            <br>
                            <div class="shipping-charge d-flex mb-2">
                                <div class="checkout-product d-flex">
                                    <i class="far fa-shipping-fast fa-2x mr-3"></i>
                                    <span class="text-secondary mt-auto mb-auto">Total shipping charge</span>
                                </div> <!-- end checkout-product -->
                                <div class="checkout-quantity m-auto"></div>
                                <div class="checkout-price h-100 m-auto">
                                    <span class="text-secondary">Rp. 55.000</span>
                                </div> <!-- end checkout-price -->
                            </div>
                        </div> <!-- end item-checkout -->
                        <div class="address-checkout p-5">
                            <ul class="p-0">
                                <li>
                                    <h6 class="text-secondary">SHIPPING ADDRESS</h6>
                                </li>
                                <li>
                                    <p class="font-weight-bold mb-0">Agil Adi</p>
                                </li>
                                <li>
                                    <p class="text-secondary font-weight-light">Jl. SWK Jl. Ring Road Utara No.104, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283</p>
                                </li>
                            </ul>
                            <ul class="p-0">
                                <li>
                                    <h6 class="text-secondary">PAYMENT METHOD</h6>
                                </li>
                                <li><i class="fa fa-credit-card"></i><span class="ml-3 font-weight-bold">Transfer Bank - BNI</span></li>
                            </ul>
                            <ul class="p-0">
                                <li><i class="fa fa-tags"> </i><input type="text" class="ml-3 " placeholder="Add promo code"> <button href="" class="btn btn-brown rounded-0">Submit</button></li>
                                <small><i class="text-danger">invalid code !</i></small>
                            </ul>
                        </div> <!-- end address-checkout -->
                    </div> <!-- end flex-row -->
                    <div class="d-flex justify-content-between p-5">
                        <button class="btn btn-white">Back</button>
                        <button class="btn btn-brown">Pay Rp.1.600.500</button>
                    </div> <!-- end d-flex -->
                </div> <!-- end checkout-box -->
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