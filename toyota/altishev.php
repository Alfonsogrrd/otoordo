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
            <h1>New Corolla Altis HEV</h1>
            <p>Premium Hybrid Sedan with Dynamic Performance</p>
        </div>

        <div class="price-section">
            <h3>Starting From Rp 629.200.000</h3>
        </div>

        <!-- Image Section -->
        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/toyota/altishev.png" alt="Toyota New Corolla Altis HEV" width="400" height="400">
        </div>

        <!-- Engine Section -->
        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>1.8L Hybrid 4-cylinder DOHC</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>121 HP @ 5200 RPM</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>142 Nm @ 3600 RPM</span>
            </div>
        </div>

        <!-- Transmission Section -->
        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>E-CVT (Electronically Controlled Continuously Variable Transmission)</span>
            </div>
        </div>

        <!-- Features Section -->
        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>LED Headlights, LED Daytime Running Lights</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Leather Upholstery, 9-inch Touchscreen with Apple CarPlay & Android Auto</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Toyota Safety Sense, Lane Departure Alert, Pre-Collision System, 7 Airbags</span>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The New Corolla Altis HEV 2024 combines eco-friendly hybrid technology with luxury and dynamic performance. 
                Powered by a 1.8L hybrid engine, it delivers a combined output of 121 HP and offers exceptional fuel efficiency. 
                The E-CVT transmission ensures smooth driving, while its sharp handling and sophisticated design make it ideal for those 
                seeking both performance and comfort. The Corolla Altis HEV comes equipped with a range of modern features, including 
                a 9-inch touchscreen, Apple CarPlay, Android Auto, and a suite of safety technologies such as Toyota Safety Sense and 
                Lane Departure Alert. Whether driving in the city or on highways, the New Corolla Altis HEV offers a refined and 
                exhilarating driving experience with a focus on sustainability.
            </p>
        </div>

        <!-- Back Button -->
        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
