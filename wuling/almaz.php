<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>ALMAZ</h1>
        <p>Premium SUV with Modern Features</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 279.500.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/wuling/almaz.png" alt="Almaz" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>1.5L Turbo Inline-4</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>140 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>250 Nm</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Transmission</h2>
        <div class="spec-item">
            <strong>Type:</strong> <span>CVT</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Key Features</h2>
        <div class="spec-item">
            <strong>Lighting:</strong> <span>LED Headlights</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>12.3-inch Infotainment, Panoramic Sunroof</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>ADAS, Blind Spot Detection, 6 Airbags</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
