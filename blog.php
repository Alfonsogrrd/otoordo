<?php include('framework/nav.php'); ?>
<?php include("framework/bhtml_head.html"); ?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/bstyle.css">
</head>
<body>
    <main class="container mt-4">
        <!-- Banner Section -->
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/blog1.png" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="images/blog2.png" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="images/banner3.png" class="d-block w-100" alt="Banner 3">
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
        
        <!-- Title Section -->
        <div class="text-center my-4">
            <h2><b>BLOG POSTS</b></h2>
        </div>

        <!-- Blog Cards Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <!-- Bagian thumbnail diganti dengan elemen gambar -->
                    <a href="https://www.viva.co.id/otomotif/mobil/1775416-3-mobil-baru-jepang-jadi-primadona-gjaw-2024">
                    <img src="images/blogt1.png" class="card-img-top" alt="3 Mobil Baru Jepang GJAW 2024">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2C6B2F;">3 Mobil Baru Jepang Jadi Primadona GJAW 2024</h5>
                        <p class="card-text">
                            Pameran GAIKINDO Jakarta Auto Week (GJAW) 2024 menjadi ajang 
                            peluncuran sejumlah kendaraan terbaru dari merek Jepang yang menarik perhatian pengunjung.
                        </p>
                    </div>
                </div>
            </div>
    

            <div class="col">
                <div class="card h-100">
                    <!-- Bagian thumbnail diganti dengan elemen gambar -->
                     <a href="https://www.liputan6.com/otomotif/read/5810834/hyundai-indonesia-bersiap-luncurkan-kona-n-line">
                    <img src="images/blogt2.png" class="card-img-top" alt="3 Mobil Baru Jepang GJAW 2024">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2C6B2F;">Hyundai Indonesia Bersiap Luncurkan Kona N Line</h5>
                        <p class="card-text">
                        PT Hyundai Motors Indonesia (HMID), terpantau agresif di pasar otomotif Tanah Air pada 2024, dengan meluncurkan sejumlah produk baru, mulai dari all-new Kona Electric, Creta Alpha, Ioniq 5 N, dan all-new Santa Fe.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <!-- Bagian thumbnail diganti dengan elemen gambar -->
                     <a href="https://www.cnnindonesia.com/otomotif/20241129095612-579-1171945/keluh-kesah-sales-soal-ppn-12-persen-tekan-penjualan-mobil-2025">
                    <img src="images/blogt3.png" class="card-img-top" alt="3 Mobil Baru Jepang GJAW 2024">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2C6B2F;">Keluh Kesah Sales Soal PPN 12 Persen Tekan Penjualan Mobil 2025</h5>
                        <p class="card-text">
                        Sejumlah pedagang mobil baru dari berbagai merek yang berpartisipasi di pameran otomotif Gaikindo Jakarta Auto Week (GJAW) 2024 menanggapi kenaikan Pajak Pertambahan Nilai (PPN) 12 persen. <br>
                        Penundaan kenaikan PPN menjadi 12 persen ini mendapat respons dari para tenaga penjual atau sales. Di antaranya Putra, tenaga penjual Suzuki yang menilai masih ada harapan di industri otomotif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <?php include('framework/footer.php'); ?> 
</body>
