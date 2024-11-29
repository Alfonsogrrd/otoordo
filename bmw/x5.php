<?php include('nav.php'); ?>
<?php include("forhtml_head.html"); ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>

<div class="container">
       <div class="vehicle-title">
            <h1>BMW X5</h1>
            <p>Luxury SUV with Powerful Performance</p>
        </div>

       <div class="price-section">
            <h3>Starting From Rp 1.560.000.000</h3>
        </div>

       <div class="vehicle-image" style="text-align: center;">
            <img src="../images/bmw/x5.png" alt="BMW X5" width="400" height="400">
        </div>

       <div class="spec-section">
            <h2>Engine Specifications</h2>
            <div class="spec-item">
                <strong>Engine Type:</strong> <span>3.0L I6 TwinPower Turbo</span>
            </div>
            <div class="spec-item">
                <strong>Power Output:</strong> <span>335 HP @ 5000 RPM</span>
            </div>
            <div class="spec-item">
                <strong>Torque:</strong> <span>450 Nm @ 1300 RPM</span>
            </div>
        </div>

       <div class="spec-section">
            <h2>Transmission</h2>
            <div class="spec-item">
                <strong>Type:</strong> <span>8-Speed Steptronic Automatic</span>
            </div>
        </div>

       <div class="spec-section">
            <h2>Key Features</h2>
            <div class="spec-item">
                <strong>Lighting:</strong> <span>Adaptive LED Headlights, Automatic High Beams</span>
            </div>
            <div class="spec-item">
                <strong>Comfort:</strong> <span>Heated and Ventilated Seats, Panoramic Sunroof</span>
            </div>
            <div class="spec-item">
                <strong>Safety:</strong> <span>Active Cruise Control, Blind Spot Detection</span>
            </div>
        </div>

       <div class="description-section">
            <h2>About the Vehicle</h2>
            <p>
                The BMW X5 is the perfect balance between power, luxury, and innovation. It is powered by a 3.0L I6 TwinPower Turbo engine 
                that delivers 335 horsepower and 450 Nm of torque, ensuring smooth and responsive acceleration. Equipped with an 8-speed 
                Steptronic automatic transmission, the X5 offers precise control and comfort. The vehicle features Adaptive LED headlights, 
                a panoramic sunroof, and luxurious heated and ventilated seats. The X5 also comes with advanced safety features such as Active 
                Cruise Control and Blind Spot Detection. Starting from Rp 1.560.000.000, the BMW X5 provides a driving experience that is 
                both exhilarating and comfortable, making it the ultimate luxury SUV.
            </p>
        </div>

        <div class="back-button">
            <button onclick="window.history.back()">Go Back</button>
        </div>
</div>
<?php include('footer.php'); ?>
</body>
