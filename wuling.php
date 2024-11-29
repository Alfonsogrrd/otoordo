<html>
<?php include('framework/html_head.html'); ?>

<body style="font-family: 'Outfit', sans-serif;">
    <?php include('framework/nav.php'); ?>

    <header class="text-center py-4">
        <div class="brand-logo">
            <img src="images/brand/wulinglogo.png" alt="Brand Logo" width="100">
        </div>
        <h1 class="brand-name mt-2">WULING</h1>
    </header>

    <main class="container my-4 flex-grow-1">
        <section class="text-center mb-5">
            <h2 class="car-type py-2">MPV</h2>
        </section>

        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/wuling/cortez.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">CORTEZ</h3> 
                    <p class="car-description">Starting From Rp 273.800.000</p> <br>
                    <a href="wuling/cortez.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <main class="container my-4 flex-grow-1">
        <section class="text-center mb-5">
            <h2 class="car-type py-2">SUV</h2>
        </section>

        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/wuling/confero.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">CONFERO</h3> 
                    <p class="car-description">Starting From Rp 150.800.000</p> <br>
                    <a href="wuling/confero.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/wuling/alvez.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">ALVEZ</h3> 
                    <p class="car-description">Starting From Rp 209.000.000</p> <br>
                    <a href="wuling/alvez.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/wuling/almaz.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">ALMAZ</h3> 
                    <p class="car-description">Starting From Rp 279.500.000</p> <br>
                    <a href="wuling/almaz.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('.learn-more').forEach(button => {
            button.addEventListener('click', () => {
                alert('More details about this car will be shown here!');
            });
        });
    </script>

    <?php include('framework/footer.php'); ?>

</body>
</html>
