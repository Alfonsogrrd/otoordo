<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>CX-3</h1>
        <p>Compact SUV with Mazda's Signature Style</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 365.500.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/mazda/cx3.png" alt="CX-3" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>2.0L Inline-4</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>148 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>192 Nm</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Transmission</h2>
        <div class="spec-item">
            <strong>Type:</strong> <span>6-Speed Automatic</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Key Features</h2>
        <div class="spec-item">
            <strong>Lighting:</strong> <span>LED Headlights</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>Leather Upholstery, 7-inch Infotainment</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>Smart City Brake Support, Lane Departure Warning</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
