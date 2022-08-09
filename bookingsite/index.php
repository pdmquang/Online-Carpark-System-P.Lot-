<!-- Done By: Wilson, Faris, Haziq -->

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
<?php include 'front-libraries.php'; ?>
</head>

<body class="size-1140">
    <!-- <-- NAVIGATION BAR -->
    <header>
        <?php include 'navigation-bar.php'; ?>
    </header>
    <!-- <-- NAVIGATION BAR ENDS -->

    <!-- CAROUSEL -->
    <section>
        <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="img/carpark1.jpg" alt="">
                    <div class="line">
                        <div class="text hide-s">
                            <div class="line">
                                <div class="prev-arrow hide-s hide-m">
                                    <i class="icon-chevron_left"></i>
                                </div>
                                <div class="next-arrow hide-s hide-m">
                                    <i class="icon-chevron_right"></i>
                                </div>
                            </div>
                            <h2>Open Air Carparks</h2>
                            <p>Book a lot at one of the many open air carparks located around Singapore </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/carpark4.jpg">
                    <div class="line">
                        <div class="text hide-s">
                            <div class="line">
                                <div class="prev-arrow hide-s hide-m">
                                    <i class="icon-chevron_left"></i>
                                </div>
                                <div class="next-arrow hide-s hide-m">
                                    <i class="icon-chevron_right"></i>
                                </div>
                            </div>
                            <h2>Underground Carparks</h2>
                            <p>Going into the city and can't find a spot to park?</p>
                            <p>Find the right spot among the many carparks in the city</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/carpark3.jpg" alt="">
                    <div class="line">
                        <div class="text hide-s">
                            <div class="line">
                                <div class="prev-arrow hide-s hide-m">
                                    <i class="icon-chevron_left"></i>
                                </div>
                                <div class="next-arrow hide-s hide-m">
                                    <i class="icon-chevron_right"></i>
                                </div>
                            </div>
                            <h2>Join Us</h2>
                            <p>Enjoy finding lots without the wait</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <-- CAROUSEL ENDS -->


        <!-- <-- BOOKING BAR -->
        <?php include 'search-bar.php'; ?>
        <!-- <-- BOOKING BAR ENDS -->


        <!--SERVICE COUNTER-->
        <div class="service-section">
            <div class="inner-width">
                <div class="service-title">
                    <h1>Our Services</h1>
                    <div class="border"></div>
                    <div class="services-container">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="counter" data-target="19800">0</div>
                            <div class="service-desc">
                                Bookings
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="counter" data-target="1000">0</div>
                            <div class="service-desc">
                                Members
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="counter" data-target="100">0</div>
                            <div class="service-desc">
                                New Users Daily
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="counter" data-target="6000">0</div>
                            <div class="service-desc">
                                Number of Datasets
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <-- SERVICE COUNTER ENDS -->


        <!-- <--ABOUT -->
        <section id="about">
            <div class="bg">
                <img src="img/cyber.jpg" />
            </div>
            <div class="about-text">
                <strong>P.LOT <span class="typing"></span></strong>
                <p>No available parking? Say forever goodbye to waiting.
                    <br>We provide convenience to drivers through our booking system.<br>Book with us anytime, anywhere. All within your fingertips!
                </p>
            </div>
        </section>
        <!-- <-- ABOUT ENDS -->


        <!-- PARKING CARD -->
        <section>
            <div class="parking-card-title">
                <h1>quick booking</h1>
            </div>
            <div class="border"></div>
            <div class="card-container">
                <div class="card">
                    <div class="circle card1">
                        <img src="img/card1.jpg">
                    </div>
                    <div class="content">
                        <h2><b>MBS Parking</b></h2>
                        <p>You can start booking your parking lot over here!</p>
                        <a href="browsebooking.php">View More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="circle">
                        <img src="img/card2.jpg">
                    </div>
                    <div class="content">
                        <h2><b>CBD Parking</b></h2>
                        <p>You can start booking your parking lot over here!</p>
                        <a href="browsebooking.php">View More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="circle">
                        <img src="img/card3.jpg">
                    </div>
                    <div class="content">
                        <h2><b>SIT Parking</b></h2>
                        <p>You can start booking your parking lot over here!</p>
                        <a href="browsebooking.php">View More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- <-- PARKING CARD ENDS -->



        <!-- <-- MEET THE TEAM -->
        <section class="teammate-section">
            <div class="section-title">
                <h1>meet the team</h1>
            </div>
            <div class="border"></div>
            <div class="teammate-container">
                <div class="teammate-card">
                    <div class="content">
                        <div class="first">
                            <div class="imgBx">
                                <img src="img/bossquang.jpeg">
                            </div>
                            <div class="contentBx">
                                <h3>Quang</h3>
                                <p> Backend Developer </p>
                            </div>
                        </div>
                        <div class="second">
                            <h2>Quang</h2>
                            <h3>Contributions</h3>
                            <p>Backend, SQL Database, PHP, AJAX, Bookings Management</p>
                        </div>
                    </div>
                </div>

                <div class="teammate-card">
                    <div class="content">
                        <div class="first">
                            <div class="imgBx">
                                <img src="img/haziq.jpeg">
                            </div>
                            <div class="contentBx">
                                <h3>Haziq</h3>
                                <p> Front/Back End Developer </p>
                            </div>
                        </div>
                        <div class="second">
                            <h2>Haziq</h2>
                            <h3>Contributions</h3>
                            <p>Frontend, Javscript, HTML, AJAX, Google Maps</p>
                        </div>
                    </div>
                </div>

                <div class="teammate-card">
                    <div class="content">
                        <div class="first">
                            <div class="imgBx">
                                <img src="img/unclealex.png">
                            </div>
                            <div class="contentBx">
                                <h3>Alex Goei</h3>
                                <p>Backend Developer Intern</p>
                            </div>
                        </div>
                        <div class="second">
                            <h2>Alex</h2>
                            <h3>Contributions</h3>
                            <p>Backend, SQL Database, PHP, CSS, Contact</p>
                        </div>
                    </div>
                </div>

                <div class="teammate-card">
                    <div class="content">
                        <div class="first">
                            <div class="imgBx">
                                <img src="img/faris.jpeg">
                            </div>
                            <div class="contentBx">
                                <h3>Faris</h3>
                                <p> Front End Developer</p>
                            </div>
                        </div>
                        <div class="second">
                            <h2>Faris</h2>
                            <h3>Contributions</h3>
                            <p>Frontend, Javascript, HTML, CSS, Home</p>
                        </div>
                    </div>
                </div>

                <div class="teammate-card">
                    <div class="content">
                        <div class="first">
                            <div class="imgBx">
                                <img src="img/bossxianzhi.jpeg">
                            </div>
                            <div class="contentBx">
                                <h3>Xian Zhi</h3>
                                <p>Front/Back End Developer</p>
                            </div>
                        </div>
                        <div class="second">
                            <h2>Xian Zhi</h2>
                            <h3>Contributions</h3>
                            <p>Backend, SQL Database, HTML, Login</p>
                        </div>
                    </div>
                </div>

                <div class="teammate-card">
                    <div class="content">
                        <div class="first">
                            <div class="imgBx">
                                <img src="img/wilson1.jpeg">
                            </div>
                            <div class="contentBx">
                                <h3>Wilson</h3>
                                <p>Front/Back End Developer</p>
                            </div>
                        </div>
                        <div class="second">
                            <h2>Wilson</h2>
                            <h3>Contributions</h3>
                            <p>Frontend, HTML, CSS, Designs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
            </div>
        </section>

        <script type="text/javascript">
            VanillaTilt.init(document.querySelectorAll(".teammate-card"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 1,
            });
        </script>
        <!-- <-- MEET THE TEAM ENDS -->


        <!-- FOOTER -->
        <footer>
            <!-- <div class="copyright">
          All Rights Reserved by &copy; Park. 2021
            </div> -->


        </footer>

        <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var theme_slider = $("#owl-demo");
                $("#owl-demo").owlCarousel({
                    navigation: false,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    autoPlay: 6000,
                    addClassActive: true,
                    // transitionStyle: "fade",
                    singleItem: true
                });
                $("#owl-demo2").owlCarousel({
                    slideSpeed: 300,
                    autoPlay: true,
                    navigation: true,
                    navigationText: ["&#xf007", "&#xf006"],
                    pagination: false,
                    singleItem: true
                });

                // Custom Navigation Events
                $(".next-arrow").click(function() {
                    theme_slider.trigger('owl.next');
                })
                $(".prev-arrow").click(function() {
                    theme_slider.trigger('owl.prev');
                })
            });
        </script>
</body>

</html>
