<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>APV</h1>
        <p>Family MPV with Spacious Interior</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 234.000.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/suzuki/apv.png" alt="APV" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>1.5L 4-cylinder</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>95 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>132 Nm</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Transmission</h2>
        <div class="spec-item">
            <strong>Type:</strong> <span>4-speed Automatic Transmission</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Key Features</h2>
        <div class="spec-item">
            <strong>Lighting:</strong> <span>Halogen Headlights</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>Automatic Climate Control, 6.2-inch Touchscreen</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>Dual Airbags, ABS, Rear Parking Sensors</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
