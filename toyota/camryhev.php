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
            <h1>New Camry HEV</h1>
            <p>Premium Hybrid Sedan with Unmatched Luxury</p>
        </div>

        <!-- Price Section -->
        <div class="price-section">
            <h3>Starting From Rp 945.400.000</h3>
        </div>

        <!-- Image Section -->
        <div class="vehicle-image" style="text-align: center;">
            <img src="../images/toyota/camryhev.png" alt="Toyota New Camry HEV" width="400" height="400">
        </div>

        <!-- Engine Section -->
        <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>2.5L Hybrid 4-cylinder DOHC</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>211 HP (combined)</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>221 Nm @ 3600 RPM</span>
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
                <strong>Safety:</strong> <span>Toyota Safety Sense, Lane Departure Alert, Pre-Collision System, 10 Airbags</span>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The New Camry HEV 2024 is the epitome of luxury, performance, and eco-friendliness. Powered by a 2.5L Hybrid engine, it 
                delivers a combined output of 211 HP, ensuring dynamic performance while offering impressive fuel efficiency. 
                The E-CVT transmission enhances the driving experience with smooth acceleration, making it ideal for both city and long 
                highway drives. With a stunning design, advanced technology like the 9-inch touchscreen with Apple CarPlay and Android Auto, 
                and comprehensive safety features such as Toyota Safety Sense, Lane Departure Alert, and a full set of airbags, 
                the Camry HEV is a symbol of modern luxury and sustainability. 
                Starting from Rp 945.400.000, the New Camry HEV is a statement of sophistication and performance, with a commitment to 
                a greener future.
            </p>
        </div>

        <!-- Back Button -->
        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
