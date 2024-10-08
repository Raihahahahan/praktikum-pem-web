<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/kategori-design.css">
    <title>SuperMall | Semua Kategori</title>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="kontenhum">
        <a href="index.php">Beranda</a>
        <a href="index.php#about">About</a>
        <div class="button-login-regis">
            <a href="login.php">Login</a>
            <a href="registrasi.php">regis</a>
        </div>

    </div>

   


    <section class="container-halaman-kategori">
        <div class="semua-kategori">
            <div class="kategori-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                  </svg>
                <h1>Semua Kategori</h1>

            </div>
            <div class="kategori-link">

                <a href="kategori-handphone.php">Handphone</a>
                <a href="kategori.php">Baju</a>
                <a href="kategori.php">Celana</a>
                <a href="kategori.php">Sepatu</a>
                <a href="kategori.php">Make Up</a>
                <a href="kategori.php">Skincare</a>
                <a href="kategori.php">Perabotan</a>
            </div>

        </div>
        <div class="konten-product">
            <div class="product-box">
                <div class="konten-foto">
                    <img src="assets/nokia820.jpg" alt="">
                </div>
                <div class="product-text">
                    <h3>Handphone Nokia 820 | New</h3>
                    <h4>Harga : Rp 99.999.999</h4>
                    <div class="button-beli">
                        <a href="product-iphone.php">Beli Sekarang</a>
                    </div>

                </div>
            </div>
            <div class="product-box">
                <div class="konten-foto">
                    <img src="assets/ip14.jpg" alt="">
                </div>
                <div class="product-text">
                    <h3>Handphone Iphone 14 Promax | New I box</h3>
                    <h4>Harga : Rp 13.999.999</h4>
                    <div class="button-beli">
                        <a href="product-nokia.php">Beli Sekarang</a>
                    </div>

                </div>
            </div>
            <div class="product-box">
                <div class="konten-foto">
                    <img src="assets/samsung.png" alt="">
                </div>
                <div class="product-text">
                    <h3>Handphone Samsung Galaxy Z Flip 6 | New</h3>
                    <h4>Harga : Rp 9.999.999</h4>
                    <div class="button-beli">
                        <a href="product-samsung.php">Beli Sekarang</a>
                    </div>
        
                </div>
            </div>
            
        </div>
    </section>

    <script src="scripts/app.js"></script>
</body>
</html>