<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
        <div class="vehicle-title">
            <h1>CR-V</h1>
            <p>Premium and Powerful SUV for Every Journey</p>
        </div>

        <div class="price-section">
            <h3>Starting From Rp 489.000.000</h3>
        </div>

        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/honda/crv.png" alt="CR-V" width="400" height="400">
        </div>

        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>1.5L Turbocharged i-VTEC</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>190 HP</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>243 Nm</span>
            </div>
        </div>

        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>CVT with Sport Mode</span>
            </div>
        </div>

        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>LED Projector Headlights</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Leather Upholstery, Dual Zone Climate Control</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Honda Sensing, Lane Keep Assist, Adaptive Cruise Control</span>
            </div>
        </div>

        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>