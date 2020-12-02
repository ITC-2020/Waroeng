<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Not Found - WAROENG</title>
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
                <img src="./assets/img/error_404.svg" alt="">
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