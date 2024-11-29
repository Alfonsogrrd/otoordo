<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>MODEL 3</h1>
        <p>Electric Sedan with High Performance</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 539.500.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/tesla/model3.png" alt="MODEL 3" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>Dual Electric Motors</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>283 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>450 Nm</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Transmission</h2>
        <div class="spec-item">
            <strong>Type:</strong> <span>Single-Speed Transmission</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Key Features</h2>
        <div class="spec-item">
            <strong>Lighting:</strong> <span>LED Headlights, LED Taillights</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>15-inch Touchscreen, Autopilot</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>Dual Airbags, Automatic Emergency Braking, Stability Control</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
