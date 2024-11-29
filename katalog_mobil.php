<?php include('framework/html_head.html'); ?>

<body>
    <?php include('framework/nav.php'); ?>

    <div class="container mt-5" style="font-family: 'Outfit', sans-serif;">
        <h1 class="text-center mb-4">CAR BRAND</h1>
        <br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php 
            $brands = [
                ['img' => 'audilogo.png', 'name' => 'AUDI', 'link' => 'audi.php'],
                ['img' => 'bmwlogo.png', 'name' => 'BMW', 'link' => 'bmw.php'],
                ['img' => 'bydlogo.png', 'name' => 'BYD', 'link' => 'byd.php'],
                ['img' => 'cherylogo.png', 'name' => 'CHERY', 'link' => 'chery.php'],
                ['img' => 'daihatsulogo.png', 'name' => 'DAIHATSU', 'link' => 'daihatsu.php'],
                ['img' => 'hondalogo.png', 'name' => 'HONDA', 'link' => 'honda.php'],
                ['img' => 'hyundailogo.png', 'name' => 'HYUNDAI', 'link' => 'hyundai.php'],
                ['img' => 'isuzulogo.png', 'name' => 'ISUZU', 'link' => 'isuzu.php'],
                ['img' => 'mazdalogo.png', 'name' => 'MAZDA', 'link' => 'mazda.php'],
                ['img' => 'mercylogo.png', 'name' => 'MERCEDES - BENZ', 'link' => 'mercy.php'],
                ['img' => 'mbslogo.png', 'name' => 'MITSUBISHI', 'link' => 'mitsubishi.php'],
                ['img' => 'nissanlogo.png', 'name' => 'NISSAN', 'link' => 'nissan.php'],
                ['img' => 'suzukilogo.png', 'name' => 'SUZUKI', 'link' => 'suzuki.php'],
                ['img' => 'teslalogo.png', 'name' => 'TESLA', 'link' => 'tesla.php'],
                ['img' => 'toyotalogo.png', 'name' => 'TOYOTA', 'link' => 'toyota.php'],
                ['img' => 'wulinglogo.png', 'name' => 'WULING', 'link' => 'wuling.php']
            ];

            foreach ($brands as $brand): ?>
                <div class="col">
                    <div class="card promo-card h-100 text-center shadow-sm" style="font-family: 'Outfit', sans-serif;">
                        <img src="images/brand/<?php echo $brand['img']; ?>" class="card-img-top" alt="<?php echo $brand['name']; ?> Logo">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $brand['name']; ?></h3>
                            <a href="<?php echo $brand['link']; ?>" class="btn" style="background-color: #FFCB2C;">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <br>

    <script>
        const promoCards = document.querySelectorAll('.promo-card');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, { threshold: 0.1 });

        promoCards.forEach(card => observer.observe(card));
    </script>

    <style>
        .promo-card {
            opacity: 0; 
            transform: translateY(20px);
            transition: all 0.5s ease-in-out; 
        }

        .promo-card.fade-in {
            opacity: 1;
            transform: translateY(0); 
        }
    </style>
</body>

<?php include('framework/footer.php'); ?>
