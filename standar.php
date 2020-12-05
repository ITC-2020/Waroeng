<!-- penulisan css/js disesuaikan dengan nama file masing masing (dipisah) -->
<!-- Menggunakan bahasa inggris dalam penamaan -->
<!-- SARAN : Setiap akhir dari penutup div diberi nama, agar mudah mencari pasangan tag -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerangka Standar</title>
</head>

<body>
    <!-- pada body dibagi menjadi 3 bagian besar yaitu header, main, serta footer seperti dibawah ini-->
    <header>
        <!-- berisi tag nav lalu include nav.html -->
        <nav>
            <!-- gunakan php untuk include/memasukkan berkas nav.html dari folder inc -->
        </nav>
    </header> <!-- end header -->

    <main>
        <!-- berisi konten utama. gunakan div id="content" -->
        <!-- untuk halaman yang tidak wajib login gunakan php disini (sebelum content) include login.html dan register.html -->
        <div id="content">
            <!-- disini silhkan isi konten -->
        </div> <!-- end content -->
    </main>

    <footer>
        <!-- berisi bagian footer. gunakan php untuk include footer.html dari folder inc -->
    </footer>

    <!-- Gunakan bagian ini untuk memasukkan file js -->
</body>

</html>