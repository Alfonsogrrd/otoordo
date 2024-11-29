<html>
<?php include('framework/html_head.html'); ?>

<body style="font-family: 'Outfit', sans-serif;">
    <?php include('framework/nav.php'); ?>

    <header class="text-center py-4">
        <div class="brand-logo">
            <img src="images/brand/hyundailogo.png" alt="Brand Logo" width="100">
        </div>
        <h1 class="brand-name mt-2">HYUNDAI</h1>
    </header>

    <main class="container my-4 flex-grow-1">
        <section class="text-center mb-5">
            <h2 class="car-type py-2">MPV</h2>
        </section>

        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/hyundai/stargazer.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">STARGAZER</h3> 
                    <p class="car-description">Starting From Rp 175.900.000</p> <br>
                    <a href="hyundai/stargazer.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/hyundai/staria.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">STARIA</h3> 
                    <p class="car-description">Starting From Rp 924.000.000</p> <br>
                    <a href="hyundai/staria.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/hyundai/h1.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">H1</h3> 
                    <p class="car-description">Starting From Rp 506.500.000</p> <br>
                    <a href="hyundai/h1.php">
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
                    <img src="images/hyundai/creta.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">CRETA</h3>
                    <p class="car-description">Starting From Rp 288.000.000</p>
                    <a href="hyundai/creta.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/hyundai/santafee.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">SANTA FE </h3>
                    <p class="car-description">Starting From Rp 699.000.000</p>
                    <a href="hyundai/santafe.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/hyundai/palisade.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">PALISADE</h3>
                    <p class="car-description">Starting From Rp 910.000.000</p>
                    <a href="hyundai/palisade.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/hyundai/ioniq5.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">IONIQ 5</h3>
                    <p class="car-description">Starting From Rp 718.000.000</p>
                    <a href="hyundai/ioniq5.php">
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
