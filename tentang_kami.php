<head>
    <?php include('framework/tkhtml_head.html'); ?>
    <link rel="stylesheet" href="libs/tkstyle.css">
</head>
<body>
    <?php include('framework/nav.php'); ?>
    <div class="container">
        <div class="developer-profile section">
            <div class="logo">
                <img src="images/OtoOrdoLogoHwithe.png" alt="OtoOrdo Logo">
            </div>
            <div class="details">
                <h1>About Me</h1> <br>
                <p>Developer Name : Alfonso Gerardo</p>
                <p>NIM : 412023027</p>
                <p>Email: alfonso.412023027@civitas.ukrida.ac.id</p>
                <button onclick="showMessage()">Contact Developer</button>
            </div>
            <div class="photo">
                <img src="images/developer.jpeg" alt="Developer Photo">
            </div>
        </div>


        <div class="section">
            <h1>DEVELOPER PROFILE</h1> <br>
            <p><strong>As</strong> a third-semester Informatics Engineering student at 
            Universitas Kristen Krida Wacana. Currently, I am working on developing OtoOrdo, 
            a web-based platform dedicated to showcasing car catalogs and promotions. With a passion 
            for technology and web development, this project represents my commitment to learning and 
            applying programming skills while delivering a practical and user-friendly solution. 
            Through OtoOrdo, I aim to enhance my expertise in web technologies and contribute to 
            innovative digital solutions.
            </p>
        </div>

        <div class="section">
            <h1>ABOUT US</h1> <br>
            <p><strong>OtoOrdo</strong> is here to be a source of inspiration for automotive enthusiasts, 
                car lovers, and potential buyers seeking structured, accurate, and comprehensive 
                information about various types of vehicles. We understand that finding your 
                dream car is a journey that requires precise and easily accessible information. 
                At OtoOrdo, we are committed to providing the best experience in selecting a car 
                that suits your needs and lifestyle.
            </p>
        </div>

        <div class="section">
            <h1>OUR VISION</h1> <br>
            <p><strong>Becoming</strong> the most comprehensive and trusted automotive catalog platform, 
                helping every user choose their dream car in an easy and informative way.
            </p>
        </div>

        <div class="section">
            <h1>OUR MISSION</h1> <br>
            <ul>
                <li>Providing Comprehensive Information: Delivering accurate data on specifications, prices, and the advantages of each type of car.</li>
                <li>Simplifying Access to Information: Creating an intuitive and user-friendly navigation experience to ease the process of finding cars.</li>
                <li>Building Trust: Presenting honest and unbiased content, enabling users to make decisions based on reliable information.</li>
                <li>Inspiring the Younger Generation: Becoming a platform that inspires the younger generation to explore the world of automotive.</li>
            </ul>
        </div>
    </div>

    <script>
        function showMessage() {
            alert("Hubungi kami melalui email: alfonso.412023027@civitas.ukrida.ac.id");
        }
    </script>
    <?php include('framework/footer.php'); ?>
</body>