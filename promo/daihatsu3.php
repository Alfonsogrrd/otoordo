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
            <img src="images/daihatsu3.png" alt="Promo Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Promo Details -->
        <div class="promo-details">
            <h3>Mau Service? Booking Dulu!</h3>
            <p id="promoDescription">Promo Parade Kinclongin Kembali hadir di tahun ini! Kinclongin memberikan keuntungan sampai dengan diskon 30% lho! Kinclongin mobilmu dengan pekerjaan seperti pengecatan body, dan poles all body.</p>
            <p>Lebih lanjut, berikut detail promo Parade Kinclongin: <br>
                1. Diskon 30% Jasa perbaikan body <br>
                2. Free poles all body <br>
                3. Diskon 25% jasa pekerjaan AC <br>
            </p>
            <p>
            Untuk info lebih lanjut terkait promo atau program service mobil dapat menghubungi Daihatsu Access 1500-898 atau mengunjungi website resmi kami di Astra-Daihatsu.id.
            </p>
            <div class="promo-description">
                <h5>Promo Features</h5>
                <ul>
                    <li>Diskon 30% Jasa Pengecatan</li>
                    <li>FREE Poles All Body</li>
                    <li>25% Jasa Perbaikan AC</li>
                </ul>
            </div>
            <br>
            <a href="https://www.astra-daihatsu.id/promosi/promo-kinclongin-2024" class="btn btn-custom" style="background-color: #FFCB2C" target="_blank">Learn More</a>
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
