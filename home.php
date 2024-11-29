<?php include("framework/html_head.html"); ?>
<link rel="stylesheet" href="libs/bstyle.css">
    <body>
        <div class="container">

            <section class="home-section">
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/poster_otoordo.png" class="d-block w-100" alt="Banner 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner1.jpg" class="d-block w-100" alt="Banner 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner3.jpg" class="d-block w-100" alt="Banner 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                <div class="jumbotron bg-black text-light text-center py-5 mt-4">
                    <h1 class="display-4"><b>Welcome to OTOORDO</b></h1>
                    <p class="lead" style="font-family: 'Outfit', sans-serif; color: #2C6B2F;">" Explore further, Discover deeper. "</p>
                    <a href="katalog_mobil.php?page=mob" class="btn btn-warning btn-lg">See Katalog Mobil</a>
                </div>

                <div class="rilis-terbaru text-center my-4" style="font-family: 'Outfit', sans-serif;">
                    <h2 class="rilis-terbaru-title" style="color: #2C6B2F;">NEW RELEASES</h2>
                    <p class="lead">Get the Newest information about cars and exciting promotions only at OTOORDO!</p>
                    <p class="bantuan" style="color: #2C6B2F;">(<i>Right-click and Left-click)</i></p>

                </div>
                    <div id="carouselRilis" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/suzuki/grandvitara.png" class="card-img-top" alt="Mobil A">
                                            <div class="card-body">
                                                <h5 class="card-title">SUZUKI GRAND VITARA</h5>
                                                <p class="card-text">Starting From Rp 359.400.000</p>
                                                <a href="suzuki/grandvitara.php" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/toyota/fortunergr.png" class="card-img-top" alt="Mobil B">
                                            <div class="card-body">
                                                <h5 class="card-title">TOYOTA FORTUNER GR</h5>
                                                <p class="card-text">Starting From Rp 756.100.000</p>
                                                <a href="toyota/fortunergr.php" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/hyundai/creta.png" class="card-img-top" alt="Mobil C">
                                            <div class="card-body">
                                                <h5 class="card-title">HYUNDAI CRETA</h5>
                                                <p class="card-text">Starting From Rp 288.000.000</p>
                                                <a href="hyundai/creta.php" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/bmw/x3.png" class="card-img-top" alt="Mobil A">
                                            <div class="card-body">
                                                <h5 class="card-title">BMW X3</h5>
                                                <p class="card-text">Starting From Rp 969.000.000</p>
                                                <a href="bmw/x3.php" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card">
                                            <img src="images/hyundai/palisade.png" class="card-img-top" alt="Mobil B">
                                            <div class="card-body" style="font-family: 'Outfit', sans-serif;">
                                                <h5 class="card-title">HYUNDAI PALISADE</h5>
                                                <p class="card-text">Starting From Rp 910.000.000</p>
                                                <a href="hyundai/palisade.php" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/chery/tiggo8.png" class="card-img-top" alt="Mobil C">
                                            <div class="card-body">
                                                <h5 class="card-title">CHERY TIGGO 8 PRO</h5>
                                                <p class="card-text">Starting From Rp 528.500.000</p>
                                                <a href="chery/tiggo8.php" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselRilis" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselRilis" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                <div class="promo text-center my-5" style="font-family: 'Outfit', sans-serif;">
                    <h2 class="promo-title" style="color: #2C6B2F;">PROMO</h2>
                    <p class="lead">Get exciting promo updates only at OTOORDO!</p>
                </div>
                    <div id="carouselPromo" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/promo/toyota1.png" class="card-img-top" alt="Promo Mobil A">
                                            <div class="card-body">
                                                <h5 class="card-title">Promo From Toyota</h5>
                                                <p class="card-text">DP Ringan 10% serta Bunga Rendah 0%</p>
                                                <a href="#" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/promo/daihatsu1.png" class="card-img-top" alt="Promo Mobil B">
                                            <div class="card-body">
                                                <h5 class="card-title">Promo From Daihatsu</h5>
                                                <p class="card-text">One Day Service Body Repair!</p>
                                                <a href="#" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="card" style="font-family: 'Outfit', sans-serif;">
                                            <img src="images/promo/mitsubishi1.png" class="card-img-top" alt="Promo Mobil C">
                                            <div class="card-body">
                                                <h5 class="card-title">Promo From Mitsubishi</h5>
                                                <p class="card-text">Gratis Perawatan 50.000 KM per Tahun!</p>
                                                <a href="#" class="btn btn-success" style="color: black;">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPromo" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".card");

            cards.forEach(card => {
                const img = card.querySelector(".card-img-top");

                card.addEventListener("mouseenter", () => {
                    img.style.transform = "scale(0.9)";
                });

                card.addEventListener("mouseleave", () => {
                    img.style.transform = "scale(1)";
                });
            });
        });
        </script>
    </body>
</html>