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
            <h1>All New Vios</h1>
            <p>Sporty and Stylish Sedan for Every Journey</p>
        </div>

        <!-- Price Section -->
        <div class="price-section">
            <h3>Starting From Rp 369.900.000</h3>
        </div>

        <!-- Image Section -->
        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/toyota/vios.png" alt="Toyota All New Vios" width="400" height="400">
        </div>

        <!-- Engine Section -->
        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>1.5L 4-cylinder DOHC</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>106 HP @ 6000 RPM</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>140 Nm @ 4200 RPM</span>
            </div>
        </div>

        <!-- Transmission Section -->
        <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>CVT (Continuously Variable Transmission)</span>
            </div>
        </div>

        <!-- Features Section -->
        <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>LED Headlights, LED Daytime Running Lights</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Touchscreen with Apple CarPlay & Android Auto, Digital Air Conditioning</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Toyota Safety Sense, Pre-Collision System, Lane Departure Alert, 7 Airbags</span>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The All New Vios 2024 is a sporty and stylish sedan designed to offer a dynamic driving experience while delivering 
                exceptional fuel efficiency. Powered by a 1.5L 4-cylinder engine, the Vios produces 106 HP and a torque of 140 Nm, 
                paired with a CVT transmission for smooth and responsive driving. With sleek, modern styling and cutting-edge features 
                like a touchscreen infotainment system with Apple CarPlay and Android Auto, the All New Vios is a perfect blend of 
                performance and technology. Additionally, Toyota Safety Sense features such as Pre-Collision System and Lane Departure 
                Alert ensure a safe and confident driving experience. Starting from Rp 369.900.000, the All New Vios is an ideal choice 
                for those who seek performance, comfort, and safety in a compact sedan.
            </p>
        </div>

        <!-- Back Button -->
        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
