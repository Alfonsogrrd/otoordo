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
            <h1>ODYSSEY</h1>
            <p>Luxury MPV for Premium Family Comfort</p>
        </div>

        <!-- Price Section -->
        <div class="price-section">
            <h3>Starting From Rp 776.000.000</h3>
        </div>

        <!-- Image Section -->
        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/honda/odyssey.png" alt="ODYSSEY" width="400" height="400">
        </div>

        <!-- Engine Section -->
        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>2.4L i-VTEC</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>173 HP</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>225 Nm</span>
            </div>
        </div>

        <!-- Transmission Section -->
        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>CVT with Earth Dreams Technology</span>
            </div>
        </div>

        <!-- Features Section -->
        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>LED Projector Headlights</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Premium Leather Upholstery, Multi-Zone Climate Control</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Honda Sensing, Lane Keeping Assist, Adaptive Cruise Control</span>
            </div>
        </div>

        <!-- Back Button -->
        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
