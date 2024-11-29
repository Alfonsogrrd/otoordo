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
            <img src="images/daihatsu2.png" alt="Promo Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Promo Details -->
        <div class="promo-details">
            <h3>Mau Service? Booking Dulu!</h3>
            <p id="promoDescription">Nikmati layanan promo booking service untuk mempermudah sahabat untuk melakukan service perbaikan atau perawatan berkala. 
                Dengan melakukan booking service, Sahabat akan mendapatkan beragam keuntungan eksklusif yang dapat dinikmati!</p>
            <p>1. Bebas Antri: Dengan booking service, Sahabat tidak perlu lagi khawatir tentang antrian panjang di bengkel. Nikmati kenyamanan waktu Sahabat tanpa harus menunggu lama. <br>
            2. Diskon Jasa 10%: Kami memberikan diskon istimewa sebesar 10% untuk semua jasa perawatan berkala. Ini adalah kesempatan Sahabat untuk merawat mobil Sahabat dengan harga yang lebih terjangkau.
            </p>
            <p>
            Segera lakukan booking service di bengkel Astra Daihatsu terdekat agar tidak ketinggalan promo Booking Service ini. <br>
            Untuk info lebih lanjut terkait promo atau program service kendaraan dapat menghubungi Daihatsu Access 1500-898 atau mengunjungi website resmi kami di www.astra-daihatsu.id.
            </p>
            <div class="promo-description">
                <h5>Promo Features</h5>
                <ul>
                    <li>Diskon 10% Jasa Perbaikan</li>
                </ul>
            </div>
            <br>
            <a href="https://www.astra-daihatsu.id/promosi/promo-booking-service" class="btn btn-custom" style="background-color: #FFCB2C" target="_blank">Learn More</a>
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
