<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
        <!-- Title -->
        <div class="vehicle-title">
            <h1>New Calya</h1>
            <p>Your Reliable Family MPV</p>
        </div>

        <!-- Price Section -->
        <div class="price-section">
            <h3>Starting From Rp 167.300.000</h3>
        </div>

        <!-- Image Section -->
        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/toyota/calya.png" alt="Toyota New Calya" width="400" height="400">
        </div>

        <!-- Engine Section -->
        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>1.2L 4-cylinder DOHC VVT-i</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>88 HP @ 6000 RPM</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>112 Nm @ 4000 RPM</span>
            </div>
        </div>

        <!-- Transmission Section -->
        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>5-speed Manual / 4-speed Automatic</span>
            </div>
        </div>

        <!-- Features Section -->
        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>Halogen Headlights</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Power Windows, Fabric Upholstery</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Dual Front Airbags, ABS with EBD</span>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The New Calya 2024 is the perfect solution for families seeking an affordable yet reliable MPV with excellent fuel
                efficiency and comfort. Powered by a 1.2L 4-cylinder engine, this vehicle is designed for everyday practicality while
                offering an easy and smooth driving experience. With a choice between a manual and automatic transmission, the New 
                Calya provides flexibility for various driving preferences. The spacious interior and user-friendly features ensure that 
                every journey is comfortable, while its safety features such as dual front airbags and ABS with EBD provide peace of mind.
            </p>
        </div>

        <!-- Back Button -->
        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
