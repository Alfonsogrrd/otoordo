<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('html_head.html'); ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="font-family: 'Outfit', sans-serif;">
    <?php include('nav.php'); ?>

    <div class="promo-container">
        <!-- Promo Picture -->
        <div class="promo-picture" id="promoImage">
            <img src="images/toyota1.png" alt="Promo Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Promo Details -->
        <div class="promo-details">
            <h3>Promo Auto Setia Bersama Toyota Pilihan</h3>
            <p id="promoDescription">Dapatkan bunga lebih ringan untuk Mobil Toyota pilihan keluarga. AutoFamily dapat menikmati Promo untuk<strong> 
            Toyota Avanza, Veloz, Rush, Raize</strong> yaitu <strong>DP mulai 10%.</strong></p>
            <p>Bagi AutoFamily yang membeli Toyota baru menggunakan Paket Avanza, Veloz, Raize dan 
                Rush kini juga sudah termasuk dengan perlindungan menyeluruh untuk mobil baru dengan 
                Free biaya Jasa Servis dan Suku Cadang selama 3 tahun atau 6x servis melalui layanan T-Care.*</p>
            <div class="promo-description">
                <h5>Promo Features</h5>
                <ul>
                    <li>DP Mulai 10%</li>
                    <li>Bunga Rendah 0%</li>
                </ul>
            </div>
            <br>
            <a href="https://auto2000.co.id/promosi/mobil-baru/promo-bunga-ringan-veloz-rush" class="btn btn-custom" style="background-color: #FFCB2C" target="_blank">Learn More</a>
        </div>
    </div>

    <script>
        document.getElementById('learnMoreBtn').addEventListener('click', function (e) {
            e.preventDefault();

            // Change content on button click
            const promoImage = document.getElementById('promoImage');
            const promoTitle = document.querySelector('.promo-details h3');
            const promoDescription = document.getElementById('promoDescription');

            promoImage.innerHTML = '<img src="images/toyota1.png" alt="Exclusive Offer" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">';
            promoImage.style.backgroundColor = "#007BFF"; // Change to blue on click

            promoTitle.textContent = "Amazing Toyota Promo!";
            promoDescription.textContent = "Get an exclusive deal on Toyota vehicles. Take advantage of low down payments and enjoy a 0% interest rate!";

            // You can also add more interactive features here if needed
        });
    </script>
    <?php include('footer.php'); ?>
</body>
</html>
