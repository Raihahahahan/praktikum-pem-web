<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['username']);
?>
<head>

</head>

<header class="bar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li>|</li>
        <li><a href="index.php#about">About SuperMall</a></li>
        <li>|</li>
        <li><a href="index.php#sosmed">Ikuti Kami</a> </li>
    </ul>
</header>
<nav class="navbar">
    <div class="humberger"></div>
    <a href="index.php" id="light"><img src="assets/logo.png" alt="logo"></a>
    <a href="index.php" class="hide-img" id="dark"><img src="assets/whitelogo.png" alt="logo"></a>
    <search class="hidden-konten">
        <form action="" class="search-bar">
            <input type="text" name="search" id="searchBar" placeholder="Cari Di SuperMall" class="search-input" onkeyup="searchProducts()">
            <button class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
        </form>
        <div class="dropdown" id="dropdown">
        <div class="category-container">
                    <div class="kategori-box">
                        <a href="kategori-handphone.php" class="category">Handphone</a>
                    </div>
                    <div class="product-container">
                      <a href="product-iphone.php" class="product">Handphone Iphone 14 Promax</a>
                      <a href="product-nokia.php" class="product">Handphone Nokia 820</a>
                      <a href="product-samsung.php" class="product">Handphone Samsung Galaxy  Z Flip 6</a>
                    </div>
                </div>
                <div class="category-container">
                    <div class="kategori-box">
                        
                        <a href="kategori.php" class="category">Baju</a>
                    </div>
                    <div class="product-container">
                    </div>
                </div>
              
                <div class="category-container">
                    <div class="kategori-box">

                        <a href="kategori.php" class="category">Celana</a>
                    </div>
                    <div class="product-container">
                    </div>
                </div>
                <div class="category-container">
                    <div class="kategori-box">
                        <a href="kategori.php" class="category">Sepatu</a>
                    </div>
                    <div class="product-container">
                    </div>
                </div>
                <div class="category-container">
                    <div class="kategori-box">
                        <a href="kategori.php" class="category">Make Up</a>
                    </div>
                    <div class="product-container">
                    </div>
                </div>
                <div class="category-container">
                    <div class="kategori-box">
                        <a href="kategori.php" class="category">Skincare</a>
                    </div>
                    <div class="product-container">
                    </div>
                </div>
                <div class="category-container">
                    <div class="kategori-box">
                        <a href="kategori.php" class="category">Perabotan</a>
                    </div>
                    <div class="product-container">
                    </div>
                </div>
        </div>
    </search>
    <div class="login">
        <?php if ($isLoggedIn): ?>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a href="logout.php" class="logout">Logout</a> 
            <a href="gantipass.php">Ganti</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="registrasi.php">Register</a>
        <?php endif; ?>
    </div>
    <div class="button-dark">
        <input type="checkbox" id="darkmode-toggle"/>
        <label for="darkmode-toggle">
        <svg version="1.1" class="sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">

                    <rect x="152.994" y="58.921" transform="matrix(0.3827 0.9239 -0.9239 0.3827 168.6176 -118.5145)" width="40.001" height="16"/>
                    <rect x="46.9" y="164.979" transform="matrix(0.9239 0.3827 -0.3827 0.9239 71.29 -12.4346)" width="40.001" height="16"/>
                    <rect x="46.947" y="315.048" transform="matrix(0.9239 -0.3827 0.3827 0.9239 -118.531 50.2116)" width="40.001" height="16"/>
                    
                        <rect x="164.966" y="409.112" transform="matrix(-0.9238 -0.3828 0.3828 -0.9238 168.4872 891.7491)" width="16" height="39.999"/>
                    
                        <rect x="303.031" y="421.036" transform="matrix(-0.3827 -0.9239 0.9239 -0.3827 50.2758 891.6655)" width="40.001" height="16"/>
                    
                        <rect x="409.088" y="315.018" transform="matrix(-0.9239 -0.3827 0.3827 -0.9239 701.898 785.6559)" width="40.001" height="16"/>
                    
                        <rect x="409.054" y="165.011" transform="matrix(-0.9239 0.3827 -0.3827 -0.9239 891.6585 168.6574)" width="40.001" height="16"/>
                    <rect x="315.001" y="46.895" transform="matrix(0.9238 0.3828 -0.3828 0.9238 50.212 -118.5529)" width="16" height="39.999"/>
                    <path d="M248,88c-88.224,0-160,71.776-160,160s71.776,160,160,160s160-71.776,160-160S336.224,88,248,88z M248,392
                        c-79.4,0-144-64.6-144-144s64.6-144,144-144s144,64.6,144,144S327.4,392,248,392z"/>
                    <rect x="240" width="16" height="72"/>
                    <rect x="62.097" y="90.096" transform="matrix(0.7071 0.7071 -0.7071 0.7071 98.0963 -40.6334)" width="71.999" height="16"/>
                    <rect y="240" width="72" height="16"/>
                    
                        <rect x="90.091" y="361.915" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 -113.9157 748.643)" width="16" height="71.999"/>
                    <rect x="240" y="424" width="16" height="72"/>
                    
                        <rect x="361.881" y="389.915" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 397.8562 960.6281)" width="71.999" height="16"/>
                    <rect x="424" y="240" width="72" height="16"/>
                    <rect x="389.911" y="62.091" transform="matrix(0.7071 0.7071 -0.7071 0.7071 185.9067 -252.6357)" width="16" height="71.999"/>
                </svg>
                    <svg version="1.1" class="moon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 49.739 49.739" style="enable-background:new 0 0 49.739 49.739;" xml:space="preserve">
                    <path d="M25.068,48.889c-9.173,0-18.017-5.06-22.396-13.804C-3.373,23.008,1.164,8.467,13.003,1.979l2.061-1.129l-0.615,2.268
                    c-1.479,5.459-0.899,11.25,1.633,16.306c2.75,5.493,7.476,9.587,13.305,11.526c5.831,1.939,12.065,1.492,17.559-1.258v0
                    c0.25-0.125,0.492-0.258,0.734-0.391l2.061-1.13l-0.585,2.252c-1.863,6.873-6.577,12.639-12.933,15.822
                    C32.639,48.039,28.825,48.888,25.068,48.889z M12.002,4.936c-9.413,6.428-12.756,18.837-7.54,29.253
                    c5.678,11.34,19.522,15.945,30.864,10.268c5.154-2.582,9.136-7.012,11.181-12.357c-5.632,2.427-11.882,2.702-17.752,0.748
                    c-6.337-2.108-11.473-6.557-14.463-12.528C11.899,15.541,11.11,10.16,12.002,4.936z"/></svg>
        </label>
        <div class="background"></div>
    </div>
    <div class="konten-humberger">
        <button class="humberger-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>
    </div>
</nav>

