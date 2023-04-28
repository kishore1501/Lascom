<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SRM PR LASCOM</title>

    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Responsive-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--Animation-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!--Prettyphoto-->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!--Font-Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Owl-Slider-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">

</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    <!--Preloader-->
    <div id="preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>

    <!--Navigation-->
    <header id="menu">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#menu">
                            <h1 style="font-size: 1.4em;">SRM PR LASCOM</h1>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="Home.php">Home</a></li>
                            <li><a href="Services.php">Service</a></li>
                            <li><a href="Features.php">Features</a></li>
                            <li><a href="Portfolio.php">Portfolio</a></li>
                            <li class="active"><a class="scroll" href="Team.php">Team</a></li>
                            <li><a href="Blog.php">Blog</a></li>
                            <li><a href="Contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </header>
    <!--Slider-Start-->
    <section id="slider">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url(images/Slider/01.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">

                                <h2>Your Innovation Partner <br> Accelerating Productization</h2>

                                <!-- Getting Content from 'paragraph' table in 'lascomdb' and 'id=1'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Content FROM paragraph WHERE Paragraphid = 1";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $content = $row['Content'];

                                    echo $content;

                                    mysqli_close($connection);
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image:url(images/Slider/02.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">

                                <h2>Your Innovation Partner <br> Accelerating Productization</h2>
                                <!-- Getting Content from 'paragraph' table in 'lascomdb' and 'id=2'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Content FROM paragraph WHERE Paragraphid = 2";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $content = $row['Content'];

                                    echo $content;

                                    mysqli_close($connection);
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!--Team-Section-Start-->
        <section id="team">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>OUR TE<span>AM</span></h2>
                        <div class="line"></div>
                        <p><span><strong>L</strong></span>orem Ipsum is simply dummy text of the printing and
                            typesetting industry</p>
                    </div>
                </div>

                <!-- #1 -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="team-sec">
                            <div class="team-img"> <img src="images/Team/Chairman.jpg" class="img-responsive" alt="Chairman">
                                <div class="team-desc">
                                    <h5>Shri P Ravi</h5>
                                    <h6>Chairman</h6>
                                    <ul class="team-social-icon">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #2 -->
                    <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="team-sec">
                            <div class="team-img"> <img src=" " class="img-responsive" alt="executive director">
                                <div class="team-desc">
                                    <h5>Dr. Ananda Krishnan DS</h5>
                                    <p>Our executive director</p>
                                    <ul class="team-social-icon">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="team-sec">
                            <div class="team-img"> <img src="images/Team/HeadIT.jpg" class="img-responsive" alt="">
                                <div class="team-desc">
                                    <h5>Rajesh Krishnamurthi </h5>
                                    <p>Head IT</p>
                                    <ul class="team-social-icon">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #4 -->
                    <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="team-sec">
                            <div class="team-img"> <img src="" class="img-responsive" alt="AGM-IT">
                                <div class="team-desc">
                                    <h5>Mr. Parthiban</h5>
                                    <p>Assistant General Manager, IT</p>
                                    <ul class="team-social-icon">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonials-Section-Start-->
        <section id="testimonials" class="parallex">
            <div class="container">
                <div class="quote"> <i class="fa fa-quote-left"></i> </div>
                <div class="clearfix"></div>
                <div class="slider-text">
                    <div id="owl-testi" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-md-10 col-md-offset-1"> <img src="images/Testimonials/02.jpg" class="img-circle" alt="">
                                <h5>Thank you for the recognition and bonus for the hard work I put in on the last project.
                                    It means a lot to me to know that my contributions are valued</h5>
                                <h6>Kishore</h6>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1"> <img src="images/Testimonials/03.jpg" class="img-circle" alt="">
                            <h5>I really appreciate the flexibility the company offers in terms of scheduling and telecommuting.
                                It allows me to better balance my work and personal life.</h5>
                            <h6>Nadim Khan</h6>
                            <p>Web Designer</p>
                        </div>
                        <div class="col-md-10 col-md-offset-1"> <img src="images/Testimonials/04.jpg" class="img-circle" alt="">
                            <h5>I'm grateful for the training opportunities the company has provided me.
                                It's helped me grow in my career and feel more confident in my role.</h5>
                            <h6>Rosia</h6>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Fun-Facts-Section-Start-->
        <section id="fun-facts">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="fun-fact text-center">
                            <h3><i class="fa fa-thumbs-o-up"></i> <span class="timer">365</span></h3>
                            <h6>Happy Clients</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="fun-fact text-center">
                            <h3><i class="fa fa-briefcase fa-6"></i> <span class="timer">73</span></h3>
                            <h6>Completed Projects</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="fun-fact text-center">
                            <h3><i class="fa fa-coffee"></i> <span class="timer">297345</span></h3>
                            <h6>Cups of Coffee</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="fun-fact text-center">
                            <h3><i class="fa fa-code"></i> <span class="timer">9823686</span></h3>
                            <h6>Lines of Code</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="bg-sec">
                <div class="container">
                    <h2>I'm excited to <strong>receive </strong>your feedback!</h2>
                </div>
            </div>
        </footer>
        <footer id="footer-down">
            <h2>Follow Us On</h2>
            <ul class="social-icon">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p> &copy; Copyright Lascom- Created By : Kishore Ramesh</p>

        </footer>
        <!--Jquery-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!--Boostrap-Jquery-->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!--Preetyphoto-Jquery-->
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <!--NiceScroll-Jquery-->
        <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <!--Isotopes-->
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <!--Wow-Jquery-->
        <script type="text/javascript" src="js/wow.js"></script>
        <!--Count-Jquey-->
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <!--Owl-Crousels-Jqury-->
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <!--Main-Scripts-->
        <script type="text/javascript" src="js/script.js"></script>
</body>

</html>