<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
        <div class="vehicle-title">
            <h1>Audi A4</h1>
            <p>Sporty Elegance with Precision Engineering</p>
        </div>

        <div class="price-section">
            <h3>Starting From Rp 1.280.000.000</h3>
        </div>

        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/audi/a4lpng" alt="Audi A4" width="400" height="400">
        </div>

        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>2.0L TFSI 4-cylinder Turbocharged</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>190 HP @ 4500 RPM</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>320 Nm @ 1500 RPM</span>
            </div>
        </div>

        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>7-Speed S tronic Dual-Clutch Automatic</span>
            </div>
        </div>

        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>LED Headlights, Dynamic Turn Signals</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Sports Seats, MMI Touch Interface</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Adaptive Cruise Control, Lane Assist, Parking Sensors</span>
            </div>
        </div>

        <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The Audi A4 combines sporty elegance with precision engineering, delivering a thrilling driving experience with its 
                2.0L TFSI 4-cylinder turbocharged engine that produces 190 horsepower and 320 Nm of torque. This performance is paired 
                with a 7-speed S tronic dual-clutch automatic transmission for smooth and efficient power delivery. The A4 is equipped 
                with LED headlights, dynamic turn signals, and sports seats, making it both stylish and comfortable. With cutting-edge 
                safety features like Adaptive Cruise Control, Lane Assist, and Parking Sensors, the A4 ensures safety and convenience 
                on every drive. Starting from Rp 1.280.000.000, the Audi A4 is the perfect blend of performance and luxury.
            </p>
        </div>

        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
