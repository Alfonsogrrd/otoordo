<html>
<?php include('framework/html_head.html'); ?>

<body style="font-family: 'Outfit', sans-serif;">
    <?php include('framework/nav.php'); ?>

    <header class="text-center py-4">
        <div class="brand-logo">
            <img src="images/brand/nissanlogo.png" alt="Brand Logo" width="100">
        </div>
        <h1 class="brand-name mt-2">NISSAN</h1>
    </header>

    <main class="container my-4 flex-grow-1">
        <!-- Car Type Section -->
        <section class="text-center mb-5">
            <h2 class="car-type py-2">MPV</h2>
        </section>

        <!-- Car Listings -->
        <div class="row justify-content-center g-4">
            <!-- Example Car Card -->
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/nissan/livina.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">LIVINA</h3> 
                    <p class="car-description">Starting From Rp 208.300.000</p> <br>
                    <a href="nissan/livina.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/nissan/serena.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">SERENA</h3> 
                    <p class="car-description">Starting From Rp 462.200.000</p> <br>
                    <a href="nissan/serena.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </main>


    <main class="container my-4 flex-grow-1">
        <!-- Car Type Section -->
        <section class="text-center mb-5">
            <h2 class="car-type py-2">SUV</h2>
        </section>

        <!-- Car Listings -->
        <div class="row justify-content-center g-4">
            <!-- Example Car Card -->
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/nissan/xtrail.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">X-TRAIL</h3> 
                    <p class="car-description">Starting From Rp 547.700.000</p> <br>
                    <a href="nissan/xtrail.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/nissan/terra.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">TERRA</h3> 
                    <p class="car-description">Starting From Rp 478.900.000</p> <br>
                    <a href="nissan/terra.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/nissan/juke.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">JUKE</h3> 
                    <p class="car-description">Starting From Rp 303.300.000</p> <br>
                    <a href="nissan/juke.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script>
        // Interactivity for "Learn More" buttons
        document.querySelectorAll('.learn-more').forEach(button => {
            button.addEventListener('click', () => {
                alert('More details about this car will be shown here!');
            });
        });
    </script>

    <?php include('framework/footer.php'); ?>

</body>
</html>
