<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
    <div class="vehicle-title">
        <h1>S-CLASS</h1>
        <p>The Pinnacle of Luxury</p>
    </div>

    <div class="price-section">
        <h3>Starting From Rp 3.100.000.000</h3>
    </div>

    <div class="vehicle-image" style="text-align: center;">
        <img src="../images/mercy/sclass.png" alt="S-CLASS" width="400" height="400">
    </div>

    <div class="spec-section">
        <h2>Engine Specifications</h2>
        <div class="spec-item">
            <strong>Engine Type:</strong> <span>4.0L V8 Biturbo</span>
        </div>
        <div class="spec-item">
            <strong>Power Output:</strong> <span>496 HP</span>
        </div>
        <div class="spec-item">
            <strong>Torque:</strong> <span>700 Nm</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Transmission</h2>
        <div class="spec-item">
            <strong>Type:</strong> <span>9-Speed Automatic</span>
        </div>
    </div>

    <div class="spec-section">
        <h2>Key Features</h2>
        <div class="spec-item">
            <strong>Lighting:</strong> <span>LED Headlights, LED Taillights</span>
        </div>
        <div class="spec-item">
            <strong>Comfort:</strong> <span>Heated and Ventilated Seats, Active Multicontour Seats</span>
        </div>
        <div class="spec-item">
            <strong>Safety:</strong> <span>Driver Assistance Package, Active Brake Assist</span>
        </div>
    </div>

    <div class="back-button">
        <button onclick="window.history.back()">Go Back</button>
    </div>
</div>

<?php include('footer.php'); ?>
</body>