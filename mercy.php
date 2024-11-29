<html>
<?php include('framework/html_head.html'); ?>

<body style="font-family: 'Outfit', sans-serif;">
    <?php include('framework/nav.php'); ?>

    <header class="text-center py-4">
        <div class="brand-logo">
            <img src="images/brand/mercylogo.png" alt="Brand Logo" width="100">
        </div>
        <h1 class="brand-name mt-2">MERCEDES - BENZ</h1>
    </header>

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
                    <img src="images/mercy/eqb.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">EQB</h3> 
                    <p class="car-description">Starting From Rp 1.680.000.000</p> <br>
                    <a href="mercy/eqb.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/mercy/gla.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">GLA CLASS</h3> 
                    <p class="car-description">Starting From Rp 1.710.000.000</p> <br>
                    <a href="mercy/gla.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/mercy/glb.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">GLB CLASS</h3> 
                    <p class="car-description">Starting From Rp 875.000.000</p> <br>
                    <a href="mercy/glb.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <main class="container my-4 flex-grow-1">
        <!-- Car Type Section -->
        <section class="text-center mb-5">
            <h2 class="car-type py-2">SEDAN</h2>
        </section>

        <!-- Car Listings -->
        <div class="row justify-content-center g-4">
            <!-- Example Car Card -->
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/mercy/sclass.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">S - CLASS</h3> 
                    <p class="car-description">Starting From Rp 3.100.000.000</p> <br>
                    <a href="mercy/sclass.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/mercy/eclass.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">E - CLASS</h3> 
                    <p class="car-description">Starting From Rp 890.000.000</p> <br>
                    <a href="mercy/eclass.php">
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
