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
            <h1>All New Voxy</h1>
            <p>Your Premium Family MPV</p>
        </div>

        <!-- Price Section -->
        <div class="price-section">
            <h3>Starting From Rp 621.700.000</h3>
        </div>

        <!-- Image Section -->
        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/toyota/voxy.png" alt="Toyota Voxy" width="400" height="400">
        </div>

        <!-- Engine Section -->
        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>2.0L 4-cylinder Dynamic Force Engine</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>151 HP @ 6000 RPM</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>193 Nm @ 4400 RPM</span>
            </div>
        </div>

        <!-- Transmission Section -->
        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>CVT with Paddle Shifters</span>
            </div>
        </div>

        <!-- Features Section -->
        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>LED Headlights with Adaptive Function</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Dual-Zone Climate Control, Heated Seats</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Pre-Collision System, Lane Departure Alert</span>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The Toyota Voxy 2024 is a premium family MPV that offers a perfect blend of luxury, comfort,
                and advanced technology. With a powerful 2.0L engine, smooth CVT transmission, and a suite of
                cutting-edge safety features, it’s built to deliver a smooth and secure driving experience. 
                Whether you're commuting in the city or heading out on a road trip, the Voxy ensures an exceptional
                driving experience with its spacious cabin, intuitive infotainment system, and user-friendly
                features that make every journey a pleasure.
            </p>
        </div>

        <!-- Back Button -->
        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
