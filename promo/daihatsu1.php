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
            <img src="images/daihatsu1.png" alt="Promo Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Promo Details -->
        <div class="promo-details">
            <h3>One Day Service Body Repair!</h3>
            <p id="promoDescription">Ada yang baru nih khusus untuk sahabat setia Daihatsu! Daihatsu baru saja membuka layanan Body 
                Repair One Day Service lho! Tampilan kendaraanmu bisa kembali seperti semula hanya dalam 1 hari.</p>
            <p>Syarat dan ketentuan:
            Layanan berlaku di semua bengkel body repair Astra Daihatsu
            Untuk mendapatkan layanan one day service, wajib booking dan datang sebelum jam 10 pagi.
            Pekerjaan maksimal 3 panel.
            </p>
            <p>
            Untuk info lebih lanjut terkait promo atau program service mobil dapat menghubungi Daihatsu Access 1500-898 atau 
            mengunjungi website resmi kami di Astra-Daihatsu.id.
            Yuk rekondisi mobil di Daihatsu sekarang!
            </p>
            <div class="promo-description">
                <h5>Promo Features</h5>
                <ul>
                    <li>Rekondisi Mobil Selesai Dalam Satu Hari</li>
                </ul>
            </div>
            <br>
            <a href="https://www.astra-daihatsu.id/promosi/one-day-service" class="btn btn-custom" style="background-color: #FFCB2C" target="_blank">Learn More</a>
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
