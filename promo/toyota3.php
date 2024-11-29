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
            <img src="images/toyota3.png" alt="Promo Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Promo Details -->
        <div class="promo-details">
            <h3>Partner Setia di Setiap Perjalananmu</h3>
            <p id="promoDescription">Dengan desain baru yang sporty dan dinamis, Toyota Rush sangat cocok untuk AutoFamily. 
                All New Toyota Rush juga hadir dengan fitur keamanan yang canggih yang termasuk dalam sistem 6 SRS Airbag, VSC (Vehicle Stability Control), 
                HSA (Hill Start Assist), ABS (Anti-Lock Breaking System) &amp; EBS (Emergency Breaking Signal) yang membuat perjalanan lebih aman dan nyaman.
            </p>
            <p>
                Dapatkan juga perawatan mobil menyeluruh dengan Free biaya Jasa Servis dan Suku Cadang salama 3 tahun 
                atau 60.000 KM dan Extended Warranty untuk setiap On Time Service* Yuk, segera dapatkan Toyota Rush di Auto2000!            </p>
            <div class="promo-description">
                <h5>Promo Features</h5>
                <ul>
                    <li>Cicilan Ringan 5,2%</li>
                    <li>DP Ringan 20%</li>
                </ul>
            </div>
            <br>
            <a href="https://auto2000.co.id/promosi/mobil-baru/cicilan-mobil-rush" class="btn btn-custom" style="background-color: #FFCB2C" target="_blank">Learn More</a>
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
