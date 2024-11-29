<html>
<?php include('framework/html_head.html'); ?>

<body style="font-family: 'Outfit', sans-serif;">
    <?php include('framework/nav.php'); ?>

    <header class="text-center py-4">
        <div class="brand-logo">
            <img src="images/brand/bmwlogo.png" alt="Brand Logo" width="100">
        </div>
        <h1 class="brand-name mt-2">BMW</h1>
    </header>

    <main class="container my-4 flex-grow-1">
        <section class="text-center mb-5">
            <h2 class="car-type py-2">SUV</h2>
        </section>

        <div class="row justify-content-center g-4">
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/bmw/x7.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">X7</h3> 
                    <p class="car-description">Starting From Rp 2.300.000.000</p> <br>
                    <a href="bmw/x7.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/bmw/x5.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">X5</h3> 
                    <p class="car-description">Starting From Rp 1.560.000.000</p> <br>
                    <a href="bmw/x5.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/bmw/x3.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">X3</h3> 
                    <p class="car-description">Starting From Rp 969.000.000</p> <br>
                    <a href="bmw/x3.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/bmw/x1.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">X1</h3> 
                    <p class="car-description">Starting From Rp 669.000.000</p> <br>
                    <a href="bmw/x1.php">
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
                    <img src="images/bmw/i4.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">I4</h3> 
                    <p class="car-description">Starting From Rp 2.060.000.000</p> <br>
                    <a href="bmw/i4.php">
                        <button class="btn btn-custom" style="background-color: #FFCB2C">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="car-card p-3 border" style="width: 250px; height: 450px;"> <!-- PASTIKAN W DAN H -->
                    <img src="images/bmw/7series.png" alt="Car Picture" class="img-fluid mb-3">
                    <h3 class="car-title">7 SERIES</h3> 
                    <p class="car-description">Starting From Rp 2.150.000.000</p> <br>
                    <a href="bmw/7series.php">
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
