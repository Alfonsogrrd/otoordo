<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>PALISADE</h1>
        <p>Premium SUV with Elegant Design</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 910.000.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/hyundai/palisade.png" alt="PALISADE" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>3.8L V6</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>291 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>355 Nm</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Transmission</h2>
        <div class="spec-item">
            <strong>Type:</strong> <span>8-Speed Automatic</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Key Features</h2>
        <div class="spec-item">
            <strong>Lighting:</strong> <span>LED Headlights, LED DRLs</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>Premium Leather Seats, 12.3-inch Display</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>Forward Collision-Avoidance, Blind-Spot Detection</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
