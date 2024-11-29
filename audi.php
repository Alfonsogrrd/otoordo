<html>
<?php include('framework/html_head.html'); ?>

<body style="font-family: 'Outfit', sans-serif;">
    <?php include('framework/nav.php'); ?>

    <header class="text-center py-4">
        <div class="brand-logo">
            <img src="images/brand/audilogo.png" alt="Brand Logo" width="100">
        </div>
        <h1 class="brand-name mt-2">AUDI</h1>
    </header>

    <main class="container my-4 flex-grow-1">
        <section class="text-center mb-5">
            <h2 class="car-type py-2">SUV</h2>
        </section>

        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/audi/q8.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">Q8</h3> 
                    <p class="car-description">Starting From Rp 2.460.000.000</p> <br>
                    <a href="audi/q8.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/audi/q5.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">Q5</h3> 
                    <p class="car-description">Starting From Rp 1.550.000.000</p> <br>
                    <a href="audi/q5.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/audi/q3.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">Q3</h3> 
                    <p class="car-description">Starting From Rp 875.000.000</p> <br>
                    <a href="audi/q3.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </main>


    <main class="container my-4 flex-grow-1">
        <section class="text-center mb-5">
            <h2 class="car-type py-2">SEDAN</h2>
        </section>

        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/audi/a8l.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">A8 L</h3> 
                    <p class="car-description">Starting From Rp 2.950.000.000</p> <br>
                    <a href="audi/a8l.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/audi/a4l.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">A4</h3> 
                    <p class="car-description">Starting From Rp 1.280.000.000</p> <br>
                    <a href="audi/a4.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/audi/a3.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">A3</h3> 
                    <p class="car-description">Starting From Rp 678.000.000</p> <br>
                    <a href="audi/a3.php">
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
