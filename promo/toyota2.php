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
            <img src="images/toyota2.png" alt="Promo Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Promo Details -->
        <div class="promo-details">
            <h3>Pilihan Terbaik Untuk Semua Generasi</h3>
            <p id="promoDescription">Berbagai promo pasti khusus untuk mobil pilihan keluarga Indonesia 
                <strong>Innova Zenix</strong> hadir di Auto2000. Yuk dapatkan pilihan program seperti 
                <strong>DP Ringan mulai 20% </strong>sekarang juga!
            </p>
            <p>
            Yuk, segera miliki Toyota Impian Anda dengan mengisi formulir penawaran di bawah ini!
            </p>
            <div class="promo-description">
                <h5>Promo Features</h5>
                <ul>
                    <li>DP Ringan 20%</li>
                </ul>
            </div>
            <br>
            <a href="https://auto2000.co.id/promosi/mobil-baru/promo-mobil-innova" class="btn btn-custom" style="background-color: #FFCB2C" target="_blank">Learn More</a>
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
