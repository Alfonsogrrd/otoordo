<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>IONIQ 5</h1>
        <p>Futuristic Electric SUV</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 718.000.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/hyundai/ioniq5.png" alt="IONIQ 5" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>Electric</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>168 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>350 Nm</span>
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
            <strong>Lighting:</strong> <span>LED Headlights, Pixel LED Taillights</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>Panoramic Sunroof, 12-inch Touchscreen</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>Forward Collision-Avoidance, Lane Keeping Assist</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>